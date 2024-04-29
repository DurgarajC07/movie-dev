<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Shows;
use \App\Models\Category;

class ShowController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Show';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Shows());

        $grid->column('id', __('Id'));
        $grid->column('category_id', __('Category id'));
        $grid->column('show_name', __('Show name'));
        $grid->column('image')->image();
        $grid->column('description', __('Description'));
        $grid->column('year', __('Year'));
        $grid->column('duration', __('Duration'));
        $grid->column('rating', __('Rating'));
        $grid->column('quality', __('Quality'));
        $grid->column('trailer_link', __('Trailer link'));
        $grid->column('popular', __('Popular'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Shows::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
        $show->field('show_name', __('Show name'));
        $show->field('image')->image();
        $show->field('description', __('Description'));
        $show->field('year', __('Year'));
        $show->field('duration', __('Duration'));
        $show->field('rating', __('Rating'));
        $show->field('quality', __('Quality'));
        $show->field('trailer_link', __('Trailer link'));
        $show->field('popular', __('Popular'));
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
        $form = new Form(new Shows());

        $form->select('category_id', __('Category id'))->options(Category::all()->pluck('category_name', 'id'));
        $form->text('show_name', __('Show name'));
        $form->image('image', __('Image'));
        $form->text('description', __('Description'));
        $form->date('year', __('Year'))->default(date('Y-m-d'));
        $form->time('duration', __('Duration'))->default(date('H:i:s'));
        $form->text('rating', __('Rating'));
        $form->text('quality', __('Quality'));
        $form->text('trailer_link', __('Trailer link'));
        $form->switch('popular', __('Popular'));

        return $form;
    }
}
