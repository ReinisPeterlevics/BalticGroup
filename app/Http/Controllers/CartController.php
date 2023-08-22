<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addToCart(Request $request, $id) {

        $cart = session('ourCart');
        $quantity = $request->input('persons');

        $cartItem = [
            'location_id' => $id,
            'quantity' => $quantity,
        ];

        if($cart && count($cart) > 0) {
            $cart[] = $cartItem;
        } else {
            $cart = [$cartItem];
        }

        session(['ourCart' => $cart ]);

        return back();
    }

    public function updateItemQuantity(Request $request, $id) {
        $quantity = $request->input('persons');
    }

    public function displayCart(Request $request) {
        $cart = session()->get('ourCart');
        $locations = [];
        $totalPrice = 0;

        foreach($cart as $cartItem) {
            $locationId = $cartItem['location_id'];
            $quantity = $cartItem['quantity'];

            $location = DB::table('locations')
                ->join('countries', 'locations.country_id', '=', 'countries.country_id')
                ->select('countries.name as countryname', 'locations.*')
                ->where('locations.location_id', '=', $locationId)
                ->get();

            $location[0]->quantity = $quantity;
            $location[0]->price = $quantity * $location[0]->price;
            $totalPrice += $location[0]->price;
            array_push($locations, $location[0]);
        }

        return view('cart', compact('locations', 'totalPrice'));
    }


    public function deleteItem(Request $request, $id) {

    }

}
