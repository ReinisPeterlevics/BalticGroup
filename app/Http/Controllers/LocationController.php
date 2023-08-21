<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function index(){
        $locations = DB::table('locations')->join('seasons', 'locations.season_id', '=','seasons.season_id')->join('countries', 'locations.country_id', '=', 'countries.country_id')->select('seasons.name as seasonname', 'countries.name as countryname', 'locations.*')->get();
        return view('location', ['locations' => $locations]);
    }
    public function show($id){
        return view('location-description', ['id' => $id]);
    }
}
