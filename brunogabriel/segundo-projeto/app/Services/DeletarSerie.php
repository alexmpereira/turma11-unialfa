<?php

namespace App\Services;

use App\Models\Episodio;
use App\Models\Serie as SerieModel;
use App\Models\Temporada;
use Illuminate\Support\Facades\DB;

class DeletarSerie {
    public function removerSerie(int $serieId): string {

        $nomeSerie = '';
        DB::transaction(function () use ($serieId, &$nomeSerie) {
            $serie = SerieModel::find($serieId);
            $nomeSerie = $serie->nome;

            //remover a temporada
            $this->removerTemporadas($serie);
            //remover a serie
            $serie->delete();
        });

        return $nomeSerie;

    }

    public function removerTemporadas(SerieModel $serie): void {
        $serie->temporadas->each(function (Temporada $temporada) {
            //remover os episodios
            $this->removerEpisodios($temporada);
            //remover a temporada
            $temporada->delete();
        });
    }

    public function removerEpisodios(Temporada $temporada): void {
        $temporada->episodios->each(function (Episodio $episodio){
            $episodio->delete();
        });
    }
}
