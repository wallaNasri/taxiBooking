<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->foreignId('user_id')->primary()->constrained('users','id')->cascadeOnDelete();
            $table->string('full_name')->unique();
            $table->string('mobile')->unique();
            $table->foreignId('area_id')->nullable()->constrained('areas','id')->nullOnDelete();
            $table->string('adresss');
            $table->enum('account_status',['active','inactive','blocked']);
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
        Schema::dropIfExists('profiles');
    }
}
