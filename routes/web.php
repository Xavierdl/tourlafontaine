<?php

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
    return view('home');
})->name("home");


Route::get('/petition', function () {
    return view('petition');
})->name("petition");


Route::get('/regie', function () {
    return view('regie');
})->name("regie");


Route::get('/refuse', function () {
    return view('refuse');
})->name("refuse");

Route::get('/welcome', function () {
    return view('welcome');
});
