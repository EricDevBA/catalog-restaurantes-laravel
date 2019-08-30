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

Route::prefix('admin')->group(function () {
    Route::get('restaurants', 'Admin\\RestaurantController@index');
    Route::get('restaurants/new', 'Admin\\RestaurantController@new')->name('restaurant.new');
    Route::post('restaurants/new', 'Admin\\RestaurantController@store')->name('restaurant.store');
    Route::get('restaurants/edit/{restaurant}', 'Admin\\RestaurantController@edit')->name('restaurant.edit');
    Route::post('restaurants/update/{id}', 'Admin\\RestaurantController@update')->name('restaurant.update');
    Route::get('restaurants/remove/{id}', 'Admin\\RestaurantController@delete')->name('restaurant.remove');
    });


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
