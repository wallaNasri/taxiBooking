<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carmodels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained('brands','id')->cascadeOnDelete;
            $table->string('name')->unique();
            $table->unsignedInteger('year');
            $table->enum('fuel_type',['Diesel', 'Petrol', 'Solar', 'Electricity']);
            $table->enum('motor_type',['2Wheel', '4Wheel']);
            $table->unsignedInteger('seats');
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
        Schema::dropIfExists('carmodels');
    }
}
