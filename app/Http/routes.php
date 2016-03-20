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
    Route::auth();

    //Route::get('/');
    ///homepage
    Route::get('/department/{department}','controller@method');//TO DO
    Route::get('/course/{course}','controller@method');//TO DO
    Route::get('/addwork','controller@method');//TO DO
    //dep or course
    Route::get('/work/{workid}','controller@method');//
    Route::get('/profile/{profile}','controller@method');

    //add work
    Route::post('/addwork','controller@method');
    //work page
    Route::post('/addacceptance','controller@method');
    //profile page
    Route::get('/doneworks}','controller@method');
    Route::get('/activeworks}','controller@method');
    //profile page other user
    Route::post('/profile','controller@method');
    Route::post('/doneworks}','controller@method');
    Route::post('/activeworks}','controller@method');
    /*
     * blade file:
     * homepage;
     * dep page or course;
     * add work page;
     * work page;
     * profile page
     * register page
     *
     */
});
