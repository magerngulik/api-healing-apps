<?php

use App\Models\Package;
use App\Models\Product;
use App\Models\Itinerary;
use App\Models\Destination;
use Illuminate\Http\Request;
use App\Models\Accommodation;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\ProductResource;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('product/', function () {
  
    return ProductResource::collection(Product::all());
});

Route::get('desta/', function () {
    $data = [
        "data" => Destination::with('accommodation')->get()
    ];

    return response()->json($data, 200);
});

Route::get('/package', function () {
    $data = [
        "data" => Package::with('itinerary','destination')->get()
    ];

    return response()->json($data, 200);
});

Route::get('/itinerary', function () {
    $data = [
        "data" => Itinerary::with('package')->get()
    ];
    return response()->json($data, 200);
});