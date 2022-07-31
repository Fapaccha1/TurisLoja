<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();

            $table->integer('number_of_tourist');
            $table->dateTime('register_date');
            $table->integer('days_of_visit');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('reason_item_id');
            $table->integer('user_register_id');
            $table->unsignedBigInteger('transport_item_id');
            $table->string('responsible_tourist');
            $table->integer('month_of_register');
            $table->integer('year_of_register');
            $table->unsignedBigInteger('place_item_id');

            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('reason_item_id')->references('id')->on('reasons');
            $table->foreign('transport_item_id')->references('id')->on('transports');
            $table->foreign('place_item_id')->references('id')->on('places');

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
        Schema::dropIfExists('registers');
    }
};
