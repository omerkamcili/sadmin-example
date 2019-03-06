<?php

Route::get('/', function () {
    phpinfo();
    //return view('welcome');
});


/**
 * Dashboard module routing
 */
\App\Http\Modules\Admin\Dashboard\DashboardRoute::route();


/**
 * User module routing
 */
\App\Http\Modules\Admin\User\UserRoute::route();

