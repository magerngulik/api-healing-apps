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
            "itinerary" => $this->whenLoaded('itinerary', function () {
                return collect($this->itinerary)->map(function ($item) {
                    return collect($item)->except(['created_at', 'updated_at']);
                });
            }),
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'person' => $this->max_capacity,
            "destination" => $this->whenLoaded('destination',function(){
                return collect($this->destination)->map(function ($item) {
                    return [
                        "name" => $item['name'],
                        "description" => $item['description'],
                        "image" => ImageHelper::convertImagePathToUrl($item['image']),
                        "location_name" => $item['location']['name'],
                    ];
                });
            }),            
              
        ];
    }
}
