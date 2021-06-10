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


Route::get('/responsable', 'responsable\DashboardController@stats')->name('responsable.dashboard');
// Route::get('/event','ResponsableController@event' );
Route::get('/change','responsable\LogoController@index')->name('changelogo');
Route::post('/change','responsable\LogoController@update')->name('changelogo.update');
// Route::get('/teams', 'ResponsableController@teams');
Route::get('/themes','ResponsableController@themes' )->name('ClubTheme');
Route::get('/posts','ResponsableController@posts');
Route::get('/posts','responsable\PostController@index')->name('posts');
Route::post('/posts','responsable\PostController@store')->name('posts.store');
Route::put('/posts','responsable\PostController@update')->name('posts.update');
// Route::get('/about','ResponsableController@about');
Route::get('/about','responsable\AboutUsController@index')->name('aboutus');
Route::post('/about','responsable\AboutUsController@update')->name('aboutus.update');
Route::put('/about','responsable\AboutUsController@create')->name('aboutus.create');
// Route::get('/event_list','ResponsableController@event_list');

Route::get('/clubs', 'ClubController@clubs')->name('clubs.show');
Route::get('/club/{id}', 'ClubController@one_club')->name('club.pick');
Route::get('/admin','AdminController@admin')->name('admin.dashboard');
// Route::get('/userlist','AdminController@userlist');
Route::get('/add_user','AdminController@add_user');
Route::get('/request','AdminController@request');
// Route::get('/AllClubs','AdminController@clubs');
Route::resource('/department','admin\DepartmentController');
// Route::resource('posts', 'responsable\PostController');
Route::resource('AllClubs', 'admin\ClubController');
Route::resource('teams', 'responsable\TeamController');
Route::resource('userlist','admin\UserListController');
Route::resource('PendingRequest','admin\PendingRequestController');
Route::resource('event_list','responsable\EventController');


Route::resource('/requestform','RequestController');
Route::get('/ClubModel','RequestController@model')->name('ClubModel');
Route::get('/Club','ResponsableController@sidebarClub')->name('sidebarClub');

Route::post('/themes','responsable\ThemeController@update')->name('theme.update');

Route::get('/editevent/{id}','responsable\EventController@edit')->name('editevent');
Route::delete('/deleteevent/{id}','responsable\EventController@delete')->name('delEvent');
Route::get('/showevent/{id}','responsable\EventController@showEvent')->name('showEvent');

Route::get('/PendingRequest/{id}','admin\PendingRequestController@clubs')->name('clubsRequest');
