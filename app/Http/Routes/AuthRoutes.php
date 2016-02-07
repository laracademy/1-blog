<?php

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function() {
    Route::get('/login', array(
        'as'   => 'auth.login',
        'uses' => 'AuthController@getLogin')
    );

    Route::post('/login', array(
        'as'   => 'auth.login.post',
        'uses' => 'AuthController@postLogin')
    );

    Route::get('/logout', array(
        'as'   => 'auth.logout',
        'uses' => 'AuthController@getLogout')
    );
});