<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){

        //Just for testing purposes
        $locations = [
            ['name' => 'Islands', 'price' => '50', 'free_spots' => '10', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit'],
            ['name' => 'Mountains', 'price' => '100', 'free_spots' => '20', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit'],
            ['name' => 'Caves', 'price' => '200', 'free_spots' => '30', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit']
        ];

        return view('location', ['locations' => $locations]);
    }
    public function show($id){
        return view('location-description', ['id' => $id]);
    }
}
