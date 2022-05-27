<?php

namespace App\Http\Controllers;

use App\Models\Episodio;
use App\Models\Temporada;
use Illuminate\Http\Request;

class EpisodiosController extends Controller
{
    public function index(Temporada $temporada, Request $request)
    {
        $episodios  = $temporada->episodios;
        $temporadaId = $temporada->id;
        $mesagem = $request->session()->get('mensagem');

        return view(
            'episodios.index',
            compact('episodios', 'temporadaId', 'mensagem')
        );
    }

    public function assitido(Temporada $temporada, Request $request)
    {
        $idsEpisodiosAssistido = array_keys($request->episodio);
        $temporada->episodios->each(function (Episodio $episodio) use ($idsEpisodiosAssistido) {
            $episodio->assistido = in_array($episodio->id, $idsEpisodiosAssistido);
        });

        $temporada->push();
        $request->session()->flash('mensagem', 'Episodios marcados como assistido');
        return redirect()->back();
    }
}
