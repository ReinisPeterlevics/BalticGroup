<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderLocation;
use App\Models\Location;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //mandatory login to checkout
    public function __construct()
    {
        $this->middleware('auth');
    }

    //fills in the user data and cart data in html
    public function fillData()
    {
        $cart = session('ourCart');

        if (empty($cart)) {

            return redirect()->route('home');
        }

        $user = auth()->user();
        session(['user_data' => $user]);

        $processedOrders = [];
        $totalPrice = 0;

        foreach ($cart as $cartItem) {
            $locationId = $cartItem['location_id'];
            $quantity = $cartItem['quantity'];

            $location = Location::find($locationId);

            if ($location) {
                $locationName = $location->name;
                $locationPrice = $location->price;
                $locationSubPrice = $locationPrice * $quantity;
                $totalPrice += $locationSubPrice;

                $processedOrders[] = [
                    'locationId' => $locationId,
                    'quantity' => $quantity,
                    'locationName' => $locationName,
                    'locationPrice' => $locationPrice,
                    'locationSubPrice' => $locationSubPrice,
                ];
            }
        }

        session(['processedOrders' => $processedOrders, 'totalPrice' => $totalPrice]);

        return view('checkout', ['processedOrders' => $processedOrders, 'totalPrice' => $totalPrice, 'user' => $user]);
    }

    //saves order-booking to the database in order, order_location tables and empties cart
    public function saveOrder(Request $request)
    {
        $user = session('user_data');
        $processedOrders = session('processedOrders');
        $totalPrice = session('totalPrice');

        $data = $request->all();

        $newOrder = [
            'customer_full_name' => $user['name'],
            'customer_email' => $user['email'],
            'customer_phone_number' => $data['phone-number'],
            'payment_type_id' => $data['payment-type-id'],
            'total_cost' => $totalPrice,
            'notes' => $data['notes'],
        ];

        //$order = Order::create($newOrder);

        foreach ($processedOrders as $procOrder) {
            $locationID = $procOrder['locationId'];
            $quanTity = $procOrder['quantity'];
            $locationSubprice = $procOrder['locationSubPrice'];

            $newOrderLocation = [
                //'order_id' => $order->order_id,
                'location_id' => $locationID,
                'person_count' => $quanTity,
                'starp_cost' => $locationSubprice
            ];

            //OrderLocation::create($newOrderLocation);
        }

        // session(['ourCart' => []]);
        // session(['processedOrders' => []]);
        // session(['totalPrice' => 0]);
        return redirect()->route('home')->with('success', 'Order Done Successfully');
        //return response()->json(['message' => 'Order Done Successfully']);
    }
}
