<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('default');
            $table->string('image_2')->default('default');
            $table->string('features_priceInfo')->default('default');
            $table->string('features_price')->default('default');
            $table->string('features_tempInfo')->default('default');
            $table->string('features_temp')->default('default');
            $table->longText('features_text');
            $table->string('features_title')->default('default');
            $table->string('features_subtitle')->default('default');
            $table->string('features_url')->default('default');
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
        Schema::dropIfExists('tours');
    }
}
