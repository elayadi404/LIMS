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
    return view('welcome');
});
Route::get('/ProfilleEchantillonsadd','ProfilleEchantillonsController@add');
Route::post('addProfilleEchantillons','ProfilleEchantillonsController@addtobd');
Route::get('/ProfilleEchantillonsadd','ProfilleEchantillonsController@update');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
