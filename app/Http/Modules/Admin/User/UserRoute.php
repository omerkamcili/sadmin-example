<?php

namespace App\Http\Modules\Admin\User;


use Route;

/**
 * Class UserRoute
 *
 * @package App\Http\Controllers\Admin\User
 */
class UserRoute
{

    /**
     * User routing
     */
    public static function route(): void
    {
        Route::prefix('/admin')->namespace('\App\Http\Modules\Admin\User')->group(function () {

            Route::get('/users', 'UserController@index')->name('admin.users');
            Route::get('/add', 'UserController@add')->name('admin.addUser');
            Route::get('/roles', 'UserController@roles')->name('admin.roles');

        });
    }

}