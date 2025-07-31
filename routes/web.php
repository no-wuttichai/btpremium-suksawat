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

    usort($portfolio, function($a, $b) {
        return $b->getMTime() <=> $a->getMTime();
    });
    $portfolio = array_slice($portfolio, 0, 12);

    return view('landing', [
        'portfolio' => $portfolio,
        'video' => $videos,
    ]);
});

Route::get('/portfolio', function () {
    $files = File::files(public_path('images/portfolio'));
    return view('portfolio', compact('files'));
});
