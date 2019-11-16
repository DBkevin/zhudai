<?php

namespace App\Admin\Actions\Products;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class Replicate extends RowAction
{
    public $name = '查看';

    public function handle(Model $model)
    {
        // $model ...
        $model->id();
        echo "aaa";

        return $this->response()->success('Success message.')->refresh();
    }

}