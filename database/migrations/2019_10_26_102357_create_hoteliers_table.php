<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoteliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoteliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hotelier_name');
            $table->string('hotelier_email')->unique();
            //$table->enum('hotelier_status', ['active', 'inactive']);  
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
        Schema::dropIfExists('hoteliers');
    }
}
