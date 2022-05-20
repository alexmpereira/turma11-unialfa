<?php
namespace App\Services;
use App\Models\Serie;
use App\Models\Temporada;
use App\Models\Episodio;
use Illuminate\Support\Facades\DB;

class DeletarSeries
{
   public function removerSerie(int $id):string
   {
       $nomeSerie = '';
       DB::transaction(function() use ($id, &$nomeSerie) {
           $serie = Serie::find($id);
           $nomeSerie = $serie->nome;

           //Remover temporadas
           $this->removerTemporadas($serie);
           $serie->delete();
       });
       return $nomeSerie;
   }

   public function removerTemporadas(Serie $serie):void
   {
         $serie->temporadas->each(function (Temporada $temporada) {
             //Remover o episodio
             $this->removerEpisodios($temporada);
             $temporada->delete();
         });
   }

   public function removerEpisodios(Temporada $temporada):void
   {
         $temporada->episodios->each(function (Episodio $episodio) {
             $episodio->delete();
         });
   }
}
