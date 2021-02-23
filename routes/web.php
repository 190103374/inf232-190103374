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

Route::get('/info_name', function () {
    return view('info_name');
});

Route::get('/info_sure', function () {
    return view('info_sure');
});

Route::get('/info_age/{age?}', function ($age = null) {
    return "My age is ". $age;
})-> where ('age', '[0-9]+');




