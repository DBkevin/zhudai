<?php

namespace App\Admin\Controllers;

use App\Models\Category2;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class category2Controller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '首页栏目分类';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category2);

        $grid->column('id', __('Id'));
        $grid->column('catename', '栏目名称');
        $grid->column('catename1', '栏目副名称1');
        $grid->column('catename2', '栏目副名称2');
        $grid->column('catename3', '栏目副名称3');
        $grid->column('cateimg', '栏目图片');
        $grid->column('cateurl', '栏目链接');
        $grid->actions(function ($actions) {
            // 不展示 Laravel-Admin 默认的查看按钮
            $actions->disableView();
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Category2);

        $form->text('catename','栏目名称')->rules(function($form){
            if(!$id=$form->model()->id){
                return  'unique:category2s';
            }
        })->help("请输入栏目名称");
        $form->text('catename1','副名称1')->rules(function($form){
            if(!$id=$form->model()->id){
                return  'unique:category2s';
            }
        })->help("请输入副栏目名称，可留空");
         $form->text('catename2','副名称2')->rules(function($form){
            if(!$id=$form->model()->id){
                return  'unique:category2s';
            }
        })->help("请输入副栏目名称，可留空");
         $form->text('catename3','副名称3')->rules(function($form){
            if(!$id=$form->model()->id){
                return 'unique:category2s';
            }
        })->help("请输入副栏目名称，可留空");
        $form->image("cateimg",'栏目图片')->help("尺寸365*562");
        $form->text("cateurl",'栏目链接')->help('图片对应的商品链接如http://wwww.baidu.com/product/1,请输入/product/1');
        return $form;
    }
}
