<?php

namespace App\Http\Modules\Admin\Dashboard;


use App\Http\Modules\Admin\AdminBaseController;
use Illuminate\Contracts\View\View;


/**
 * Class DashboardController
 *
 * @package App\Http\Controllers\Admin
 */
class DashboardController extends AdminBaseController
{


    /**
     * DashboardController constructor.
     */
    public function __construct()
    {

        parent::__construct();

    }


    /**
     * @return View
     */
    public function index(): View
    {

        $page = DashboardPage::index();

        return $page;

    }

}