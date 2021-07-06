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

Route::get('cache_clear', function () {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    dd("cache:clear");
});
Route::get('config_clear', function () {
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    dd("config:clear");
});
Route::get('storage', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    dd("storage");
});

Route::get('migrate', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate');
    dd("migrate");
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//pemesanan
Route::get('/pemesanan', 'PemesananController@index');
Route::put('/pemesanan/update/{id}', 'PemesananController@sendnotification');
Route::get('/pemesanan/detail/{id}', 'PemesananController@show');
Route::delete('/pemesanan/{id}', 'PemesananController@destroy')->name('pemesanan.delete');
Route::get('/notification', 'PemesananController@store');
Route::put('/send-notification','PemesananController@sendNotification')->name('send.notification');
Route::post('/update_token','UserController@update_token')->name('update_token');

//test
Route::get('/test', 'TestController@index');
