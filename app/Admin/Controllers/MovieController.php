<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Movie;
use \App\Models\Category;

class MovieController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Movie';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Movie());

        $grid->column('id', __('Id'));
        $grid->column('category.category_name', __('Category'));
        $grid->column('image')->image();
        $grid->column('name', __('Name'));
        $grid->column('description', __('Description'));
        $grid->column('year', __('Year'));
        $grid->column('duration', __('Duration'));
        $grid->column('rating', __('Rating'));
        $grid->column('trailer_link', __('Trailer link'));
        $grid->column('file_name', __('File name'));
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
        $show = new Show(Movie::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category.category_name', __('Category'));
        $show->field('image')->image();
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('year', __('Year'));
        $show->field('duration', __('Duration'));
        $show->field('rating', __('Rating'));
        $show->field('trailer_link', __('Trailer link'));
        $show->field('file_name', __('File name'));
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
        $form = new Form(new Movie());

        $form->select('category_id', __('Category id'))->options(Category::all()->pluck('category_name', 'id'));
        $form->image('image', __('Image'));
        $form->text('name', __('Name'));
        $form->textarea('description', __('Description'));
        $form->date('year', __('Year'))->default(date('Y-m-d'));
        $form->time('duration', __('Duration'))->default(date('H:i:s'));
        $form->text('rating', __('Rating'));
        $form->text('trailer_link', __('Trailer link'));
        $form->text('file_name', __('File name'));
        $form->switch('popular', __('Popular'));

        return $form;
    }
}
