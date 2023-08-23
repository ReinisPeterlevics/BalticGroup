<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\CartHelper;
use App\Models\Cart;
use App\Models\Location;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller{

    public function index(){
        list($locations, $cartItems) = CartHelper::getLocationsAndCartItems();
        $total = 0;
        foreach ($locations as $location) {
            $total += $location->price * $cartItems[$location->location_id]['quantity'];
        }

        return view('cart.index', compact('cartItems', 'products', 'total'));
    }

    public function add(Request $request, $id){
        $quantity = $request->post('persons', 1);
        $user = $request->user();
        if ($user) {

            $cartItem = Cart::where(['user_id' => $user->id, 'location_id' => $id])->first();

            if ($cartItem) {
                $cartItem->quantity += $quantity;
                $cartItem->update();
            } else {
                $data = [
                    'user_id' => $request->user()->id,
                    'location_id' => $id,
                    'quantity' => $quantity,
                ];
                Cart::create($data);
            }

            return Redirect::back()->with('message','Added to cart!');
        } else {
            $cartItems = json_decode($request->cookie('cart_items', '[]'), true);
            $productFound = false;
            foreach ($cartItems as &$item) {
                if ($item['location_id'] === $id) {
                    $item['quantity'] += $quantity;
                    $productFound = true;
                    break;
                }
            }
            if (!$productFound) {
                $cartItems[$id] = [
                    'user_id' => null,
                    'location_id' => $id,
                    'quantity' => $quantity
                ];
            }
            Cookie::queue('cart_items', json_encode($cartItems), 60 * 24 * 30);
            return Redirect::back()->with('message','Added to cart!');
        }
    }

    public function remove(Request $request, Location $location){
        $user = $request->user();
        if ($user) {
            $cartItem = Cart::query()->where(['user_id' => $user->id, 'location_id' => $location->location_id])->first();
            if ($cartItem) {
                $cartItem->delete();
            }

            return response([
                'count' => CartHelper::getCartItemsCount(),
            ]);
        } else {
            $cartItems = json_decode($request->cookie('cart_items', '[]'), true);
            foreach ($cartItems as $i => &$item) {
                if ($item['location_id'] === $location->location_id) {
                    array_splice($cartItems, $i, 1);
                    break;
                }
            }
            Cookie::queue('cart_items', json_encode($cartItems), 60 * 24 * 30);

            return response(['count' => CartHelper::getCountFromItems($cartItems)]);
        }
    }

    public function updateQuantity(Request $request, Location $location){
        $quantity = (int)$request->post('quantity');
        $user = $request->user();
        if ($user) {
            Cart::where(['user_id' => $request->user()->id, 'location_id' => $location->location_id])->update(['quantity' => $quantity]);

            return response([
                'count' => CartHelper::getCartItemsCount(),
            ]);
        } else {
            $cartItems = json_decode($request->cookie('cart_items', '[]'), true);
            foreach ($cartItems as &$item) {
                if ($item['location_id'] === $location->location_id) {
                    $item['quantity'] = $quantity;
                    break;
                }
            }
            Cookie::queue('cart_items', json_encode($cartItems), 60 * 24 * 30);

            return response(['count' => CartHelper::getCountFromItems($cartItems)]);
        }
    }
}
