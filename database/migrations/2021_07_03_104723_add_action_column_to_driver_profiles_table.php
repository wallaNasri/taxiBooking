<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActionColumnToDriverProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('driver_profiles', function (Blueprint $table) {
            $table->dropColumn('activity_status');
            $table->enum('action_status',['valid','invalid'])->after('full_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('driver_profiles', function (Blueprint $table) {
            $table->dropColumn('action_status');
        });
    }
}
