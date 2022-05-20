<?php

namespace App\Services;
use App\Models\Serie;
use App\Models\Temporada;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CriarSeries
{
    public function save(string $nomeSerie, int $qtdTemporadas, int $epPorTemporada
    ):Serie {
        DB::beginTransaction();
        $serie = Serie::create(['nome' => $nomeSerie]);
        $this->criaTemporadas($serie, $qtdTemporadas, $epPorTemporada);
        DB::commit();

        return $serie;
    }

    public function criaTemporadas(Serie $serie, int $qtdTemporadas, int $epPorTemporada):void
    {
        for ($i=1; $i <= $qtdTemporadas; $i++) {
            $temporada = $serie->temporadas()->create(['numero' => $i]);
            $this->criaEpisodios($epPorTemporada, $temporada);
        }
    }

    public function criaEpisodios(int $epPorTemporada, Model $temporada):void
    {
        for ($j=1; $j <= $epPorTemporada; $j++) {
            $temporada->episodios()->create(['numero' => $j]);
        }
    }
}
