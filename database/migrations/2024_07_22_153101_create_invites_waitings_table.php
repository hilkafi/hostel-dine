<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitesWaitingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invites', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->foreignId('hostel_id');
            $table->string('email');
            $table->foreignId('role_id');
            $table->string('status')->default('PENDING');
            $table->timestamps();
        });

        Schema::create('waitings', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->foreignId('hostel_id');
            $table->foreignId('user_id');
            $table->string('status')->default('PENDING');
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
        Schema::dropIfExists('invites');
        Schema::dropIfExists('waitings');
    }
}
