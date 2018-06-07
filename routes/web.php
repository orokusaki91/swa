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
    return view('index');
});

Route::get('about_us', function () {
    return view('pages.about_us');
});

Route::get('services', function () {
    return view('pages.services');
});


Route::get('references', function () {
    return view('pages.references');
});

Route::get('partner', function () {
    return view('pages.partner');
});

Route::get('jobs', function () {
    return view('pages.jobs');
});

Route::get('contact', function () {
    return view('pages.contact');
});