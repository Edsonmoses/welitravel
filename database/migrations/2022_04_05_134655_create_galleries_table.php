<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('bgCover')->default('default');
            $table->string('top_title')->default('default');
            $table->string('left_title')->default('default');
            $table->string('right_title')->default('default');
            $table->longText('body');
            $table->string('port_pic')->default('default');
            $table->string('port_pic2')->default('default');
            $table->string('port_cats')->default('default');
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
        Schema::dropIfExists('galleries');
    }
}
