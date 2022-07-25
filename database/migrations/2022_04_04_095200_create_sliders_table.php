<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable('NULL');
            $table->string('title')->nullable('NULL');
            $table->string('subtitle')->nullable('NULL');
            $table->string('slug')->nullable('NULL');
            $table->string('Starting')->nullable('NULL');
            $table->string('price')->nullable(0);
            $table->string('per')->nullable('NULL');
            $table->string('infoImage')->nullable('NULL');
            $table->string('infoImage2')->nullable('NULL');
            $table->string('infoprice')->nullable('NULL');
            $table->string('infotemp')->nullable('NULL');
            $table->string('tempInfo')->nullable('NULL');
            $table->string('infoText')->nullable('NULL');
            $table->string('maintitle')->nullable('NULL');
            $table->string('spantitle')->nullable('NULL');
            $table->string('mainprice')->nullable(0);
            $table->string('mainper')->nullable('NULL');
            $table->string('mainpUrl')->nullable('NULL');
            $table->string('sliderType')->nullable('DEFAULT');
            $table->string('status')->nullable('active');

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
        Schema::dropIfExists('sliders');
    }
}
