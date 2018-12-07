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
Route::post('/login', 'LoginController@login');
Route::group(['middleware' => ['auth']],function(){
Route::get('/welcome', 'LoginController@welcome');
Route::resource('users', 'UserController');
Route::get('/delete_user/{id}', 'UserController@destroy');
  Route::get('/logout', 'LoginController@logout');
Route::resource('roles', 'RolController');});