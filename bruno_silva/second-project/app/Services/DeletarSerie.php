<?php

namespace App\Services;

use App\Models\Serie as SerieModel;
use App\Models\Temporada as TemporadaModel;
use App\Models\Episodio as EpisodioModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DeletarSerie
{


    public function removerSerie(
        int $idSerie
    ) {
        $nomeSerie = '';
        DB::transaction(function () use ($idSerie, &$nomeSerie) {
            $serie = SerieModel::find($idSerie);
            $nomeSerie = $serie->nome;

            $this->removerTemporadas($serie);
            $serie->delete();
        });

        return $nomeSerie;
    }

    private function removerTemporadas( SerieModel $serie):void
    {
        $serie->temporadas->each(function (TemporadaModel $temporada){
            //remover epsodio
            $this->removerEpsodios($temporada);

            $temporada->delete();
        });
    }

    private function removerEpsodios(TemporadaModel $temporada)
    {
        $temporada->episodios->each(function (EpisodioModel $episodio){
            $episodio->delete();
        });
    }
}
