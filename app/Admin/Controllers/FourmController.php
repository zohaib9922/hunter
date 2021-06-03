<?php

namespace App\Admin\Controllers;

use App\Forum;
use App\Helper\AdminHelper;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ForumController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Forum';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Forum());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('postalcode', __('Postal Code'));
        $grid->column('number', __('Number'));
    


        AdminHelper::gridDateFormat($grid, 'created_at', 'Created at');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Forum::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('postalcode', __('Postal Code'));
        $show->field('number', __('Number'));
        
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
       
    }
}
