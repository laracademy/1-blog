<?php

Route::get('/', [
    'as'   => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('/view/{slug}', [
    'as'   => 'view',
    'uses' => 'HomeController@view'
]);

require_once 'Routes/AdministrationRoutes.php';
require_once 'Routes/AuthRoutes.php';