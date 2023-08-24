<?php

namespace App\Helpers;

use App\Models\Cart;
use App\Models\Location;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartHelper
{
    public static function getCartItemsCount(): int
    {
        $user = \request()->user();
        if ($user) {
            return Cart::where('user_id', $user->id)->sum('quantity');
        } else {
            return array_reduce(
                self::getCookieCartItems(),
                fn ($carry, $item) => $carry + $item['quantity'],
                0
            );
        }
    }

    public static function getCartItems()
    {
        $request = \request();
        $user = $request->user();
        if ($user) {
            return Cart::where('user_id', $user->id)->get()->map(
                fn ($item) => ['location_id' => $item->location_id, 'quantity' => $item->quantity]
            );
        } else {
            return self::getCookieCartItems();
        }
    }

    public static function getCookieCartItems()
    {
        $request = \request();
        return json_decode($request->cookie('cart_items', '[]'), true);
    }

    public static function getCountFromItems($cartItems)
    {
        return array_reduce(
            $cartItems,
            fn ($carry, $item) => $carry + $item['quantity'],
            0
        );
    }

    public static function moveCartItemsIntoDb()
    {
        $request = \request();
        $cartItems = self::getCookieCartItems();
        $dbCartItems = Cart::where(['user_id' => $request->user()->id])->get()->keyBy('location_id');
        $newCartItems = [];
        foreach ($cartItems as $cartItem) {
            if (isset($dbCartItems[$cartItem['location_id']])) {
                continue;
            }
            $newCartItems[] = [
                'user_id' => $request->user()->id,
                'location_id' => $cartItem['location_id'],
                'quantity' => $cartItem['quantity'],
            ];
        }

        if (!empty($newCartItems)) {
            Cart::insert($newCartItems);
        }
    }

    public static function getLocationsAndCartItems()
    {
        $cartItems = self::getCartItems();
        $ids = Arr::pluck($cartItems, 'location_id');

        // dd($cartItems);

        $locations = DB::table('locations')
            ->join('seasons', 'locations.season_id', '=', 'seasons.season_id')
            ->join('countries', 'locations.country_id', '=', 'countries.country_id')
            ->select('seasons.name as seasonname', 'countries.name as countryname', 'locations.*')
            ->whereIn('location_id', $ids)->get()->toArray();

        $locations = json_decode(json_encode($locations), true);

        foreach ($locations as &$location) {
            $location['user_id'] = $cartItems[$location['location_id']]['user_id'];
            $location['quantity'] = $cartItems[$location['location_id']]['quantity'];
        }

        return $locations;
    }
}
