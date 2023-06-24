<?php

namespace App\Http\Resources;

use App\Helpers\ImageHelper;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\JsonResource;

class PackageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            "name"=> $this->name,
            "description"=> $this->description,
            "price"=> intval($this->price),
            "image"=> ImageHelper::convertImagePathToUrl($this->image),
            "destination" => $this->whenLoaded('destination',function(){
                    return $this->destination->pluck('name');
            }),            
            "itinerary" => $this->whenLoaded('itinerary', function () {
                return collect($this->itinerary)->map->only('day', 'description')->first();
            }),
            
        ];
    }
}
