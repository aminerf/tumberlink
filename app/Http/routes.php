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

Route::group(['middleware' => ['web']], function (){
    Route::get('/', function () {
        return view('welcome');
    });
   

     Route::get('/account', [
        'uses' => 'UserController@getTumber',
        'as' => 'tumber'
    ]); 
    Route::get('/steps_1_logining', [
        'uses' => 'UserController@getsteps1',
        'as' => 'step1',
        'middleware' => 'auth'
    ]); 
    Route::get('/confirm', [
        'uses' => 'RegisterController@getConfirm',
        'as' => 'confirm',
        'middleware' => 'auth'
    ]);
      Route::get('/feed', [
        'uses' => 'RegisterController@getFeed',
        'as' => 'home',
        'middleware' => 'auth'
    ]);
    
     Route::post('/signin', [
        'uses' => 'UserController@postSignIn',
        'as' => 'signin'
    ]);
    
     Route::post('/signup', [
        'uses' => 'UserController@postSignUp',
        'as' => 'signup'
       
    ]);
     Route::post('/register_in', [
        'uses' => 'RegisterController@postRegister',
        'as' => 'register_in'
    ]);
     Route::get('/sign-out', array(
		'as' => 'account-sign-out',
		'uses' => 'UserController@getSignOut',
        'middleware' => 'auth'

	));
    Route::get('/login', function() {
		return redirect()->route('tumber');
    });
    });

    