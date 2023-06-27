<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    function index() {
    }
    function transaction(){    
    }

    function addtransaction(Request $request){
        $validator = Validator::make($request->all(), [
            'package_id' => 'required|exists:packages,id',
            'user_id' => 'required|exists:users,id',
            'destination_id' => 'required|exists:destinations,id',
            'payment_status' => 'required|in:pending,completed,cancelled',
            'payment_method' => 'required|string|max:100',
            'transaction_date' => 'required|date',
            'total_amount' => 'required|numeric',
            "participant_count" =>'required|int|min:1'
        ]);
            if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }  

        $user = Transaction::create([
            'package_id' => $request->package_id,
            'user_id' => $request->user_id,
            'destination_id' => $request->destination_id,
            'payment_status' => $request->payment_status,
            'payment_method' => $request->payment_method,
            'transaction_date' => $request->transaction_date,
            'total_amount' => $request->total_amount,
            "participant_count" =>$request->participant_count
        ]);

        return response()->json(['message' => 'Transaksi Berhasil'], 201);
   
    }


    
}
