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

Route::get('/', 'TodosController@welcome');

Route::get('/todos', 'TodosController@index');

Route::get('todos/{todo}/show', 'TodosController@show');

Route::get('create', "TodosController@create");

Route::get('store', "TodosController@store");

Route::get('todos/{todo}/edit', "TodosController@edit");

Route::get('todos/{todo}/update', "TodosController@update");

Route::get('todos/{todo}/delete', "TodosController@delete");

Route::get('todos/{todo}/complete', "TodosController@complete");
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');