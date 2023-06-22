<?php

namespace App\Helpers;

class ImageHelper
{
    public static function convertImagePathToUrl($imagePath)
    {

        // $baseUrl = env('APP_URL');
        // $imageUrl = $baseUrl . '/storage/' . str_replace('\\', '/', $imagePath);
           
        $imageUrl = trim(str_replace('\\', '/', $imagePath), '/');
        return url('storage/' . $imageUrl);
    }
}
