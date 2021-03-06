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


// Route::get('/vipin', function () {
//     //return "hi vipin";
//     $title ="vipin test page";
//     return view('vipin')->with("title",$title);
// });

Route::get('/vipin', 'VipinController@getVipin')->name('vipin');

Route::resource('products', 'ProductController');
//Route::resource('new', 'ProductController');

Route::get('/admin', 'AdminController@index');

Route::get('/admin/{string}', 'AdminController@print')->where(['string'=>"[a-z]+"]);
