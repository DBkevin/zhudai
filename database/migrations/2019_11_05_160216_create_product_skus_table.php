<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSkusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_skus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->comment("SKU标题");
            $table->string('description')->comment("sku描述");
            $table->decimal('price',10,2)->comment('SKU价格');
            $table->unsignedBigInteger('stock')->comment('sku库存');
            $table->unsignedBigInteger('num')->comment("分期期数");
            $table->unsignedBigInteger('product_id')->comment("商品所属ID,外键，级联删除");
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('product_skus');
    }
}
