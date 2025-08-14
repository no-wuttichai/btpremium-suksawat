<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $portfolio = File::files(public_path('images/portfolio'));
    $videos = File::files(public_path('videos/'));
    $technician = File::files(public_path('images/technician'));

    usort($portfolio, function($a, $b) {
        return $b->getMTime() <=> $a->getMTime();
    });
    $portfolio = array_slice($portfolio, 0, 12);

    usort($technician, function($a, $b) {
        return $b->getMTime() <=> $a->getMTime();
    });
    $technician = array_slice($technician, 0, 8);

    return view('landing', [
        'portfolio' => $portfolio,
        'video' => $videos,
        'technician' => $technician,
    ]);
});

Route::get('/portfolio', function () {
    $files = File::files(public_path('images/portfolio'));
    return view('portfolio', compact('files'));
});

Route::get('/review', function () {
    $review = File::files(public_path('images/review'));
    usort($review, function($a, $b) {
        return $b->getMTime() <=> $a->getMTime();
    });
    $review = array_slice($review, 0, 12);
    return view('review', compact('review'));
});

Route::get('/promotion', function () {
    $files = File::files(public_path('images/promotion'));

    usort($files, function($a, $b) {
        return $b->getMTime() <=> $a->getMTime();
    });
    $files = array_slice($files, 0, 12);
    return view('promotion', compact('files'));
});

Route::get('/contact', function () {
    return view('contact');
});