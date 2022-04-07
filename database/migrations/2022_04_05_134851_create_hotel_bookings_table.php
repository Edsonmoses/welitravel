<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('bgCover')->default('default');
            $table->string('top_title')->default('default');
            $table->string('left_title')->default('default');
            $table->string('right_title')->default('default');
            $table->longText('body');
            $table->string('hotel_pic')->default('default');
            $table->string('hotel_pic2')->default('default');
            $table->string('hlocation')->default('default');
            $table->string('hotel_stars')->default('default');
            $table->string('hotel_rice')->default('default');
            $table->string('hotel_board')->default('default');
            $table->longText('hotel_body');
            $table->string('hotel_url')->default('default');
            $table->string('book_url')->default('default');
            $table->string('hotel_action')->default('default');
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
        Schema::dropIfExists('hotel_bookings');
    }
}
