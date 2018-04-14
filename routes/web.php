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

Route::get('/','contentController@home');

Route::get('blog', function () {
    return view('blog');
});


Route::post('insert','contentController@create');

Route::get('getByCategory','contentController@getByCategory');

Route::get('paginate','contentController@paginate');

