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

Route::get('über_uns', function () {
    return view('pages.about_us');
});

Route::get('dienstleistungen', function () {
    return view('pages.services');
});

Route::get('bewachung', function () {
    return view('pages.guarding');
});

Route::get('ordnung', function () {
    return view('pages.order');
});

Route::get('schutz', function () {
    return view('pages.protection');
});

Route::get('anlass', function () {
    return view('pages.ocassion');
});

Route::get('verkehr', function () {
    return view('pages.traffic');
});

Route::get('referenzen', function () {
    return view('pages.references');
});

Route::get('partner', function () {
    return view('pages.partner');
});

Route::get('jobs', function () {
    return view('pages.jobs');
});

Route::get('kontakt', function () {
    return view('pages.contact');
});