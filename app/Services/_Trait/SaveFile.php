<?php

namespace App\Services\_Trait;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait SaveFile
{
    public function saveFile($file, $path, $source)
    {
        if (!File::isDirectory(public_path('storage/' . $path))) {
            File::makeDirectory(public_path('storage/' . $path), 0777, true, true);
        }
        $fileName = Str::random(4) . '_' . preg_replace('/\s+/', '', $file->getClientOriginalName());
        Storage::putFileAs($source, $file, $fileName);

        return $fileName;
    }

    function saveMultiFiles($files, $path, $source)
    {
        if (!File::isDirectory(public_path('storage/' . $path))) {
            File::makeDirectory(public_path('storage/' . $path), 0777, true, true);
        }

        $fileName = [];
        if (is_array($files)) {
            foreach ($files as $file) {
                $fileName[] = $this->saveFile($file, $path, $source);
            }
        }

        return $fileName;
    }

    function getFile($file, $path)
    {
        $url = asset(Storage::url($path . '/' . $file));

        return $url;
    }

    function getFiles($files, $path)
    {
        $url = [];

        foreach ($files as $file) {
            $url[] = $this->getFile($file, $path);
        }

        return $url;
    }
}
