<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealRatesMealsManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_rates', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->foreignId('hostel_id');
            $table->string('type');
            $table->string('timeslot');
            $table->integer('amount');
            $table->timestamps();
        });

        Schema::create('meal_rate_logs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->foreignId('hostel_id');
            $table->foreignId('meal_rate_id');
            $table->integer('from_amount')->nullable();
            $table->integer('to_amount')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->timestamps();
        });

        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->foreignId('hostel_id');
            $table->foreignId('user_id');
            $table->dateTime('date');
            $table->integer('breakfast');
            $table->integer('lunch');
            $table->integer('dinner');
            $table->timestamps();
        });

        Schema::create('managers', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->foreignId('hostel_id');
            $table->foreignId('user_id');
            $table->string('month');
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
        Schema::dropIfExists('meal_rates');
        Schema::dropIfExists('meal_rate_logs');
        Schema::dropIfExists('meals');
        Schema::dropIfExists('managers');
    }
}
