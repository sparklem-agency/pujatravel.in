<?php
// Specify the folder path
$folderPath = $_SERVER['DOCUMENT_ROOT'] . '/public/images/galleries';

// Allowed file extensions for images and videos
$imageExtensions = ['jpg', 'jpeg', 'png', 'gif'];
$videoExtensions = ['mp4', 'webm', 'ogg'];

$scandir = scandir($folderPath);
// Scan the folder
$files = array_diff($scandir ? $scandir : [], ['.', '..']);

?>
@extends('layouts.app')

@section('content')
    <h2 class="heading text-center mt-5">Gallery</h2>

    <div class="lg:columns-3 space-y-5 columns-1 max-w-6xl mx-auto p-5">
        @foreach ($files as $file)
            @php
                $filePath = $folderPath . '/' . $file;
                $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            @endphp

            @if (in_array($extension, $imageExtensions))
                <img src="{{ image_asset('galleries/' . $file) }}" alt="" class="w-full" srcset="">
            @endif

            @if (in_array($extension, $videoExtensions))
                <video width="320" height="240" controls class="w-full">
                    <source src="{{ image_asset('galleries/' . $file) }}">

                    Your browser does not support the video tag.
                </video>
            @endif
        @endforeach
    </div>
@endsection
