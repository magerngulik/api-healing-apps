<?php

namespace App\Http\Resources;

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
        return parent::toArray($request);

        //     {
        //         "id": 5,
        //         "name": "Pulau Maldives",
        //         "description": "<p>Nikmati keindahan Pulau Maldives yang memukau dengan pasir putih, air laut yang jernih, dan vila-vila mewah menghadap lautan. Rasakan romansa yang memikat dengan pemandangan matahari terbenam yang spektakuler dan pengalaman menyelam bersama pasangan Anda</p>",
        //         "created_at": "2023-06-24T05:15:36.000000Z",
        //         "updated_at": "2023-06-26T11:17:43.000000Z",
        //         "image": "destinations\\June2023\\EhFWUKIh0UsOCQdhTyjL.jpg",
        //         "location_id": 30,
        //         "rating": 4.9,
        //         "accommodation": [],
        //         "package": [
        //           {
        //             "id": 7,
        //             "name": "Paket Liburan Romantis",
        //             "description": "<p>Nikmati momen romantis bersama pasangan Anda dengan paket liburan ini. Dengan pemandangan yang indah dan akomodasi mewah, paket ini akan menciptakan kenangan tak terlupakan.</p>",
        //             "price": "5000000",
        //             "created_at": "2023-06-24T05:10:29.000000Z",
        //             "updated_at": "2023-06-26T01:45:33.000000Z",
        //             "image": "packages\\June2023\\DlbeHqw4Z8lzx7Q10UMr.jpg",
        //             "start_date": "2023-06-26",
        //             "end_date": "2023-06-30",
        //             "max_capacity": 2,
        //             "pivot": {
        //               "destination_id": 5,
        //               "package_id": 7
        //             }
        //           }
        //         ],
        //         "location": {
        //           "id": 30,
        //           "name": "Maldives",
        //           "country_id": 5,
        //           "city": "Maldives",
        //           "created_at": "2023-06-25T14:38:10.000000Z",
        //           "updated_at": "2023-06-25T14:38:10.000000Z"
        //         }
    }
}
