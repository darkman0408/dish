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

Route::get('/dish/index', 'DishController@index')->name('dish.index');

//Route::get('/dish/meals', 'DishController@meals')->name('dish.meals');

Route::get('/dish/meals/{tags?}', function($tagsId = 3) {
    return 'Tags ' . $tagsId;
});