<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/destinations/populate', [
    'as' => 'showPopulateForm', 'uses' => 'DestinationController@showPopulateForm'
]);

Route::post('/destinations/populate', [
    'as' => 'populateDestination', 'uses' => 'DestinationController@populateDestination'
]);

Route::get('/', function() {
    return redirect()->route('showPopulateForm');
});

//function () {
//    return view('destinations.populate');
//});
//
//Route::post('/destinations/populate', function () {
//    return view('destinations.result', ['resultDestination']);
//});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
