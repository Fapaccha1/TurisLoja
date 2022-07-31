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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();

            $table->integer('age'); //1 = 1-17; 2 = 18-64; 3 = >=64
            $table->integer('gender'); // 1 = M; 2 = F
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('recommend_visit'); // 1 = Si; 2 = No
            $table->integer('education_level'); // 1 = Primaria; 2 = Secundaria; 3 = Superior
            $table->integer('economic_activity'); // 1 = Empleado; 2 = Desempleado; 3 = Independiente
            $table->integer('museum'); // 1 = musica; 2 = cultura lojana; 3 = Arqueologico y lojanidad; 4 = puerta de la ciudad
            $table->integer('interest'); // 1 = Historia; 2 = Arte; 3 = Etnografia; 4 = Arqueologia; 5 = Ninguno
            $table->integer('kid'); // 1 = Si; 2 = No
            $table->integer('day');
            $table->integer('reason'); // 1 = Poco tiempo; 2 = Falta de informacion; 3 = Distancia; 4 = No tengo con quien ir; 5 = Ninguno
            
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('surveys');
    }
};
