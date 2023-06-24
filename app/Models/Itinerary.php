<?php


namespace App\Models;
use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Itinerary extends Model
{
   
    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }
}
