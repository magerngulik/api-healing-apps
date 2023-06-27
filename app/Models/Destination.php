<?php

namespace App;

namespace App\Models;
use App\Models\Package;
use App\Models\Location;
use App\Models\Accommodation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Destination extends Model
{      
        public function accommodation(): HasMany
        {
            return $this->hasMany(Accommodation::class);
        }

        public function package(): BelongsToMany
        
        {
            return $this->belongsToMany(Package::class,'package_destinations','destination_id','package_id');
        }

        public function location(): BelongsTo
        {
            return $this->belongsTo(Location::class);
        }

}
