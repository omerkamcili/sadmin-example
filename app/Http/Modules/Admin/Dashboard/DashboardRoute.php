<?php

namespace App\Http\Modules\Admin\Dashboard;


use Route;

/**
 * Class DashboardRoute
 *
 * @package App\Http\Controllers\Admin\Dashboard
 */
class DashboardRoute
{

    public static $nameSpace = '\App\Http\Modules\Admin\Dashboard';

    /**
     * Dashboard routing
     */
    public static function route(): void
    {

        Route::namespace(self::$nameSpace)->group(function () {

            Route::get('/admin/dashboard', 'DashboardController@index')->name('admin.dashboard');

        });

    }

}