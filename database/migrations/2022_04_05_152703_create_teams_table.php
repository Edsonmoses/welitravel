<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('top_title')->default('default');
            $table->string('left_title')->default('default');
            $table->string('right_title')->default('default');
            $table->longText('body');
            $table->string('pic')->default('default');
            $table->string('pic2')->default('default');
            $table->string('fname')->default('default');
            $table->string('sname')->default('default');
            $table->string('positions')->default('default');
            $table->string('soc_links')->default('default');
            $table->string('soc_icon')->default('default');
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
        Schema::dropIfExists('teams');
    }
}
