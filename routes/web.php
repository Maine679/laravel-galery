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

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@main');
Route::get('/home', 'HomeController@home');
Route::get('/about', 'HomeController@about');
Route::get('/gallery','ImagesController@index');
Route::get('/view/{id}','ImagesController@view');
Route::get('/create', 'ImagesController@create');
Route::get('/edit/{id}','ImagesController@edit');
Route::post('/store', 'ImagesController@store');
Route::post('/editimg/{id}', 'ImagesController@editimg');
Route::get('/delete/{id}', 'ImagesController@delete');