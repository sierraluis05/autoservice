<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');


Route::get('/tunombre/{nombre?}',function($nombre=null,$apellido=null){
   return "tu nombre es:" .$nombre." ".$apellido;

});


Route::get('home', 'HomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'operations'], function(){

    /**
     * This route sum many numbers
     */
    Route::get('/sum/{value1}/{value2}','OperationController@sum');

    /**
     * This route subtraction many numbers
     */
    Route::get('/subtraction/{value1}/{value2}','OperationController@subtraction');

    /**
     * This route multiplication many numbers
     */
    Route::get('/multiplication/{value1}/{value2}','OperationController@multiplication');

    /**
     * This route division many numbers
     */
    Route::get('/division/{value1}/{value2}','OperationController@division');

});









