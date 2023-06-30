<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Resources\PackageResource;
use App\Http\Resources\DestinationResource;

class PackageController extends Controller
{
    public function index(Request $request){
        $startDate = $request->query('start_date');
        $maxCapacity = $request->query('max_capacity');
        $location_id = $request->query('location_id');
        $data = Package::with('destination')
            ->where('start_date', '>=', $startDate)
            ->where('max_capacity', '>=', $maxCapacity)
            ->whereHas('destination', function ($query) use ($location_id) {
                $query->where('location_id', $location_id);
            })
            ->get();
        return PackageResource::collection($data);
    }

    public function getAllActivePackage(){
        $currentDate = Carbon::now();
        $data = Package::with('destination','itinerary')
            ->whereDate('start_date', '<=', $currentDate)
            ->whereDate('end_date', '>=', $currentDate)
            ->get();
        return PackageResource::collection($data);
    }

    public function getLocationByCountryId(Request $request){
        $countryId = $request->query('country_id');
        $data = Package::with('destination.location.country')
        ->whereHas('destination.location.country', function ($query) use ($countryId) {
            $query->where('id', $countryId);
        })
        ->get();
        return PackageResource::collection($data);
    }

}
