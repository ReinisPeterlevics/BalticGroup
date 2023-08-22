<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $seasons = DB::table('seasons')->get();
        $countries = DB::table('countries')->orderBy('name')->get();
        $minPrice = DB::table('locations')->min('price');
        $maxPrice = DB::table('locations')->max('price');
        $maxSpots = DB::table('locations')->max('spots_left');
        return view('home', ['seasons' => $seasons, 'countries' => $countries, 'minPrice' => $minPrice,'maxPrice' => $maxPrice,'maxSpots' => $maxSpots]);
    }
}
