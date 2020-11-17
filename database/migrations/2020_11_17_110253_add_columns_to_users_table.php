<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('telephone');
            $table->boolean('is_gerant');
            $table->string('cin');
            $table->boolean('status');
            $table->foreignId('profile_id');
            $table->foreignId('entreprise_id');

            $table->foreign('entreprise_id')->references('id')->on('entreprise');
            $table->foreign('profile_id')->references('id')->on('user_profiles');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
