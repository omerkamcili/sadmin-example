<?php

namespace App\Http\Controllers\Admin\Dashboard;


use Route;

/**
 * Class DashboardRoute
 *
 * @package App\Http\Controllers\Admin\Dashboard
 */
class DashboardRoute
{

    /**
     * Dashboard routing
     */
    public static function route(): void
    {

        Route::get('/admin/dashboard', 'Admin\Dashboard\DashboardController@index')->name('admin.dashboard');

    }

}