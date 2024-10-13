<?php

namespace App\Helpers;

class ImageHelper
{
    public static function getRandomImage()
    {
        $images = config('images.images'); // Get the images array from config
        return $images[array_rand($images)]; // Return a random image
    }
}
