<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeichlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veichles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('model_id')->constrained('carmodels','id')->cascadeOnDelete();
            $table->string('image');
            $table->string('car_number');
            $table->string('color');
            $table->string('license_number');
            $table->date('license_end_date');
            $table->string('vin_number')->unique();
            $table->string('owner_id_card');           
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
        Schema::dropIfExists('veichles');
    }
}
