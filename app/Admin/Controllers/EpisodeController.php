<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Episode;
use \App\Models\Shows;

class EpisodeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Episode';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Episode());

        $grid->column('id', __('Id'));
        $grid->column('shows_id', __('Show id'));
        $grid->column('episode_name', __('Episode name'));
        $grid->column('quality', __('Quality'))->using([1 => 'SD', 2 => 'HD', 3=>'Full HD']);
        $grid->column('episode_download_link', __('Episode download link'));
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
        $show = new Show(Episode::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('shows_id', __('Show id'));
        $show->field('episode_name', __('Episode name'));
        $show->field('quality', __('Quality'))->using([1 => 'SD', 2 => 'HD', 3=>'Full HD']);
        $show->field('episode_download_link', __('Episode download link'));
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
        $form = new Form(new Episode());
        $form->select('shows_id', __('Show id'))->options(Shows::all()->pluck('show_name', 'id'));

        $form->text('episode_name', __('Episode name'));
        $form->radio('quality', __('Quality'))->options(['1' => 'SD', '2' => 'HD','3' => 'Full HD'])->default('1');

        $form->text('episode_download_link', __('Episode download link'));

        return $form;
    }
}
