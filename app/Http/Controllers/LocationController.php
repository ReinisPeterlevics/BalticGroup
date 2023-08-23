<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function index(Request $request){
        $searchArr = $request->query->all();
        $searchMap=array();
        if($searchArr){
            if(isset($searchArr['season'])){
                $searchMap['locations.season_id'] = ['operator' => '=', "value" => $searchArr['season']];
            }
            if($searchArr['date-from']){
                $searchMap['locations.start_date'] = ['operator' => '>=', "value" => $searchArr['date-from']];
            }
            if($searchArr['date-to']){
                $searchMap['locations.end_date'] = ['operator' => '<=', "value" => $searchArr['date-to']];
            }
            if(isset($searchArr['country'])){
                $searchMap['locations.country_id'] = ['operator' => '=', "value" => $searchArr['country']];
            }
            if($searchArr['budget']){
                $searchMap['locations.price'] = ['operator' => '<=', "value" => $searchArr['budget']];
            }
            if($searchArr['persons']){
                $searchMap['locations.spots_left'] = ['operator' => '>=', "value" => $searchArr['persons']];
            }
        }
        $locations = DB::table('locations')
                    ->join('seasons', 'locations.season_id', '=','seasons.season_id')
                    ->join('countries', 'locations.country_id', '=', 'countries.country_id')
                    ->select('seasons.name as seasonname', 'countries.name as countryname', 'locations.*')
                    ->whereNested(function($query) use ($searchMap) {
                        foreach ($searchMap as $key => $value){
                            if ($value != ''){
                                $query->where($key, $value["operator"], $value["value"]);
                            }
                        }
                    }, 'and')
                    ->get();
        return view('location', ['locations' => $locations]);
    }

    public function show($id){
        $location = DB::table('locations')
                    ->join('seasons', 'locations.season_id', '=','seasons.season_id')
                    ->join('countries', 'locations.country_id', '=', 'countries.country_id')
                    ->select('seasons.name as seasonname', 'countries.name as countryname', 'locations.*')
                    ->where('locations.location_id', '=', $id)
                    ->get();
        return view('location-description', ['location' => $location]);
    }
    public function random(){
        $locations = DB::table('locations')
                    ->join('seasons', 'locations.season_id', '=','seasons.season_id')
                    ->join('countries', 'locations.country_id', '=', 'countries.country_id')
                    ->select('seasons.name as seasonname', 'countries.name as countryname', 'locations.*')
                    ->inRandomOrder()
                    ->get();
        return view('location-description', ['location' => $locations]);
    }
}
