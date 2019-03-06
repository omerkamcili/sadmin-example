<?php

namespace App\Http\Modules\Admin\User;


use App\Http\Modules\Admin\AdminBaseController;
use OmerKamcili\Sadmin\Components\Form\SelectBox;
use OmerKamcili\Sadmin\Components\Form\TextArea;
use OmerKamcili\Sadmin\Components\Form\TextInput;
use OmerKamcili\Sadmin\Components\Generic\Paginations\CustomPagination;
use OmerKamcili\Sadmin\Components\Generic\BreadCrumb;
use OmerKamcili\Sadmin\Components\Generic\TableProgress;
use OmerKamcili\Sadmin\Components\Page\FormPage;
use OmerKamcili\Sadmin\Components\Page\TablePage;

/**
 * Class UserPage
 *
 * @package App\Http\Modules\Admin\User
 */
class UserPage extends AdminBaseController
{

    /**
     * @return BreadCrumb
     */
    public static function breadCrumb(): BreadCrumb
    {

        $breadCrumb = new BreadCrumb();
        $breadCrumb->addItem('Users', '/admin/users');

        return $breadCrumb;

    }


    /**
     * @return TablePage
     */
    public static function index()
    {

        $page = new TablePage();
        $page->title = 'USER LIST';
        $page->description = 'Sem rem veritatis, iure nesciunt laboriosam dictumst fugiat.';

        $breadCrumb = self::breadCrumb();
        $breadCrumb->addItem('User List');
        $page->setBreadCrumb($breadCrumb);

        $page->setFields([
            'id'    => _('ID'),
            'name'  => _('Name'),
            'email' => _('Email'),
        ]);

        $page->setData([
            [
                'id'    => uniqid(),
                'name'  => rand(),
                'email' => rand(),
            ],
            [
                'id'    => uniqid(),
                'name'  => rand(),
                'email' => rand(),
            ],
        ]);

        $progress = new TableProgress();
        $progress->addItem('#edit{id}', 'fa fa-edit', 'primary');
        $progress->addItem('#delete{id}', 'fa fa-remove', 'warning');
        $page->setProgress($progress);

        $pagination = new CustomPagination();
        $pagination->setNextPage('#nextPage');
        $pagination->setPreviousPage('#previousPage');
        $pagination->setPages([
            1 => '#page1',
            2 => '#page2',
            3 => '#page3',
        ]);
        $pagination->setCurrentPage(3);
        $page->setPagination($pagination);

        return $page;

    }

    /**
     * @return FormPage
     */
    public static function add()
    {

        $page = new FormPage();
        $page->title = 'ADD USER';
        $page->description = 'Pellentesque habitant similique voluptate eius odit, omnis egestas ullam facere exercitation diamlorem';
        $page->action = route('admin.saveUser');

        $breadCrumb = self::breadCrumb();
        $breadCrumb->addItem('Add User');
        $page->setBreadCrumb($breadCrumb);

        $page->addFormItem(
            new TextInput([
                'label'       => 'Name Surname',
                'name'        => 'name',
                'description' => _('Lobortis nec officiis cupidatat. Nemo felis alias sodales pretium'),
            ])
        );

        $page->addFormItem(
            new TextInput([
                'label' => 'Email',
                'name'  => 'email',
                'type'  => 'email',
            ])
        );

        $page->addFormItem(
            new TextInput([
                'label' => 'Password',
                'name'  => 'password',
                'type'  => 'password',
            ])
        );

        $page->addFormItem(
            new TextInput([
                'label' => 'Password Again',
                'name'  => 'passwordAgain',
                'type'  => 'password',
            ])
        );

        $page->addFormItem(
            new TextArea([
                'label'       => 'Addres',
                'name'        => 'address',
                'description' => _('Please enter full address. State, street and numbers.'),
            ])
        );

        $page->addFormItem(
            new SelectBox([
                'label'       => 'Country',
                'name'        => 'country',
                'description' => _('Please select your country in list'),
            ])
        );

        $page->makeMagic('required|placeholder');

        return $page;
    }

}