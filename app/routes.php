<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::api(['version' => 'v1', 'prefix' => 'v1', 'protected' => true], function() {

  Route::resource('bycycles', 'BycyclesController', array('except' => array('create', 'edit')));

});
