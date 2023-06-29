<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Resources\LocationResorce;

class LocationController extends Controller
{
    function index() {
        $locations = Location::with('country')->get();
        return LocationResorce::collection($locations);
    }
}
