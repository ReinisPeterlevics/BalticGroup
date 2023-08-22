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

    public function  index(){
        $user = auth()->user();
        return view('checkout' , [
            'user' => $user
        ]);

    }

    public function sttore(Request $request){

        // $validatedData = $request->validate([
        //     'first_name' => 'required|string',
        //     'last_name' => 'required|string',
        //     'email' => 'required|email',
        //     'phone_number' => 'required|string',
        //     'payment_type_id' => 'required|integer',
        //     'total_cost' => 'required|numeric',
        //     'notes' => 'nullable|string',
        //     'tour_id' => 'required|integer',
        //     'person_count' => 'required|integer',
        //     'subtotal' => 'required|numeric',
        // ]);

        // $newOrderRow = new Order();
        // $newOrderRow->customer_first_name = $request->first_name;
        // $newOrderRow->customer_last_name = $request->last_name;
        // $newOrderRow->customer_email = $request->email;
        // $newOrderRow->customer_phone_number = $request->phone_number;
        // $newOrderRow->payment_type_id = $request->payment_type_id;
        // $newOrderRow->total_cost = $request->total_cost;
        // $newOrderRow->notes = $request->notes;

        // $newOrderRow->save();

        // $newOrderLocationRow = new OrderLocation();
        // $newOrderLocationRow->order_id = $newOrderRow->order_id;
        // $newOrderLocationRow->location_id = $newOrderRow->location_id;
        // $newOrderLocationRow->person_count = $newOrderRow->person_count;
        // $newOrderLocationRow->subtotal = $newOrderRow->subtotal;

        // $newOrderLocationRow->save();


        return response()->json(['message' => 'Order Done Successfully']);
    }
}
