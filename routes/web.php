<?php

use App\Article;
use Spatie\MediaLibrary\MediaStream;
use Spatie\MediaLibrary\Models\Media;

Route::get('add-media-to-library', function () {

    // Welcome, here's the 101

    Article::create()
        ->addMedia(storage_path('demo/museum.jpg'))
        ->toMediaCollection();
});










/*
Route::get('add-media-from-a-request', function () {

    // We can handle media coming from a request

    Article::create()
        ->addMediaFromRequest('upload')
        ->toMediaCollection();
});
*/













Route::get('using-collections', function () {

    // Use the collection, Luke!

    $article = Article::create();

    $article
        ->addMedia(storage_path('demo/museum.jpg'))
        ->toMediaCollection('images');

    $article
        ->addMedia(storage_path('demo/nova-talk-notes.pdf'))
        ->toMediaCollection('downloads');
});










Route::get('delete-models', function () {

    // Let's delete all models

    Article::all()->each->delete();
});





















Route::get('using-media-conversions', function () {

    // Let's add some media conversions before running this

    Article::create()
        ->addMedia(storage_path('demo/museum.jpg'))
        ->toMediaCollection('images');
});











/*
Route::get('non-queued-conversions', function() {

    // Let's turn off the queues

    Article::create()
        ->addMedia(storage_path('demo/museum.jpg'))
        ->toMediaCollection('images');
});
*/

















Route::get('optimized-images', function () {

    // Let's turn off the optimization

    Article::create()
        ->addMedia(storage_path('demo/museum.jpg'))
        ->toMediaCollection('images');
});



















Route::get('pdf-conversions', function () {

    // We love PDFs too!

    Article::create()
        ->addMedia(storage_path('demo/nova-talk-notes.pdf'))
        ->toMediaCollection('downloads');
});















Route::get('customizing-the-path', function () {

    // Let's use a path generator

    Article::create()
        ->addMedia(storage_path('demo/museum.jpg'))
        ->toMediaCollection();
});














Route::get('using-s3', function () {

    // Gotta love the cloud

    Article::create()
        ->addMedia(storage_path('demo/museum.jpg'))
        ->toMediaCollection('images', 's3');
});














Route::get('defining-media-collections', function () {

    // Let's define a media collection

    Article::create()
        ->addMedia(storage_path('demo/nova-talk-notes.pdf'))
        ->toMediaCollection('big-files');
});















Route::get('downloading-a-file', function () {

    // Let's download a file from the local filesystem

    $media = Article::create()
        ->addMedia(storage_path('demo/nova-talk-notes.pdf'))
        ->toMediaCollection();

    return $media;
});















Route::get('downloading-a-file-from-s3', function () {

    // Let's download a file from a cloud filesystem

    $media = Article::create()
        ->addMedia(storage_path('demo/nova-talk-notes.pdf'))
        ->toMediaCollection('downloads', 's3');

    return $media;
});
















Route::get('downloading-multiple-files', function () {

    // Let's download lots of files

    Media::truncate();

    Article::create()
        ->addMedia(storage_path('demo/museum.jpg'))
        ->toMediaCollection();

    Article::create()
        ->addMedia(storage_path('demo/nova-talk-notes.pdf'))
        ->toMediaCollection('downloads', 's3');

    return MediaStream::create('your-files.zip')->addMedia(Media::all());
});












Route::get('generating-responsive-images', function () {

    // The pledge...

    Article::create()
        ->addMedia(storage_path('demo/museum.jpg'))
        ->withResponsiveImages()
        ->toMediaCollection();
});












Route::get('showing-responsive-images', function () {

    // The turn...

    $media = Article::last()->getFirstMedia();

    return view('showing-responsive-images', compact('media'));
});
