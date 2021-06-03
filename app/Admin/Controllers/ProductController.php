<?php

namespace App\Admin\Controllers;

use App\product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Products';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        // $grid->column('title', __('Title'));
        
        $grid->title('Title')->display(function ($title) {
            return '<a target="_blank" href="/static/'.str_slug($title).'">'.$title.'</a>';
        });

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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('slug', __('Slug'));
        $show->field('image', __('Image'));
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
        $form = new Form(new Product());

        $form->text('title', __('Title'))->required();
        
        $form->text('slug', __('Slug'))->help('If you dont know about slug, leave it blank.');

        $form->text('image', __('Image'));

        $form->editor('content');

        $form->saving(function (Form $form) {
            $form->slug = str_slug($form->title);
        });

        return $form;
    }
}