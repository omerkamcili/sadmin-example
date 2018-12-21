<?php

Route::get('/', function () {
    return view('welcome');
});


/**
 * Dashboard module routing
 */
\App\Http\Controllers\Admin\Dashboard\DashboardRoute::route();


/**
 * User module routing
 */
\App\Http\Controllers\Admin\User\UserRoute::route();

