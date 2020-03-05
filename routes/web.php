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


Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware'=>'auth'], function(){
    
    Route::get('/dashboard','DashboardController@dashboard')->middleware('auth');
    // Penelitian Coffee
    Route::post('/penelitian/coffee/create','CoffeeController@store');
    Route::get('/penelitian/coffee','CoffeeController@index');
    Route::get('/penelitian/coffee/edit/{penelitian}','CoffeeController@edit');
    Route::post('/penelitian/coffee/edit/{penelitian}','CoffeeController@update');
    Route::get('/penelitian/coffee/hapus/{penelitian}','CoffeeController@destroy');

    // Penelitian Alga
    Route::post('/penelitian/alga/create','AlgaController@store');
    Route::get('/penelitian/alga','AlgaController@index');
    Route::get('/penelitian/alga/edit/{penelitian}','AlgaController@edit');
    Route::post('/penelitian/alga/edit/{penelitian}','AlgaController@update');
    Route::get('/penelitian/alga/hapus/{penelitian}','AlgaController@destroy');

    // BKD
    Route::get('/bkd/identitas','BkdController@identitas');
    Route::post('/bkd/update','BkdController@input');
});
