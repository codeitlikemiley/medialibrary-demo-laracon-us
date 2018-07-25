<?php

namespace App\Services;

use File;
use Symfony\Component\Finder\SplFileInfo;

class Demo
{
    public static function resetDemoFiles()
    {

        File::cleanDirectory(storage_path('demo'));

        collect(File::allFiles(storage_path('app/stubs')))->each(function(SplFileInfo $file) {
            $destination = storage_path("demo/{$file->getFilename()}");

            copy($file->getRealPath(), $destination);
        });
    }
}