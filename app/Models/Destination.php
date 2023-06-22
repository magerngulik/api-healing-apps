<?php

namespace App;

namespace App\Models;
use App\Models\Accommodation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Destination extends Model
{
        /**
         * Get all of the comments for the Destination
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function accommodation(): HasMany
        {
            return $this->hasMany(Accommodation::class);
        }
    
}