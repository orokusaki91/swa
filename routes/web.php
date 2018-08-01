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
Route::get('über-uns', 'AboutController@index');
Route::get('dienstleistungen', 'ServicesController@index');
Route::get('referenzen', 'PartnerReferencesController@index');
Route::get('partner', 'PartnerReferencesController@index');
Route::get('jobs', 'JobsController@index');
Route::get('kontakt', 'ContactController@index');
Route::get('impressum', 'ImpressumController@index');

Route::post('ajax/contact', 'ContactController@post');

/****** ADMIN *******/
Route::get('/admin', 'Admin\DashboardController@index');
Route::get('admin/informationen', 'Admin\SettingsController@index');
Route::put('admin/informationen/update', 'Admin\SettingsController@update');
Route::get('admin/pages/{page}', 'Admin\PagesController@getPage');
Route::put('admin/pages/update', 'Admin\PagesController@updatePage');
Route::post('admin/delete_image', 'Admin\PagesController@deleteImage')->name('delete_image');

Route::get('admin/pages/{partner}/create', 'Admin\PartnerReferencesController@createPartner');
Route::post('admin/pages/{partner}/store', 'Admin\PartnerReferencesController@storePartner');
Route::get('admin/pages/{partner}/{page_content_id}/edit', 'Admin\PartnerReferencesController@editPartner');
Route::put('admin/pages/{partner}/{page_content_id}/update', 'Admin\PartnerReferencesController@updatePartner');
Route::post('admin/pages/{partner}/{page_content_id}/delete', 'Admin\PartnerReferencesController@deletePartner');


Route::get('{slug}', 'ServicesController@getService');


// Clear Cache facade value:
// Route::get('/clear-cache', function() {
// 	$exitCode = Artisan::call('cache:clear');
// 	return '<h1>Cache facade value cleared</h1>';
// });
// Reoptimized class loader:
Route::get('/optimize', function() {
	$exitCode = Artisan::call('optimize');
	return '<h1>Reoptimized class loader</h1>';
});
// Clear Config cache:
Route::get('/config-cache', function() {
	$exitCode = Artisan::call('config:cache');
	return '<h1>Clear Config cleared</h1>';
});
// Symbolic link
Route::get('/symbolic-link', function () {
	\App::make('files')->link(storage_path('app/public'), '/home/swasecur/www/swasecurity.ch/public/storage');
});



