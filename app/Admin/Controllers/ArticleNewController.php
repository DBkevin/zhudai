<?php

namespace App\Admin\Controllers;

use App\Models\ArticleNew;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ArticleNewController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '媒体中心';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ArticleNew);

        $grid->column('id', 'Id');
        $grid->column('title', '文章标题');
        $grid->column('image','图片缩略图');
        $grid->column('body','正文内容')->display(function ($value){
            return strip_tags($value);
        })->limit(1,30);
        $grid->column('views', '浏览次数');
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
        $form = new Form(new ArticleNew);

        $form->text('title', '文章标题')->creationRules('required|unique:article_news|min:3');
        $form->image('image', '文章缩略图')->rules('required')->help('图片尺寸800*200');
        $form->UEditor('body','文章内容')->rules('required');
        $form->number('views', '浏览次数')->default(0)->help('可不填，不填随机生成');

        return $form;
    }
}
