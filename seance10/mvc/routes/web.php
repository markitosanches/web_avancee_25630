<?php
require_once 'routes/Route.php';
require_once 'controllers/HomeController.php';

Route::get('/', 'HomeController@index');
Route::get('/home/abc/about', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/vistez-cette-page', 'HomeController@abc');
Route::get('/client', 'ClientController@index');
Route::get('/client/edit/10', 'ClientController@edit');
Route::post('/client/edit/10', 'ClientController@update');
