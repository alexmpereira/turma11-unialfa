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

            // Nesta tabela irá conter uma coluna serie_id que irá ser uma FK de série.
            // No caso serie_id faz referência ao id da tabela series.
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
