<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategory2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('catename')->comment('栏目名称');
            $table->string('catename1')->nullable()->comment('栏目副名称1');
            $table->string('catename2')->nullable()->comment('栏目副名称2');
            $table->string('catename3')->nullable()->comment('栏目副名称3');
            $table->string('cateimg')->nullable()->comment("栏目主图片");
            $table->string('cateurl')->nullable()->comment('栏目主图片对应的地址');
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
        Schema::dropIfExists('category2s');
    }
}
