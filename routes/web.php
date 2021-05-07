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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/responsable', 'ResponsableController@responsable');
Route::get('/event','ResponsableController@event' );
Route::get('/change','ResponsableController@change_lo');
Route::get('/teams', 'ResponsableController@teams');
Route::get('/themes','ResponsableController@themes' );
Route::get('/posts','ResponsableController@posts');
Route::get('/about','ResponsableController@about');
