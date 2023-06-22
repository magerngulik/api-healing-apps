<?php

namespace App;

namespace App\Models;
use App\Destination;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Accommodation extends Model
{
   
    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }
    
}
