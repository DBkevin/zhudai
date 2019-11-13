<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuishousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huishous', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comname')->nullable()->comment("公司名称");
            $table->string('username')->nullable()->comment("联系人");
            $table->string('tel')->nullable()->comment("电话");
            $table->unsignedBigInteger('num')->nullable()->comment('数量');
            $table->string('year')->nullable()->comment("年份");
            $table->string('devtypes')->nullable()->comment("类型");
            $table->string('brand')->nullable()->comment('品牌');
            $table->string('bz')->nullable()->comment('备注');
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
        Schema::dropIfExists('huishous');
    }
}
