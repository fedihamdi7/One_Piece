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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','HomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clubs', 'ClubController@clubs');
Route::get('/club/{id}', 'ClubController@one_club');
Route::get('/admin','AdminController@admin');
Route::get('/userlist','AdminController@userlist');
Route::get('/add_user','AdminController@add_user');
Route::get('/request','AdminController@request');
