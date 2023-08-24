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
        // $user = auth()->user();
        // return view('checkout' , [    Was filling data, but didn'i send data further away
        //     'user' => $user
        // ]);

        $user = auth()->user();
        session(['user_data' => $user]);
        return view('checkout', [ 'user' => $user ]);
    }

    public function saveOrder(Request $request){

        session()->flash('orderPlaced', true);
        return redirect()->route('home');
    //return response()->json(['message' => 'Order Done Successfully']);
    }
}
