<?php

namespace App\Http\Modules\Admin\User;


use App\Http\Modules\Admin\AdminBaseController;
use OmerKamcili\Sadmin\Components\Form\SadminSelectBox;
use OmerKamcili\Sadmin\Components\Form\SadminTextArea;
use OmerKamcili\Sadmin\Components\Form\SadminTextInput;
use OmerKamcili\Sadmin\Components\Generic\SadminBreadCrumb;
use OmerKamcili\Sadmin\Components\Page\SadminFormPage;

class UserPage extends AdminBaseController
{

    public static function breadCrumb(): SadminBreadCrumb
    {

        $breadCrumb = new SadminBreadCrumb();
        $breadCrumb->addItem('Users', '/admin/users');

        return $breadCrumb;

    }

    public static function index()
    {

        return view('admin.blank');

    }

    public static function add()
    {

        $page = new SadminFormPage();
        $page->title = 'ADD USER';
        $page->description = 'Pellentesque habitant similique voluptate eius odit, omnis egestas ullam facere exercitation diamlorem';
        $page->action = route('admin.saveUser');

        $breadCrumb = self::breadCrumb();
        $breadCrumb->addItem('Add User');
        $page->setBreadCrumb($breadCrumb);

        $page->addFormItem(
            new SadminTextInput([
                'label'       => 'Name Surname',
                'name'        => 'name',
                'description' => _('Lobortis nec officiis cupidatat. Nemo felis alias sodales pretium'),
            ])
        );

        $page->addFormItem(
            new SadminTextInput([
                'label' => 'Email',
                'name'  => 'email',
                'type'  => 'email',
            ])
        );

        $page->addFormItem(
            new SadminTextInput([
                'label' => 'Password',
                'name'  => 'password',
                'type'  => 'password',
            ])
        );

        $page->addFormItem(
            new SadminTextInput([
                'label' => 'Password Again',
                'name'  => 'passwordAgain',
                'type'  => 'password',
            ])
        );

        $page->addFormItem(
            new SadminTextArea([
                'label'       => 'Addres',
                'name'        => 'address',
                'description' => _('Please enter full address. State, street and numbers.'),
            ])
        );

        $page->addFormItem(
            new SadminSelectBox([
                'label'       => 'Country',
                'name'        => 'country',
                'description' => _('Please select your country in list'),
            ])
        );

        $page->makeMagic('required|placeholder');

        return $page;
    }

}