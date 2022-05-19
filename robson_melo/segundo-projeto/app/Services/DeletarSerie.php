<?php
namespace App\Services;

use App\Models\Episodio;
use App\Models\Serie;
use App\Models\Temporada;
use Illuminate\Support\Facades\DB;

class DeletarSerie
{
    public function removerSerie(int $serieId): string
    {
        $nomeSerie = '';
        DB::transaction(function () use ($serieId, &$nomeSerie){
            $serie = Serie::find($serieId);
            $nomeSerie = $serie->name;

            //remover a temporada
            $this->removerTemporadas($serie);
            //remover a serie
            $serie->delete();

        });
        return $nomeSerie;
    }

    public function removerTemporadas(Serie $serie): void
    {
        $serie->temporadas->each(function (Temporada $temporada) {
            //remover os episodios
            $this->removerEpisodios($temporada);
            //remover a temporada
            $temporada->delete();
        });
    }

    public function removerEpisodios(Temporada $temporada): void
    {
        $temporada->episodios->each(function (Episodio $episodio){
            $episodio->delete();
        });
    }
}
