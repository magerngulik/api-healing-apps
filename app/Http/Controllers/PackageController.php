<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
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
    
    public function serchingAllActivePackage(String $id){
        $currentDate = Carbon::now();
        $data = Package::with('destination', 'itinerary')
                ->where('id', $id)
                ->whereDate('start_date', '<=', $currentDate)
                ->whereDate('end_date', '>=', $currentDate)
                ->get();
        return PackageResource::collection($data);
    }

    public function getLocationByCountryId(Request $request){
        $countryId = $request->query('country_id');
        $data = Package::with('destination.location.country','itinerary')
        ->whereHas('destination.location.country', function ($query) use ($countryId) {
            $query->where('id', $countryId);
        })
        ->get();
        return PackageResource::collection($data);
    }

    public function people(String $people){
        $currentDate = Carbon::now();
        $data = Package::with('destination')
            ->whereDate('start_date', '<=', $currentDate)
            ->whereDate('end_date', '>=', $currentDate)
            ->where('max_capacity', '>=', $people)
            ->get();
        return PackageResource::collection($data);
    }

    public function destination(String $destinationId){
        $currentDate = Carbon::now();
        $data = Package::with('destination')
        ->whereDate('start_date', '<=', $currentDate)
        ->whereDate('end_date', '>=', $currentDate)
        ->whereExists(function ($query) use ($destinationId) {
            $query->select(DB::raw(1))
                ->from('destinations')
                ->join('package_destinations', 'destinations.id', '=', 'package_destinations.destination_id')
                ->whereRaw('packages.id = package_destinations.package_id')
                ->where('destinations.id', $destinationId);
        })
        ->get();
        return PackageResource::collection($data);
    }
    
    public function destinationPeople(Request $request){
        $people = $request->query('people');
        $destinationId = $request->query('destination_id');
        $currentDate = Carbon::now();
        $data = Package::with('destination')->whereDate('start_date', '<=', $currentDate)
        ->whereDate('end_date', '>=', $currentDate)
        ->where('max_capacity', '>=', $people)
        ->whereExists(function ($query) use ($destinationId) {
            $query->select(DB::raw(1))
                ->from('destinations')
                ->join('package_destinations', 'destinations.id', '=', 'package_destinations.destination_id')
                ->whereRaw('packages.id = package_destinations.package_id')
                ->where('destinations.id', $destinationId);
        })
        ->get();
        return PackageResource::collection($data);
    }

}
