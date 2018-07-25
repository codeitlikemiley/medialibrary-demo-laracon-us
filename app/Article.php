<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\File;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Article extends Model implements HasMedia
{
    use HasMediaTrait;

    public static function last()
    {
        return static::all()->last();
    }
}






















/**
 * public function registerMediaConversions(Media $media = null)
 * {
 * $this
 * ->addMediaConversion('thumb')
 * ->width(300)
 * ->height(300)
 * ->orientation(90)
 * ->greyscale();
 *
 * $this
 * ->addMediaConversion('arty')
 * ->pixelate(5)
 * ->orientation(180)
 * ->width(300)
 * ->height(300);
 * }
 **/

/**
 * public function registerMediaCollections()
 * {
 * $this
 * ->addMediaCollection('big-files')
 * ->useDisk('s3');
 * }
 **/
