<?php

namespace App\Http\Controllers;

use App\Models\Episodio;
use App\Models\Temporada;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\each;

class EpisodiosController extends Controller
{
    public function index(Temporada $temporada, Request $request) {
        $episodios = $temporada->episodios;
        $temporadaId = $temporada->id;

        return view(
            'episodios.index',
            compact('episodios', 'temporadaId')
        );
    }

    public function assistir(Temporada $temporada, Request $request) {
        $idsEpisodiosAssistido = array_keys($request->episodio);
        $temporada->episodios->each(function (Episodio $episodio) use ($idsEpisodiosAssistido) {

            $episodio->assistido = in_array($episodio->id, $idsEpisodiosAssistido);

        });

        $temporada->push();
        return redirect()->back();
    }
}
