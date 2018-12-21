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

    /**
     * Dashboard routing
     */
    public static function route(): void
    {


        Route::namespace('\App\Http\Modules\Admin\Dashboard')->group(function () {

            Route::get('/admin/dashboard', 'DashboardController@index')->name('admin.dashboard');

        });

    }

}