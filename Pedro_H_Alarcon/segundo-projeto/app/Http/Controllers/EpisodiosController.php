<?php

namespace App\Http\Controllers;

use App\Models\Temporada;
use Illuminate\Http\Request;

class EpisodiosController extends Controller
{
    public function index(Temporada $temporada, Request $request) {
        $episodios = $temporada->episodios;
        $temporadaId = $temporada->id;

        return view(
            'episodio.index',
            compact('episodios', 'temporadaId')
        );
    }

    public function assistir(Temporada $temporada, Request $request) {
        $idEpsodiosAssistidos = array_keys($request->episodio);
        $temporada->episodios->each(function($episodio) use ($idEpsodiosAssistidos) {
            $episodio->assistido = in_array($episodio->id, $idEpsodiosAssistidos);
        });

        $temporada->push();
        $request->session()->flash('mensagem', );
        return redirect()->back(); 
    }
}
