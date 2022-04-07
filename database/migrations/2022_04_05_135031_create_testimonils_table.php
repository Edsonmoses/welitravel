<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonils', function (Blueprint $table) {
            $table->id();
            $table->string('bgParallax')->default('default');
            $table->string('top_title')->default('default');
            $table->string('left_title')->default('default');
            $table->string('right_title')->default('default');
            $table->string('testi_pic')->default('default');
            $table->string('testi_pic2')->default('default');
            $table->string('author_pic')->default('default');
            $table->string('author_pic2')->default('default');
            $table->string('testi_title')->default('default');
            $table->string('testi_title2')->default('default');
            $table->string('testi_stars')->default('default');
            $table->string('testi_body')->default('default');
            $table->string('testi_url')->default('default');
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
        Schema::dropIfExists('testimonils');
    }
}
