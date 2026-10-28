<?php
// require_once 'routes/Route.php';
// require_once 'controllers/HomeController.php';
use App\Routes\Route;
use App\Controllers\HomeController;
use App\Controllers\UserController;

Route::get('/', 'HomeController@index');
// Route::get('/home/abc/about', 'HomeController@index');
Route::get('/home', 'HomeController@index');
// Route::get('/vistez-cette-page', 'HomeController@abc');
Route::get('/clients', 'ClientController@index');
Route::get('/client/show', 'ClientController@show');
Route::get('/client/create', 'ClientController@create');
Route::post('/client/create', 'ClientController@store');
Route::get('/client/edit', 'ClientController@edit');
Route::post('/client/edit', 'ClientController@update');
Route::post('/client/delete', 'ClientController@delete');

Route::get('/user/create', 'UserController@create');
Route::post('/user/create', 'UserController@store');

Route::get('/login', 'AuthController@create');
Route::post('/login', 'AuthController@store');
Route::get('/logout', 'AuthController@delete');


Route::dispatch();