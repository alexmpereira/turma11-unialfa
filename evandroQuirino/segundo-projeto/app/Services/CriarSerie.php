<?php

namespace App\Services;

use App\Models\Serie as SerieModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CriarSerie
{
    public function save(
        string $nomeSerie,
        int $qtdTemporadas,
        int $epPorTemporada

    ): SerieModel {
        DB::beginTransaction();
        $serie = SerieModel::create(['nome' => $nomeSerie]);
        $this->criaTemporadas($qtdTemporadas, $epPorTemporada, $serie);        
        DB::commit();

        return $serie;
    }

    public function criaTemporadas(
        int $qtdTemporadas,
        int $epPorTemporada,
        SerieModel $serie
    ): void
    {
        for($i = 1; $i <= $qtdTemporadas; $i++) {
            $temporada = $serie->temporadas()->create(['numero' => $i]);
            
            $this->criaEpisodios($epPorTemporada, $temporada);
        }
    }

    public function criaEpisodios(
        int $epPorTemporada,
        Model $temporada
    ): void
    {
        for($j = 1; $j <= $epPorTemporada; $j++) {
            $temporada->episodios()->create(['numero' => $j]);
        }
    }
}