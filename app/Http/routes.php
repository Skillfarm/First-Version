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

//    Route::get('/', function () {
//
//        return view('welcome');
//    })->middleware('guest');

    
    //zeinab welcome
    //Route::get('/', 'base@department')->middleware('guest');//Done ino baadan residegi mikonam :D
    Route::get('/', 'base@department');//Done

    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');
    Route::auth();

    //Route::get('/');
    ///homepage
    //zeinab
    Route::get('/department/{departmenid}','base@getdeptpage');//Done
    Route::get('/course/{courseid}','base@getcoursepage');//Done
    //Mohsen: Route::get('/department/{department}','base@getdeptpage');
    //Route::get('/course/{course}','base@getcoursepage');
    //Route::get('/addwork','WorkController@getaddworkpage');//Done
    //dep or course
    //Route::get('/work/{workid}','WorkController@getworkpage');//Done
    Route::post('/profile/','profile@getprofilepage');
    //add work
    //Route::post('/addwork','WorkController@addwork');//Done
    //work page
    Route::post('/addacceptance','WorkController@addacceptance');
    //profile page
    Route::get('/doneworks}','profile@doneworks');
    Route::get('/activeworks}','profile@activeworks');

    //new
    Route::resource('work', 'WorkController');
    Route::get('/{username}/works', 'profile@userWorks');

    //Amir Routes
//    Route::get('/userWorks','TaskController@userWorks');
//    Route::get('/addwork','TaskController@useraddworks');
//    Route::post('addthework','TaskController@addthework');
//    Route::get('departments','TaskController@Departments');
//    Route::get('home','TaskController@home');

    
    //Zeinab Routes
    Route::get('/aboutUs', 'base@about');

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
    /*
     * controller :
     * user
     * profile
     * work
     * base
     */
});
