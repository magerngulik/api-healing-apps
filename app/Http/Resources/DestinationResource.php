<?php

namespace App\Http\Resources;

use App\Helpers\ImageHelper;
use Illuminate\Http\Resources\Json\JsonResource;

class DestinationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            "id"=> $this->id,
            "name"=> $this->name,
            "description"=> $this->description,
            "image"=>  ImageHelper::convertImagePathToUrl($this->image),
            "location_id"=> $this->location_id,
            "rating"=> $this->rating,
            "accommodation"=>  $this->whenLoaded('accommodation', function () {
                return collect($this->accommodation)->except(['created_at', 'updated_at']);
            }),
            "package"=> $this->whenLoaded('package', function () {
                return collect($this->package)->except(['created_at', 'updated_at']);
            }),
            "location" => $this->whenLoaded('location', function () {
                return collect($this->location)->except(['created_at', 'updated_at']);
            }),
        ];
    }
}
