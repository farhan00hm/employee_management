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

Route::get('/login', function () {
    return view('auth.login');
});


//Route::post('/login', 'AdminController@dashboard');
//Route::get('/admin', 'AdminController@viewadmin')->middleware('auth');
Route::post('/admin', 'AdminController@dashboard');
Route::get('/admin', 'AdminController@viewadmin');
Route::get('/dashboard', function (){
    return view('dashboard');
});
//Route::
//Route::get('/dashboard', 'AdminController@dashboard');

//Route::get('/admin', function (){
//    return view('admin');
//});

//Route::post('/', 'AdminController@loginForm');


//Route::get('/admin', function(){
//    return view('admin');
//});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/dashboard', 'AdminController@loginForm')->name('dashboard');
