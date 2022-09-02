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
    return view('welcome');
});

Route::get('/infos/contact/sav', function () {
    return view('/pages/sav');
});

Route::get('/infos/contact/partenariat', function () {
    return view('/pages/partenariat');
});

Route::get('/infos/contact/info', function () {
    return view('/pages/info');
});

Route::get('/team/web/dev/front', function () {
    $front = [
        [
            "nom" => "alix",
            "fonction" => "frontend dev",
            "url" => "http://placekitten.com/g/200/300"
        ],
        [
            "nom" => "Johan",
            "fonction" => "Fullstack dev + bg",
            "url" => "http://placekitten.com/g/200/300"
        ],
        [
            "nom" => "Cactus",
            "fonction" => "Coach inchallah",
            "url" => "http://placekitten.com/g/200/300"
        ],
        [
            "nom" => "Nico",
            "fonction" => "?",
            "url" => "http://placekitten.com/g/200/300"
        ],
    ];
    return view('/pages/frontend',compact('front'));
});

Route::get('/team/web/dev/back', function () {
    return view('/pages/backend');
});


