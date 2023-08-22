<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderLocation;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function fillUserData(Request $request){
        $user = auth()->user();
        return view('checkout' , [
            'user' => $user
        ]);
    }

    public function saveOrder(Request $request){

        $data = $request->all();

        $newOrder = [
            'customer_full_name' => $data['name'],
            'customer_email' => $data['email'],
            'customer_phone_number' => $data['phone-number'],
            'payment_type_id' => $data['payment-type-id'],
            'total_cost' => $data['total-cost'],
            'notes' => $data['notes'],
        ];

        $order = Order::create($newOrder);

        $newOrderLocation = [
            'order_id' => $order->order_id,
            'location_id' => $data['location-id'],
            'person_count' => $data['person-count'],
            'starp-cost' => $data['starp-cost'],
        ];

        OrderLocation::create($newOrderLocation);

        return redirect()->route('home')->with('success', 'Order Done Successfully');
        return response()->json(['message' => 'Order Done Successfully']);
    }
}
