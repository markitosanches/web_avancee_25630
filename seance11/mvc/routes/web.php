<?php
// require_once 'routes/Route.php';
// require_once 'controllers/HomeController.php';
use App\Routes\Route;
use App\Controllers\HomeController;

Route::get('/', 'HomeController@index');
// Route::get('/home/abc/about', 'HomeController@index');
Route::get('/home', 'HomeController@index');
// Route::get('/vistez-cette-page', 'HomeController@abc');
Route::get('/client', 'ClientController@index');


Route::dispatch();