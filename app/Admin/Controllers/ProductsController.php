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
            return $value ? "是" : '无';
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
        $form->multipleImage('images', '商品图片可选择多张')->rules(function ($form) {
            if (!$id = $form->model()->id) {
                return 'required|image';
            }
        })->help("请上传图片，多张图片请按【Ctrl】选择")->sortable();
        $form->select('category2_id', '类目')->options(
            Category2::all()->pluck('catename', 'id')
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
            $form->divider('分期期限设置不带*的可不填');
            $form->text('type1', '分期文字1')->help("如：月租金 113.00元 ,租期 24个月")->rules('required');
            $form->currency('type1_price', '首期金额1')->rules('required')->help('113')->symbol('￥');
            $form->text('type1category', '分期类型1')->rules('required')->help('如：固定租期，随租随还');
            $form->text('type1_descript', '分期描述1')->rules('required')->help('如：（平均月租金110.50元/月,1-12期:113.00元/月,13-24期:108.00元/月，到期归还艾特租，6个月后可随时退）');
            $form->text('type2', '分期文字2')->help("如：月租金 113.00元 ,租期 24个月");
            $form->currency('type2_price', '首期金额2')->help('113')->symbol('￥');
            $form->text('type2category', '分期类型2')->help('如：固定租期，随租随还');
            $form->text('type2_descript', '分期描述2')->help('如：（平均月租金110.50元/月,1-12期:113.00元/月,13-24期:108.00元/月，到期归还艾特租，6个月后可随时退）');
            $form->text('type3', '分期文字3')->help("如：月租金 113.00元 ,租期 24个月");
            $form->currency('type3_price', '首期金额3')->help('113')->symbol('￥');
            $form->text('type3category', '分期类型3')->help('如：固定租期，随租随还');
            $form->text('type3_descript', '分期描述3')->help('如：（平均月租金110.50元/月,1-12期:113.00元/月,13-24期:108.00元/月，到期归还艾特租，6个月后可随时退）');
            $form->text('type4', '分期文字4')->help("如：月租金 113.00元 ,租期 24个月");
            $form->currency('type4_price', '首期金额4')->help('113')->symbol('￥');
            $form->text('type4category', '分期类型4')->help('如：固定租期，随租随还');
            $form->text('type4_descript', '分期描述4')->help('如：（平均月租金110.50元/月,1-12期:113.00元/月,13-24期:108.00元/月，到期归还艾特租，6个月后可随时退）');
            $form->text('type5', '分期文字5')->help("如：月租金 113.00元 ,租期 24个月");
            $form->currency('type5_price', '首期金额5')->help('113')->symbol('￥');
            $form->text('type5category', '分期类型5')->help('如：固定租期，随租随还');
            $form->text('type5_descript', '分期描述5')->help('如：（平均月租金110.50元/月,1-12期:113.00元/月,13-24期:108.00元/月，到期归还艾特租，6个月后可随时退）');
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
