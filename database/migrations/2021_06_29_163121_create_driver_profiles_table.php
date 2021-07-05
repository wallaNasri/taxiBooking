<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_profiles', function (Blueprint $table) {
            $table->foreignId('user_id')->primary()->constrained('users','id')->cascadeOnDelete();
            $table->string('id_number')->unique();
            $table->string('full_name')->unique();
            $table->foreignId('veichle_id')->constrained('veichles','id')->nullOnDelete();
            $table->enum('activity_status',['online','offline']);
            $table->string('mobile')->unique();
            $table->foreignId('area_id')->constrained('areas','id')->nullOnDelete();
            $table->string('adresss');
            $table->enum('account_status',['active','inactive','blocked']);
            $table->enum('payment_type',['wallet','target']);
            $table->string('driving_license_number');
            $table->date('driving_license_expiry_date');
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('driver_profiles');
    }
}
