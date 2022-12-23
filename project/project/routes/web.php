<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;
use App\Http\Controllers\StoreController;
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

Route::get('category/index', 'App\Http\Controllers\CategoryController@index');
Route::get('category/create', 'App\Http\Controllers\CategoryController@create');
Route::post('category/store', 'App\Http\Controllers\CategoryController@store');
Route::get('category/{id}', 'App\Http\Controllers\CategoryController@edit');
Route::put('category/update/{id}', 'App\Http\Controllers\CategoryController@update');
Route::post('category/delete/{id}', 'App\Http\Controllers\CategoryController@destroy');

Route::get('stores/index', 'App\Http\Controllers\StoreController@index');
Route::get('stores/create', 'App\Http\Controllers\StoreController@create');
Route::post('stores/store', 'App\Http\Controllers\StoreController@store');
Route::get('stores/{id}', 'App\Http\Controllers\StoreController@edit');
Route::post('stores/update/{id}', 'App\Http\Controllers\StoreController@update');
Route::post('stores/delete/{id}', 'App\Http\Controllers\StoreController@destroy');

Route::get('rating/index', 'App\Http\Controllers\RatingsController@index');
Route::get('rating/{id}', 'App\Http\Controllers\RatingsController@search');
Route::post('rating/store/{id}', 'App\Http\Controllers\RatingsController@store');


Route::get('search', 'App\Http\Controllers\website@index2');
Route::post('search/{id}', 'App\Http\Controllers\website@search');
Route::get('publicwebsite', 'App\Http\Controllers\website@index');
Route::get('publicwebsite/{id} ', 'App\Http\Controllers\website@index_products');
Route::get('publicwebsite/detailsproduct/{id} ', 'App\Http\Controllers\website@show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
