<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Resources\DestinationResource;

class DestinationController extends Controller
{
    public function index(){
        $data =  Destination::with('accommodation','package','location')->get();
        return  DestinationResource::collection($data);
    }
    
    public function show(String $id){
        $destination = Destination::with('accommodation', 'package', 'location')->findOrFail($id);
        return new DestinationResource($destination);
    }
}
