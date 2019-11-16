<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddZhudaiToProductSkusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_skus', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('num')->nullable()->change();
            $table->string('type1')->default('暂无待修改')->comment('第一个分期租贷方式说明,不能为空');
            $table->decimal('type1_price',10,2)->default(100)->comment('第一个分期的首页金额');
            $table->string('type1category')->default('固定租期')->comment('第一个分期的说明类别');
            $table->string('type1_descript')->default('暂无待修改')->comment('第一个分期助贷方式描述');
            $table->string('type2')->nullable()->comment('第2个分期租贷方式说明,不能为空');
            $table->decimal('type2_price',10,2)->nullable()->comment('第2个分期的首页金额');
            $table->string('type2category')->nullable()->comment('第2个分期的说明类别');
            $table->string('type2_descript')->nullable()->comment('第一个分期助贷方式描述');
            $table->string('type3')->nullable()->comment('第3个分期租贷方式说明,不能为空');
            $table->decimal('type3_price',10,2)->nullable()->commetn('第3个分期的首页金额');
            $table->string('type3category')->nullable()->comment('第3个分期的说明类别');
            $table->string('type3_descript')->nullable()->comment('第一个分期助贷方式描述');
            $table->string('type4')->nullable()->comment('第3个分期租贷方式说明,不能为空');
            $table->decimal('type4_price',10,2)->nullable()->commetn('第4个分期的首页金额');
            $table->string('type4category')->nullable()->comment('第4个分期的说明类别');
            $table->string('type4_descript')->nullable()->comment('第一个分期助贷方式描述');
            $table->string('type5')->nullable()->comment('第5个分期租贷方式说明,不能为空');
            $table->decimal('type5_price',10,2)->nullable()->commetn('第5个分期的首页金额');
            $table->string('type5category')->nullable()->comment('第5个分期的说明类别');
            $table->string('type5_descript')->nullable()->comment('第一个分期助贷方式描述');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_skus', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('num')->change();
            $table->dropColumn('type1');
            $table->dropColumn('type1_price');
            $table->dropColumn('type1category');
            $table->dropColumn('type1_descript');
            $table->dropColumn('type2');
            $table->dropColumn('type2_price');
            $table->dropColumn('type2category');
            $table->dropColumn('type2_descript');
            $table->dropColumn('type3');
            $table->dropColumn('type3_price');
            $table->dropColumn('type3category');
            $table->dropColumn('type3_descript');
            $table->dropColumn('type4');
            $table->dropColumn('type4_price');
            $table->dropColumn('type4category');
            $table->dropColumn('type4_descript');
            $table->dropColumn('type5');
            $table->dropColumn('type5_price');
            $table->dropColumn('type5category');
            $table->dropColumn('type5_descript');

        });
    }
}
