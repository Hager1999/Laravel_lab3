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

Route::get('/','HomeController@index')->name('Home');
Route::get('/store','HomeController@showstore')->name("Show Store");
Route::get('/contact','HomeController@contactus')->name("Contact us");
Route::get('/about','HomeController@aboutus')->name("About Us");
Route::get('/showcake/{cakename}', 'HomeController@showcake')->name("Get your cake");



Route::get('/cakes','CakeController@listcakes')->name("Show Store");

Route::post('/cakes','CakeController@insertCakes')->name("Show Store");
