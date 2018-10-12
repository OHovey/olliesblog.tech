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

Route::get('/', 'HomeController@index');

Route::get('/blog/create', 'BlogsController@create');
Route::post('/blog/store', 'BlogsController@store');
Route::get('/blog/destroy/{blog}', 'BlogsController@destroy');
Route::get('/blog/{blog}', 'BlogsController@detail');

Route::get('/contact', 'ContactsController@create');
Route::post('/contacts/store', 'ContactsController@store');
Route::get('/contacts', 'ContactsController@show');
Route::get('/contact/{contact}', 'ContactsController@detail');

Route::get('/project/create', 'ProjectsController@create');
Route::get('/projects', 'ProjectsController@show');
Route::get('/project/{project}', 'ProjectsController@detail');
Route::post('/project', 'ProjectsController@store');
Route::get('/project/delete/{project}', 'ProjectsController@destroy');

Route::get('/comment/store', 'CommentsController@store');
route::get('/comment/destroy/{comment}', 'CommentsController@destroy');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
