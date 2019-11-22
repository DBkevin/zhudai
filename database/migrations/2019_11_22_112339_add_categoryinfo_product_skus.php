<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryinfoProductSkus extends Migration
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
            $table->text('type1_category_info')->after('type1category')->comment('类型描述');
            $table->text('type2_category_info')->after('type2category')->nullable()->comment('类型描述');
            $table->text('type3_category_info')->after('type3category')->nullable()->comment('类型描述');
            $table->text('type4_category_info')->after('type4category')->nullable()->comment('类型描述');
            $table->text('type5_category_info')->after('type5category')->nullable()->comment('类型描述');
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
            $table->dropColumn('type1_category_info');
            $table->dropColumn('type2_category_info');
            $table->dropColumn('type3_category_info');
            $table->dropColumn('type4_category_info');
            $table->dropColumn('type5_category_info');
        });
    }
}
