<?php

namespace App\Admin\Controllers;

use App\Models\msg;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MsgController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '留言';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new msg);

        $grid->column('product_name','商品名称');
        $grid->column('name', '姓名');
        $grid->column('phone', '电话号码');
        $grid->column('created_at', '留言时间');
         $grid->actions(function ($actions) {
            $actions->disableEdit();
        });
        $grid->disableExport();
        $grid->disableCreateButton();
         $grid->disableColumnSelector();

        return $grid;
    }
    public function destroy($id){
        $msg=msg::find($id);
        $msg->delete();
        return "删除成功";
    }
}
