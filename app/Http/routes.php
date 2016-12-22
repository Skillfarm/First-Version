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

    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');

    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');



    /* Mohsen Part
     *
     * Start every address using the first word of your name means 'm'
     * */

    Route::auth();
    Route::get('/mvworks', 'Mohsen@somefunction');
    Route::get('/mContents','Mohsen@getContentspage');
    Route::get('/mtest','Mohsen@testdb');
    Route::get('/mbranchworks/{branch}','Mohsen@branchworkspage');
    Route::get('/mfieldworks/{field}','Mohsen@fieldworkspage');
    Route::get('/majax','Mohsen@ajaxview');
    Route::post('/majaxp','Mohsen@ajax');
    //End
    /* AmirHossein Part
     *
     * Start every address using the first word of your name means 'a'
     * */

    Route::get('/aprocess', 'AmirHossein@somefunction');
    //End






    /* Sara Part
     *
     * Start every address using the first word of your name means 's'
     * */

    Route::get('/sprofile', 'Sara@somefunction');
    //End






    /* Zeinab Part
     *
     * Start every address using the first word of your name means 'z'
     * */

    Route::get('/zprofile', 'Zeinab@somefunction');

    //End
});
