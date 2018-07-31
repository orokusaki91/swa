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

/***** AUTH *****/
Auth::routes();

/****** FRONT *******/
Route::get('/', 'HomeController@index');
Route::get('über_uns', 'AboutController@index');
Route::get('dienstleistungen', 'ServicesController@index');
Route::get('referenzen', 'ReferencesController@index');
Route::get('partner', 'PartnerController@index');
Route::get('jobs', 'JobsController@index');
Route::get('kontakt', 'ContactController@index');

/****** ADMIN *******/
Route::get('/admin', 'Admin\DashboardController@index');
Route::get('admin/settings', 'Admin\SettingsController@index');
Route::put('admin/settings/update', 'Admin\SettingsController@update');
Route::get('admin/pages/{page}', 'Admin\PagesController@getPage');
Route::put('admin/pages/update', 'Admin\PagesController@updatePage');
Route::post('admin/delete_image', 'Admin\PagesController@deleteImage')->name('delete_image');


Route::get('{slug}', 'ServicesController@getService');




