<?php

namespace App\Models;

use App\Models\Itinerary;
use App\Models\Destination;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    
    public function destination(): BelongsToMany
    {
        return $this->belongsToMany(Destination::class,'package_destinations','package_id','destination_id');
    }
    
    public function itinerary(): HasMany
    {
        return $this->hasMany(Itinerary::class);
    }
}
