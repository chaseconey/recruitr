<?php

View::share('user', Auth::user());

// Confide routes
Route::get( 'user/create',                 'UserController@create');
Route::post('user',                        'UserController@store');
Route::get( 'user/login',                  'UserController@login');
Route::post('user/login',                  'UserController@do_login');
Route::get( 'user/confirm/{code}',         'UserController@confirm');
Route::get( 'user/forgot_password',        'UserController@forgot_password');
Route::post('user/forgot_password',        'UserController@do_forgot_password');
Route::get( 'user/reset_password/{token}', 'UserController@reset_password');
Route::post('user/reset_password',         'UserController@do_reset_password');
Route::get( 'user/logout',                 'UserController@logout');

Route::group(array('before' => 'auth'), function()
{
    Route::resource('/', 'HomeController', array('only' => array('index')));
    // Route::get('apply/{step?}', 'ApplyController@index');
    Route::resource('applications', 'ApplicationsController');

    Route::get('/uploads/{file}', function($file) {
        $hash = md5($file . Auth::user()->email);
    });
});
