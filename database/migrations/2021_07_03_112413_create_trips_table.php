<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('profiles','user_id');
            $table->foreignId('driver_id')->constrained('driver_profiles','user_id');
            $table->unsignedFloat('price');
            $table->enum('payment_type',['cash','wallet']);
            $table->unsignedInteger('distance_meter');
            $table->enum('status',['active','end']);
            $table->json('pick_up_location');
            $table->json('drop_off_location');
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
        Schema::dropIfExists('trips');
    }
}
