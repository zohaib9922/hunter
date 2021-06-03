<?php

namespace App\Admin\Controllers;

use App\Forum;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PageController extends AdminController
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
        $grid = new Grid(new forum());

        $grid->column('id', __('Id'));
        // $grid->column('title', __('Title'));
    
        $grid->column('slug', __('Slug'));
        $grid->column('created_at', __('Created at'));

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
        $show = new Show(forum::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('slug', __('Slug'));
        $show->field('content', __('Content'));
        $show->field('deleted_at', __('Deleted at'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new forum());

        $form->text('title', __('Title'))->required();
        
        $form->text('slug', __('Slug'))->help('If you dont know about slug, leave it blank.');

        $form->editor('content');

        $form->saving(function (Form $form) {
            $form->slug = str_slug($form->title);
        });

        return $form;
    }
}