<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageHelper
{
    public static function uploadFileToS3($file, $folder = 'satsetsolution-image')
    {
        $filename = uniqid('img_') . '.jpg';

        $image = Image::make($file)
            ->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })
            ->encode('jpg', 70);

        Storage::disk('s3')->put(
            $folder . '/' . $filename,
            (string) $image,
            'public'
        );

        return $filename;
    }
}
