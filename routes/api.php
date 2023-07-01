<?php

use App\Models\Package;
use App\Models\Product;
use App\Models\Itinerary;
use App\Models\Destination;
use Illuminate\Http\Request;
use App\Models\Accommodation;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\PackageResource;
use App\Http\Resources\ProductResource;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AuthentificationController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/serching-package', [PackageController::class, 'index']);
Route::get('/get-by-location-id', [PackageController::class, 'getLocationByCountryId']);

Route::get('/destination', [DestinationController::class, 'index']);
Route::get('/destination/{id}', [DestinationController::class, 'show']);
Route::get('/active-package', [PackageController::class, 'getAllActivePackage']);
Route::get('/active-package/{id}', [PackageController::class, 'serchingAllActivePackage']);

Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthentificationController::class, 'login']);
    Route::post('/register', [AuthentificationController::class, 'register']);    
    Route::get('/logout', [AuthentificationController::class, 'logout'])->middleware('auth:sanctum'); 
    Route::get('/me', [AuthentificationController::class, 'me'])->middleware('auth:sanctum'); 
});

Route::prefix('location')->group(function () {
    Route::get('/getall', [LocationController::class, 'index']); 
    Route::get('/get-country', [LocationController::class, 'getAllCountry']); 
});

Route::prefix('transaction')->group(function () {
    Route::post('/add', [TransactionController::class, 'addtransaction'])->middleware('auth:sanctum'); 
    Route::get('/user-transaction', [TransactionController::class, 'usertransaction'])->middleware('auth:sanctum');  
});



// Route::get('product/', function () {
  
//     return ProductResource::collection(Product::all());
// });

// Route::get('/package', function () {
//     return PackageResource::collection(Package::with('destination')->get());
// });

// Route::get('package/{id}', function ($id) {
//     $query = Package::with('itinerary','destination')
//     ->where('id', $id)
//     ->get();    
//     return PackageResource::collection($query);
// });

// Route::get('/itinerary', function () {
//     $data = [
//         "data" => Itinerary::with('package')->get()
//     ];
//     return response()->json($data, 200);
// });








