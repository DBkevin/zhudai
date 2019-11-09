<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Encore\Admin\Form;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Category;
use App\Models\Category2;

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
        $grid->model()->with(['category']);
        $grid->id('ID')->sortable();
        $grid->title("商品名称");
        $grid->column('category.name', '所属栏目');
        $grid->brand('商品品牌');
        $grid->column('category2.catename', '所属首页栏目');
        $grid->price('价格（最低价）');
        $grid->on_sale('已上架')->display(function ($value) {
            return $value ? '是' : '否';
        });
        $grid->options('增值服务')->display(function ($value) {
            return $value ? $value : '无';
        });
        $grid->hot('首页显示')->display(function ($value) {
            return $value ?"是" : '无';
        });
        $grid->actions(function ($actions) {
            $actions->disableView();
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
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product);
        $form->text('title', '商品名称')->rules('required');
        // 添加一个类目字段，与之前类目管理类似，使用 Ajax 的方式来搜索添加
        $form->select('category_id', '类目')->options(function ($id) {
            $category = Category::find($id);
            if ($category) {
                return [$category->id => $category->full_name];
            }
        })->ajax('/admin/api/categories?is_directory=0');
        $form->multipleImage('images', '商品图片可选择多张')->rules(function($form){
              if(!$id=$form->model()->id) {
                return 'required|image';
            }
        })->help("请上传图片，多张图片请按【Ctrl】选择");
         $form->select('category2_id', '类目')->options(
               Category2::all()->pluck('catename','id')
        );
        $form->UEditor('description', '商品详情')->rules('required');
        $form->UEditor('attrbuite', '商品参数')->rules('required')->default("具体参数以实物为准");
        $form->text('options', '增值服务')->default(null)->help('不填为空');
        $form->text('brand', '品牌');
        $states = [
            'on' => ['value' => 1, 'text' => '全新', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => '二手', 'color' => 'danger'],
        ];
       
        $form->switch('type', '是否全新')->states($states)->default('1');
        // 创建一组单选框
        $form->radio('on_sale', '上架')->options(['1' => '是', '0' => '否'])->default('1');
        // 创建一组单选框
        $form->radio('hot', '上架')->options(['1' => '是', '0' => '否'])->default('1')->help("勾选是会出现首页热销栏目");
        // 直接添加一对多的关联模型
        $form->hasMany('skus', 'SKU 列表', function (Form\NestedForm $form) {
            $form->text('title', 'SKU 名称')->rules('required');
            $form->text('price', '单价')->rules('required|numeric|min:0.01');
            $form->text('stock', '剩余库存')->rules('required|integer|min:0');
            $form->number('num', '分期期数')->rules('required|integer|min:12');
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
        $form->saving(function (Form $form) {
            $form->model()->price = collect($form->input('skus'))->where(Form::REMOVE_FLAG_NAME, 0)->min('price') ?: 0;
        });

        return $form;
    }
}
