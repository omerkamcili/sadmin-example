<?php

namespace App\Http\Modules\Admin\User;


use App\Http\Modules\Admin\AdminBaseController;
use Illuminate\Http\Request;


/**
 * Class UserController
 *
 * @package App\Http\Controllers\Admin\User
 */
class UserController extends AdminBaseController
{

    /**
     * @return \OmerKamcili\Sadmin\Components\Page\TablePage
     */
    public function index()
    {

        return UserPage::index();

    }


    /**
     * @return \OmerKamcili\Sadmin\Components\Page\FormPage
     */
    public function add()
    {

        return UserPage::add();

    }

    /**
     * @param Request $request
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function save(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required|between:3,30',
            'email'         => 'required|email',
            'password'      => 'required|between:6,12',
            'passwordAgain' => 'required|between:6,12|same:password',
            'address'       => 'required|min:5',
        ]);

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function roles()
    {
        return view('admin.blank');
    }

}