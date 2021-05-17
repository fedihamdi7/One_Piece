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


Route::get('/responsable', 'ResponsableController@responsable')->name('responsable.dashboard');
// Route::get('/event','ResponsableController@event' );
Route::get('/change','responsable\LogoController@index')->name('changelogo');
Route::post('/change','responsable\LogoController@update')->name('changelogo.update');
// Route::get('/teams', 'ResponsableController@teams');
Route::get('/themes','ResponsableController@themes' );
Route::get('/posts','ResponsableController@posts');
// Route::get('/about','ResponsableController@about');
Route::get('/about','responsable\AboutUsController@index')->name('aboutus');
Route::post('/about','responsable\AboutUsController@update')->name('aboutus.update');
// Route::get('/event_list','ResponsableController@event_list');

Route::get('/clubs', 'ClubController@clubs')->name('clubs.show');
Route::get('/club/{id}', 'ClubController@one_club');
Route::get('/admin','AdminController@admin')->name('admin.dashboard');
// Route::get('/userlist','AdminController@userlist');
Route::get('/add_user','AdminController@add_user');
Route::get('/request','AdminController@request');
// Route::get('/AllClubs','AdminController@clubs');
Route::resource('/department','admin\DepartmentController');



Route::resource('AllClubs', 'admin\ClubController');
Route::resource('teams', 'responsable\TeamController');
Route::resource('userlist','admin\UserListController');
Route::resource('PendingRequest','admin\PendingRequestController');
Route::resource('event_list','responsable\EventController');


