<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporadas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('numero');

            /**
             * nessa tabela vai ter uma coluna serie_id que ira ser uma FK de série, no caso serie_id faz referencia
             * ao id da tabela series
             */
            $table->unsignedBigInteger('serie_id');
            $table->foreign('serie_id')->references('id')->on('series');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temporadas');
    }
};
