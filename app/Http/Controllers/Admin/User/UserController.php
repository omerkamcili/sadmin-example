<?php

namespace App\Http\Controllers\Admin\User;


use App\Http\Controllers\Admin\AdminBaseController;

/**
 * Class UserController
 *
 * @package App\Http\Controllers\Admin\User
 */
class UserController extends AdminBaseController
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        return UserPage::index();

    }


    /**
     * @return \OmerKamcili\Sadmin\Components\Page\SadminFormPage
     */
    public function add()
    {

        return UserPage::add();

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function roles()
    {
        return view('admin.blank');
    }

}