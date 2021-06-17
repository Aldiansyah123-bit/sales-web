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

Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//pemesanan
Route::get('/pemesanan', 'PemesananController@index');
Route::put('/pemesanan/update/{id}', 'PemesananController@update');
Route::get('/pemesanan/detail/{id}', 'PemesananController@show');
Route::put('/send-notification','PemesananController@sendNotification')->name('send.notification');
Route::post('/save-token','PemesananController@saveToken')->name('save-token');
