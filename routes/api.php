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


Route::get('/get-by-location-id', [PackageController::class, 'getLocationByCountryId']);

Route::get('/destination', [DestinationController::class, 'index']);
Route::get('/destination/{id}', [DestinationController::class, 'show']);

Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthentificationController::class, 'login']);
    Route::post('/register', [AuthentificationController::class, 'register']);    
    Route::get('/logout', [AuthentificationController::class, 'logout'])->middleware('auth:sanctum'); 
    Route::get('/profile', [AuthentificationController::class, 'me'])->middleware('auth:sanctum'); 
});

Route::prefix('location')->group(function () {
    Route::get('/getall', [LocationController::class, 'index']); 
    Route::get('/get-country', [LocationController::class, 'getAllCountry']); 
});

Route::prefix('transaction')->group(function () {
    Route::post('/add', [TransactionController::class, 'addtransaction'])->middleware('auth:sanctum'); 
    Route::get('/user-transaction', [TransactionController::class, 'usertransaction'])->middleware('auth:sanctum');  
});

Route::prefix('package')->group(function () {
    Route::get('/active', [PackageController::class, 'getAllActivePackage']);
    Route::get('/active/{id}', [PackageController::class, 'serchingAllActivePackage']);        
    Route::get('/people/{people}', [PackageController::class, 'people']);        
    Route::get('/destination/{destination}', [PackageController::class, 'destination']);        
    Route::get('/peopledestinatin', [PackageController::class, 'destinationPeople']);        
    Route::get('/serching', [PackageController::class, 'index']);
    Route::get('/location-id', [PackageController::class, 'getLocationByCountryId']);
});






