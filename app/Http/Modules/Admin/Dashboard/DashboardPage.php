<?php

namespace App\Http\Modules\Admin\Dashboard;

/**
 * Class DashboardPage
 *
 * @package App\Http\Controllers\Admin\Dashboard
 */
class DashboardPage
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function index()
    {
        return view('admin.dashboard');
    }

}