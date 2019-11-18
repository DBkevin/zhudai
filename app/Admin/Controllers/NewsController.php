<?php

namespace App\Admin\Controllers;

use App\Models\News;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '行业咨询';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News);

        $grid->column('title', '标题')->substr(1,30);
        $grid->column('images', '缩略图');
        $grid->body('正文内容')->substr(1,30);
        $grid->column('views', '查看次数');
        $grid->actions(function($actions){
            $actions->disableView();
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
        $form = new Form(new News);
        $form->text('title','标题')->creationRules('required|unique:news|min:3');
        $form->image('images','文章缩略图')->nullable();
        $form->UEditor('body', '文章内容')->rules('required');
        $form->number('views', '浏览次数')->default(1);

        return $form;
    }
}
