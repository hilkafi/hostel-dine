<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserExtraInfosMoneyDepositTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_extra_infos', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->foreignId('user_id');
            $table->string("phone_number")->nullable();
            $table->text('institutional_details')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
        });

        Schema::create('money_deposit', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->foreignId('hostel_id');
            $table->foreignId('user_id');
            $table->dateTime('date');
            $table->integer('amount');
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
        Schema::dropIfExists('user_extra_infos');
        Schema::dropIfExists('money_deposit');
    }
}
