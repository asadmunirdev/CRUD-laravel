<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/welcome", "newController@welcome");
Route::get("/", "newController@main");
Route::get("/form", "userController@user");
Route::post('/submit-form', 'userController@store');
Route::get('/view', 'userController@get_data');
Route::get('/delete/{id}', 'userController@delete');
Route::get('/edit/{id}', 'userController@edit');
Route::post('/update-form/{id}', 'userController@update');
