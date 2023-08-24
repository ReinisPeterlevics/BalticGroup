<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\CartHelper;
use App\Models\Cart;
use App\Models\Location;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

// USER FUNCTIONS DISABLED FOR NOW AND DATABASE WONT BE USED INSTEAD COOKIES WILL BE USED

class CartController extends Controller
{

    // public function index()
    // {
    //     list($locations, $cartItems) = CartHelper::getLocationsAndCartItems();
    //     $total = 0;
    //     foreach ($locations as $location) {
    //         $total += $location->price * $cartItems[$location->location_id]['quantity'];
    //     }

    //     return view('cart.index', compact('cartItems', 'products', 'total'));
    // }

    public function add(Request $request, $id)
    {
        $quantity = $request->post('persons', 1);
        $user = $request->user();
        // if ($user) {

        //     $cartItem = Cart::where(['user_id' => $user->id, 'location_id' => $id])->first();

        //     if ($cartItem) {
        //         $cartItem->quantity += $quantity;
        //         $cartItem->update();
        //     } else {
        //         $data = [
        //             'user_id' => $request->user()->id,
        //             'location_id' => $id,
        //             'quantity' => $quantity,
        //         ];
        //         Cart::create($data);
        //     }

        //     return Redirect::back()->with('message', 'Added to cart!');
        // } else {
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

            return Redirect::back()->with('message', 'Added to cart!');
        // }
    }

    // public function remove(Request $request, $id)
    // {
    //     $user = $request->user();
    //     if ($user) {
    //         $cartItem = Cart::query()->where(['user_id' => $user->id, 'location_id' => $id])->first();
    //         if ($cartItem) {
    //             $cartItem->delete();
    //         }

    //         return response([
    //             'count' => CartHelper::getCartItemsCount(),
    //         ]);
    //     } else {
    //         $cartItems = json_decode($request->cookie('cart_items', '[]'), true);
    //         foreach ($cartItems as $i => &$item) {
    //             if ($item['location_id'] === $id) {
    //                 array_splice($cartItems, $i, 1);
    //                 break;
    //             }
    //         }
    //         Cookie::queue('cart_items', json_encode($cartItems), 60 * 24 * 30);

    //         return response(['count' => CartHelper::getCountFromItems($cartItems)]);
    //     }
    // }

    public function updateQuantity(Request $request, $id)
    {
        $parameter = $id . '-count';
        $quantity = (int)$request->$parameter;
        $user = $request->user();
        // if ($user) {
        //     // Check quantity change
        //     if ($quantity == 0) {
        //         // If quantity is 0, remove the item from the cart
        //         $cartItem = Cart::query()->where(['user_id' => $user->id, 'location_id' => $id])->first();
        //         if ($cartItem) { $cartItem->delete(); }
        //     } else {
        //         // If quantity is not 0, update the item in the cart
        //         Cart::where(['user_id' => $request->user()->id, 'location_id' => $id])->update(['quantity' => $quantity]);
        //     }
        // } else {
            // Check quantity change
            if ($quantity == 0) {
                // If quantity is 0, remove the item from the cart
                $cartItems = json_decode($request->cookie('cart_items', '[]'), true);
                unset($cartItems[$id]);
                Cookie::queue('cart_items', json_encode($cartItems), 60 * 24 * 30);
            } else {
                // If quantity is not 0, update the item in the cart
                $cartItems = json_decode($request->cookie('cart_items', '[]'), true);
                foreach ($cartItems as &$item) {
                    if ($item['location_id'] === $id) {
                        $item['quantity'] = $quantity;
                        break;
                    }
                }
                Cookie::queue('cart_items', json_encode($cartItems), 60 * 24 * 30);
            }
        // }
        return Redirect::back()->with('cartIsVisible', true);
    }
}
