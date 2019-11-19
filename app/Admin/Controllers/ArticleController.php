<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Str;
class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '底部综合文章';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article);

        $grid->column('id', 'Id');
        $grid->column('title','标题');
        $grid->column('type', '所属类目');
        $grid->column('body', '内容')->display(function($value){
          return  strip_tags($value);
        })->substr(1,30);
        $grid->actions(function ($actions){
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
        $form = new Form(new Article);
        $form->text('title','title')->creationRules('required|unique:articles|min:3');
        $form->text('type', '所属类目')->help('售后相关的填写售后服务，以此类推');
        $form->UEditor('body', '文章内容')->help('文章内容');

        return $form;
    }
}
