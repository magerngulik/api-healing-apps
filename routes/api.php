<?php

use App\Models\Destination;
use App\Models\Accommodation;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\ProductResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

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