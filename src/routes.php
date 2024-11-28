<?php

use App\Controllers\ContactFormController;
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', function () {

    $course = env('APP_COURSE_MODE');
    return view('index', compact('course'));
})->name('home');

Router::get('/diploma', function () {

    $course = 'diploma';
    return view('index', compact('course'));
})->name('home');

Router::get('/advance-diploma', function () {

    $course = 'ad-diploma';
    return view('index', compact('course'));
})->name('home');

Router::get('submit-form', [ContactFormController::class, 'submit']);

Router::get('packages/{slug}', function (string $slug) {

    $package = find_package($slug);

    if (!$package) {
        return abort(404, 'Page not found');
    }

    return view('view-package', compact('package'));
})->name('view-package');

Router::get('about', function () {
    return view('about');
})->name('about');

Router::get('contact', function () {
    return view('contact');
})->name('contact');

Router::start();
