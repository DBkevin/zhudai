<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Layout\Content;
use App\Models\Category;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Illuminate\Http\Request;
use Encore\Admin\Controllers\HasResourceActions;

class CategoriesController extends Controller
{
    use HasResourceActions;
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '品类类目';

    public function index(Content $content)
    {
        return $content
            ->header('品类类目列表')
            ->body($this->grid());
    }
    public function edit($id, Content $content)
    {
        return $content
            ->header('编辑品类类目')
            ->body($this->form(true)->edit($id));
    }
    public function create(Content $content)
    {
        return $content
            ->header('创建品类类目')
            ->body($this->form(false));
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category);

        $grid->id('ID')->sortable();
        $grid->name('名称');
        $grid->level('层级');
        $grid->is_directory('是否目录')->display(function ($value) {
            return $value ? '是' : '否';
        });
        $grid->column('parent_id','父栏目')->display(function(){
            return $this->parent["name"];
        });
        $grid->actions(function ($actions) {
            // 不展示 Laravel-Admin 默认的查看按钮
            $actions->disableView();
        });
        return $grid;
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form($isEditing = false)
    {
        $form = new Form(new Category);

        $form->text('name', '类目名称')->rules('required');
        //编辑模式
        if ($isEditing) {
            //不允许修改【是否目录】和父类目字段的值
            $form->display('is_directory', '是否目录')->with(function ($value) {
                return $value ? '是' : '否';
            });
            // 支持用符号 . 来展示关联关系的字段
            $form->display('parent.name', '上级类目');
        } else {
            // 定义一个名为『是否目录』的单选框
            $form->radio('is_directory', '是否目录')
                ->options(['1' => '是', '0' => '否'])
                ->default('0')
                ->rules('required');
            // 定义一个名为父类目的下拉框
            //$form->select('parent_id', '上级目录')->ajax('/admin/api/categories');
            $form->select('parent_id','上级目录')->options(
                Category::where('is_directory',true)->pluck('name','id')
            );
        }
        return $form;
    }
    //定义下拉搜索接口
    public function apiIndex(Request $request){
        //用户输入的值通过q参数获取
        $search=$request->input("q");
        $result=Category::query()
            ->where('is_directory',boolval($request->input('is_directory', true)))
            ->where('name','like','%'.$search.'%')
            ->paginate();
        $result->setCollection($result->getCollection()->map(function (Category $category){
            return ['id'=>$category->id,"text"=>$category->full_name];
        }));

        return $result;
    }
}
