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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/search/books', 'App\Http\Controllers\BookController@show');

Route::get('/search/books/{id}', 'App\Http\Controllers\BookController@search');

Route::post('/add_book', 'App\Http\Controllers\BookController@add');

Route::post('/delete_book/{id}', 'App\Http\Controllers\BookController@delete');
