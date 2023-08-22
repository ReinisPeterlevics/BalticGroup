<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $location_id) {
        $quantity = $request->input('quantity');

        $location;

        $cartItem = [
            'location_id' => $location_id,
            'quantity' => $quantity,
        ];

    }
}
