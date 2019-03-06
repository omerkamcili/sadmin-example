<?php

namespace App\Http\Modules\Admin;


use OmerKamcili\Sadmin\Components\Generic\GenericMenuItem;
use OmerKamcili\Sadmin\Components\Profile\ProfileMenu;

use OmerKamcili\Sadmin\Components\Sidebar\MenuGroup;
use OmerKamcili\Sadmin\Components\Sidebar\MenuItem;
use OmerKamcili\Sadmin\Components\Sidebar\SideMenu;
use OmerKamcili\Sadmin\BaseController;
use OmerKamcili\Sadmin\BaseInterface;

use OmerKamcili\Sadmin\Constants\Icons\IconFa;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * Class AdminBaseController
 *
 * @package App\Http\Controllers\Admin
 */
class AdminBaseController extends BaseController implements BaseInterface
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
     * @return SideMenu
     */
    public function sideBarMenu(): SideMenu
    {

        $sideMenu = new SideMenu();

        $sideMenu->add(new MenuItem('Dashboard', route('admin.dashboard')));

        $userGroup = new MenuGroup('Users');
        $userGroup->add('Add User', route('admin.addUser'));
        $userGroup->add('User List', route('admin.users'));
        $userGroup->add('Roles', route('admin.roles'));
        $sideMenu->addGroup($userGroup);

        return $sideMenu;

    }

    /**
     * @return ProfileMenu
     */
    public function profileMenu(): ProfileMenu
    {
        $menu = new ProfileMenu();
        $menu->add(new GenericMenuItem('Logout', 'adsfasdf', IconFa::AREA_CHART));

        return $menu;
    }
}