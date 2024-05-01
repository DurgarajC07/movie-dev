<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\MovieLink;
use \App\Models\Movie;
use \App\Models\Quality;

class MovieLinkController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'MovieLink';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MovieLink());

        $grid->column('id', __('Id'));
        $grid->column('movie.name', __('Movie Name'));
        $grid->column('quality', __('Quality'))->using([1 => 'SD', 2 => 'HD', 3=>'Full HD']);
        $grid->column('download_link', __('Download link'));
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
        $show = new Show(MovieLink::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('movie.name', __('Movie Name'));
        $show->field('quality', __('Quality'))->using([1 => 'SD', 2 => 'HD', 3=>'Full HD']);
        $show->field('download_link', __('Download link'));
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
        $form = new Form(new MovieLink());
        $form->select('movie_id', __('Movie Name'))->options(Movie::all()->pluck('name', 'id'));
        $form->radio('quality', __('Quality'))->options(['1' => 'SD', '2' => 'HD','3' => 'Full HD'])->default('1');
        $form->text('download_link', __('Download link'));

        return $form;
    }
}
