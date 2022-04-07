<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->id();
            $table->string('bgCover')->default('default');
            $table->string('bgImage')->default('default');
            $table->string('top_title')->default('default');
            $table->string('left_title')->default('default');
            $table->string('right_title')->default('default');
            $table->longText('body');
            $table->string('video')->default('default');
            $table->string('image')->default('default');
            $table->string('sign')->default('default');
            $table->string('category_id')->default('default');
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
        Schema::dropIfExists('aboutuses');
    }
}
