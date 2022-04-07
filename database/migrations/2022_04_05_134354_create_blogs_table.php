<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('bgCover')->default('default');
            $table->string('bgParallax')->default('default');
            $table->string('top_title')->default('default');
            $table->string('left_title')->default('default');
            $table->string('right_title')->default('default');
            $table->longText('body');
            $table->string('blog_pic')->default('default');
            $table->string('blog_pic2')->default('default');
            $table->string('blog_title')->default('default');
            $table->dateTime('blog_date')->useCurrent = true;
            $table->longText('blog_text');
            $table->string('blog_url')->default('default');
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
        Schema::dropIfExists('blogs');
    }
}
