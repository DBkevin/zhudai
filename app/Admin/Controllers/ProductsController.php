<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Encore\Admin\Form;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductsController extends  AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '商品';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product);

        $grid->id('ID')->sortable();
        $grid->title("商品名称");
        $grid->brand('商品品牌');
        $grid->on_sale('已上架')->display(function ($value) {
            return $value ? '是' : '否';
        });
         $grid->optinons('增值服务');
        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableDelete();
        });
        $grid->tools(function ($tools) {
            // 禁用批量删除按钮
            $tools->batch(function ($batch) {
                $batch->disableDelete();
            });
        });
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
        $show = new Show(Product::findOrFail($id));
        
        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('attrbutes', __('Attrbutes'));
        $show->field('brand', __('Brand'));
        $show->field('type', __('Type'));
        $show->field('on_sale', __('On sale'));
        $show->field('images', __('Images'));
        $show->field('options', __('Optinons'));
        $show->field('price', __('Price'));
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
        $form = new Form(new Product);
        $form->text('title','商品名称')->rules('required');
        $form->image('images','商品图片')->rules('required|image');
        $form->UEditor('description','商品详情')->rules('required');
        $form->text('options','增值服务')->default(null);
        $form->UEditor('attrbutes','商品参数')->rules('required');
        $form->text('brand','品牌');
        $states=[
            'on'=>['value'=>1,'text'=>'全新','color'=>'success'],
            'off'=>['value'=>0,'text'=>'二手','color'=>'danger'],
        ];
        $form->switch('type','是否全新')->states($states)->default('1');
         // 创建一组单选框
        $form->radio('on_sale', '上架')->options(['1' => '是', '0'=> '否'])->default('0');
         // 直接添加一对多的关联模型
        $form->hasMany('skus', 'SKU 列表', function (Form\NestedForm $form) {
            $form->text('title', 'SKU 名称')->rules('required');
            $form->text('price', '单价')->rules('required|numeric|min:0.01');
            $form->text('stock', '剩余库存')->rules('required|integer|min:0');
            $form->number('num','分期期数')->rules('required|integer|min:12');
        });
        /*$form->number('category_id', __('Category id'));
        $form->text('title', __('Title'));
        $form->textarea('description', __('Description'));
        $form->textarea('attrbutes', __('Attrbutes'));
        $form->text('brand', __('Brand'));
        $form->switch('type', __('Type'));
        $form->switch('on_sale', __('On sale'))->default(1);
        $form->text('images', __('Images'));
        $form->text('optinons', __('Optinons'));
        $form->decimal('price', __('Price'))->default(0.00);
        */
        //定义回调事件
        $form->saving(function(Form $form){
            $form->model()->price=collect($form->input('skus'))->where(Form::REMOVE_FLAG_NAME,0)->min('price')?:0;
        });

        return $form;
    }
}
