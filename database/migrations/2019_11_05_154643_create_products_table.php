<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id')->nullable()->comment('类目ID，级联清空,允许null');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->string('title')->comment('商品标题');
            $table->text('description')->comment('商品详情');
            $table->text('attrbuite')->comment("商品参数描述");
            $table->string('brand')->comment('商品品牌');
            $table->boolean('type')->comment('商品新旧类型');
            $table->boolean('on_sale')->default(true)->comment("是否上架，默认上架");
            $table->string('images')->comment('商品图片路径');
            $table->string("options")->nullable()->comment('增值服务');
            $table->decimal('price',10,2)->default(0)->comment('商品价格');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
