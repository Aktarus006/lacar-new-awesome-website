<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryKit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_kit', function (Blueprint $table) {
            $table->integer('category_id')->nullable()->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('kit_id')->nullable()->unsigned()->index();
            $table->foreign('kit_id')->references('id')->on('kits')->onDelete('cascade');
            $table->primary(['category_id', 'kit_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_kit');
    }
}
