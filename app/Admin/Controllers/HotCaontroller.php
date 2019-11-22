<?php

namespace App\Admin\Controllers;

use App\Models\Hot;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HotCaontroller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '当月特惠';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Hot);

        $grid->column('title', '标题');
        $grid->column('body', '内容')->display(function ($value) {
            return '文章内容';
        });
        $grid->disableTools();
        $grid->disableExport();
        $grid->actions(function (Grid\Displayers\Actions $actions) {
            $actions->disableView();
            $actions->disableDelete();
        });
        return $grid;
    }



    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Hot);

        $form->text('title', "标题")->default("当月特惠");
        $form->UEditor('body', __('Body'));

        return $form;
    }
}
