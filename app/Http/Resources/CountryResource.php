<?php

namespace App\Http\Resources;

use App\Helpers\ImageHelper;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
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
            "image"=> ImageHelper::convertImagePathToUrl($this->image),        
        ];
    }
}
