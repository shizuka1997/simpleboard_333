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

Route::resource('posts', 'PostController');
Route::get('ex', 'PostExController@index');
Route::get('ex_detail', 'PostExController@detail');
Route::get('ex_init', 'PostExController@init');
Route::get('ex_entry', 'PostExController@entry');
// Route::get('sec', 'PostSecController@index2');
// Route::get('thd', 'PostThdController@index');
// if (env('APP_ENV') === 'local') {
//     URL::forceScheme('https');
//  }
