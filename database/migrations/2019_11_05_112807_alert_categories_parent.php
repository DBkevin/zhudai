<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlertCategoriesParent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            //修改Type为name
            $table->renameColumn("type","name");
            $table->unsignedBigInteger("parent_id")->nullable()->after("type")->comment('父类ID,允许为空,为空代表本身就是父类');
            $table->foreign("parent_id")->references('id')->on('categories')->onDelete('cascade');
            $table->boolean("is_directory")->after('parent_id')->comment("是否有子栏目");
            $table->unsignedBigInteger("level")->after("is_directory")->comment('当前是第几级');
            $table->string("path")->after("level")->comment("该类目所有的父级id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            //
            $table->renameColumn("name","type");
            $table->dropForeign('categories_parent_id_foreign');
            $table->dropColumn("parent_id");
            $table->dropColumn("is_directory");
            $table->dropColumn('level');
            $table->dropColumn("path");
        });
    }
}
