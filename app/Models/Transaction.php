<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Transaction extends Model
{
   protected $fillable = [   
        "package_id",	
        "user_id",	
        "destination_id",	
        "transaction_date",	
        "total_amount",	
        "payment_status",	
        "payment_method",	
        "participant_count",
   ];
}
