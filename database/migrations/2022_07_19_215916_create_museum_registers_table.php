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
        Schema::create('museum_registers', function (Blueprint $table) {
            $table->id();

            $table->string('document');
            $table->string('name');
            $table->string('age');
            $table->string('gender');
            $table->string('transport');
            $table->date('register_date');
            $table->integer('day');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('museum_id');

            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('museum_id')->references('id')->on('museums')->onDelete('cascade');

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
        Schema::dropIfExists('museum_registers');
    }
};
