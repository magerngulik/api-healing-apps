<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Resources\LocationResorce;

class LocationController extends Controller
{
    function index() {
        //contoh join ya slur 
        // $locations = Location::join('countries', 'locations.country_id', '=', 'countries.id')
        // ->select('locations.id', 'locations.name', 'locations.city', 'countries.name as country_name')
        // ->get();

        $locations = Location::with('country')->get();
        return LocationResorce::collection($locations);
    }
}
