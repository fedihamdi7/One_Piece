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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@welcome')->name('home');


Route::get('/responsable', 'ResponsableController@responsable');
Route::get('/event','ResponsableController@event' );
Route::get('/change','ResponsableController@change_lo');
Route::get('/teams', 'ResponsableController@teams');
Route::get('/themes','ResponsableController@themes' );
Route::get('/posts','ResponsableController@posts');
Route::get('/about','ResponsableController@about');
// Route::get('/event_list','ResponsableController@event_list');

Route::get('/clubs', 'ClubController@clubs');
Route::get('/club/{id}', 'ClubController@one_club');
Route::get('/admin','AdminController@admin');
// Route::get('/userlist','AdminController@userlist');
Route::get('/add_user','AdminController@add_user');
Route::get('/request','AdminController@request');
Route::get('/AllClubs','AdminController@clubs');
Route::get('/department','AdminController@department');

Route::resource('userlist','admin\UserListController');
Route::resource('event_list','responsable\EventController');

