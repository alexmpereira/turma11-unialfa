<?php

namespace App\Http\Controllers;

use App\Models\Episodio;
use App\Models\Temporada;
use Illuminate\Http\Request;

class EpisodiosController extends Controller
{
    public function index(Temporada $temporada, Request $request) {
        $episodios = $temporada->episodios;
        $temporadaId = $temporada->id;
        $mensagem = $request->session()->get('mensagem');


        return view(
            'episodios.index',
            compact('episodios', 'temporadaId', 'mensagem')
        );
    }

    public function assistir(Temporada $temporada, Request $request) {
        $idsEpisodiosAssistidos = array_keys($request->episodio);
        $temporada->episodios->each(function (Episodio $episodio) use ($idsEpisodiosAssistidos){
            $episodio->assistido = in_array($episodio->id, $idsEpisodiosAssistidos);

        });
        $temporada->push();
        $request->session()->flash('mensagem', 'Episódios marcados como assistidos');
        return redirect()->back();
    }
}
