<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Resources\CountryResource;
use App\Http\Resources\LocationResorce;

class LocationController extends Controller
{
    function index() {
        $locations = Location::with('country')->get();
        return LocationResorce::collection($locations);
    }

    public function getAllCountry(){
        $county = Country::select('id', 'name','description','image')->get();
        return CountryResource::collection($county);
    }
}
