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
        Schema::create('episodios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('numero');

            //Nessa tabela, o campo temporada_id é um campo de relacionamento
            $table->unsignedBigInteger('temporada_id');
            $table->foreign('temporada_id')->references('id')->on('temporadas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodios');
    }
};
