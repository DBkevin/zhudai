<?php

namespace App\Admin\Controllers;

use App\Models\Banner;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BannerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'banner设置';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Banner);

        $grid->column('name', 'banner名称');
        $grid->column('image', '图片地址');
        $grid->column('on_sale', '是否显示')->display(function($value){
            return $value?'是':'否';
        });
        $grid->column('url', '链接地址');
        $grid->column('created_at', '创建时间');
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
        $form = new Form(new Banner);

        $form->text('name', 'banenr名称')->rules('required|min:3');
        $form->image('image', '封面图片')->rules('required|image');
        $form->switch('on_sale', '是否上架')->default(1);
        $form->text('url', '链接地址')->rules("required")->help('图片对应的商品链接如http://wwww.baidu.com/product/1,请输入/product/1');
        return $form;
    }
    public function destroy($id)
    {
        $ban=Banner::find($id);
        $ban->delete();
        return '删除成功';
    }
}
