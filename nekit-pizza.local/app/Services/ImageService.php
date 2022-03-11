<?php

namespace App\Services;

use Illuminate\Support\Str;

class ImageService
{
    public function uploadImage($image)
    {
        $extension = $image->getClientOriginalExtension();
        $fileName = Str::random(60) . '.' . $extension;
        $image->move(public_path('user-photos'), $fileName);

        return $fileName;
    }
    public function uploadVideo($video)
    {
        $extension = $video->getClientOriginalExtension();
        $fileName = Str::random(60) . '.' . $extension;
        $video->move(public_path('user-videos'), $fileName);

        return $fileName;
    }
}
