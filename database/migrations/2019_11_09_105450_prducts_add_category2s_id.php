<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PrductsAddCategory2sId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('category2_id')->nullable()->after('category_id');
            $table->foreign('category2_id')->references('id')->on('category2s')->onDelete('set null');
            $table->boolean('hot')->after('price')->default(0)->comment('热销标签，默认无');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
              $table->dropForeign(['category2_id']);
              $table->dropColumn('category2_id');
              $table->dropColumn('hot');
        });
    }
}
