<?php

Route::group(['prefix' => 'administration', 'namespace' => 'Administration'], function() {
    // BLOG
    Route::group(['prefix' => 'blog', 'namespace' => 'Blog'], function() {

        Route::get('/', array(
            'as'   => 'administration.blog',
            'uses' => 'BlogController@index')
        );

        Route::get('/create', array(
            'as'   => 'administration.create',
            'uses' => 'BlogController@create')
        );
        Route::post('/store', array(
            'as'   => 'administration.store',
            'uses' => 'BlogController@store')
        );

        Route::get('/edit/{id}', array(
            'as'   => 'administration.edit',
            'uses' => 'BlogController@edit')
        )->where('id', '[0-9]+');
        Route::post('/update', array(
            'as'   => 'administration.update',
            'uses' => 'BlogController@update')
        );

        Route::get('/destroy', array(
            'as'   => 'administration.destroy',
            'uses' => 'BlogController@destroy')
        );

        Route::get('/publish/{id}', array(
            'as'   => 'administration.publish',
            'uses' => 'BlogController@publish')
        )->where('id', '[0-9]+');
        Route::get('/unpublish/{id}', array(
            'as'   => 'administration.unpublish',
            'uses' => 'BlogController@unpublish')
        )->where('id', '[0-9]+');

    });

});