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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['web']], function () {
    Route::resource('blog', 'BlogController');
});



// Route::get('create', 'DataController@create');
//
// Route::post('store', 'DataController@store');
//
// Route::get('edit/{id}', 'DataController@edit');
//
// Route::post('update', 'DataController@update');
