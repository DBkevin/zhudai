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
        $grid->options('增值服务');
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
        $show->string('title');
        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('attrbutes', __('Attrbutes'));
        $show->field('brand', __('Brand'));
        $show->field('type', __('Type'));
        $show->field('on_sale', __('On sale'));
        $show->field('images', __('Images'));
        $show->field('optinons', __('Optinons'));
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

        $form->number('category_id', __('Category id'));
        $form->text('title', __('Title'));
        $form->textarea('description', __('Description'));
        $form->textarea('attrbutes', __('Attrbutes'));
        $form->text('brand', __('Brand'));
        $form->switch('type', __('Type'));
        $form->switch('on_sale', __('On sale'))->default(1);
        $form->text('images', __('Images'));
        $form->text('optinons', __('Optinons'));
        $form->decimal('price', __('Price'))->default(0.00);

        return $form;
    }
}
