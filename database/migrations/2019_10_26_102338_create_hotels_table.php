<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hotel_name');
            $table->integer('hotel_rating');
            $table->enum('hotel_category', ['hotel', 'alternative', 'hostel', 'lodge', 'resort', 'guest-house']);  
            $table->string('image');
            $table->integer('reputation');
            $table->integer('hotelier_id')->unsigned();
            $table->foreign('hotelier_id')->references('id')->on('hoteliers')->onDelete('cascade');
            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            //$table->enum('hotel_status', ['active', 'inactive']); 
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
        Schema::dropIfExists('hotels');
    }
}
