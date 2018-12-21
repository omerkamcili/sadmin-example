<?php

namespace App\Http\Modules\Admin;


use OmerKamcili\Sadmin\Components\generic\SadminGenericMenuItem;
use OmerKamcili\Sadmin\Components\Profile\SadminProfileMenu;

use OmerKamcili\Sadmin\Components\Sidebar\SadminMenuGroup;
use OmerKamcili\Sadmin\Components\Sidebar\SadminMenuItem;
use OmerKamcili\Sadmin\Components\Sidebar\SadminSideMenu;
use OmerKamcili\Sadmin\SadminBaseController;
use OmerKamcili\Sadmin\SadminBaseInterface;

use OmerKamcili\Sadmin\SadminIconFa;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * Class AdminBaseController
 *
 * @package App\Http\Controllers\Admin
 */
class AdminBaseController extends SadminBaseController implements SadminBaseInterface
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * AdminBaseController constructor.
     */
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * @return SadminSideMenu
     */
    public function sideBarMenu(): SadminSideMenu
    {

        $sideMenu = new SadminSideMenu();

        $sideMenu->add(new SadminMenuItem('Dashboard', route('admin.dashboard')));

        $userGroup = new SadminMenuGroup('Users');
        $userGroup->add('Add User', route('admin.addUser'));
        $userGroup->add('User List', route('admin.users'));
        $userGroup->add('Roles', route('admin.roles'));
        $sideMenu->addGroup($userGroup);

        return $sideMenu;

    }

    /**
     * @return SadminProfileMenu
     */
    public function profilMenu(): SadminProfileMenu
    {
        $menu = new SadminProfileMenu();
        $menu->add(new SadminGenericMenuItem('Logout', 'adsfasdf', SadminIconFa::AREA_CHART));

        return $menu;
    }
}