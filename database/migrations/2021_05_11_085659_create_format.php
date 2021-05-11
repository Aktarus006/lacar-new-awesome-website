<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formats', function (Blueprint $table) {
            $table->id();
            $table->string('format');
            $table->string('reference');
            $table->integer('kit_id')->nullable()->unsigned()->index();
            $table->foreign('kit_id')->references('id')->on('kits')->onDelete('cascade');
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
        Schema::dropIfExists('format');
    }
}
