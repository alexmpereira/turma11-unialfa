<?php

namespace App\Http\Controllers;
use App\Models\Temporada;

use Illuminate\Http\Request;

class EpisodiosController extends Controller
{
    public function index(Temporada $temporada, Request $request)
    {
        $episodios = $temporada->episodios;
        $temporadaId = $temporada->id;
        $mensagem = $request->session()->get('mensagem');
        return view('episodios.index', compact('episodios', 'temporadaId', 'mensagem'));
    }

    public function assistir(Temporada $temporada, Request $request)
    {
        // dd($request->all());

        $episodioId = $request->episodioId;
        $assistido = $request->assistido;
        $episodio = $temporada->episodios->find($episodioId);

        $episodio->assistido = $assistido;


        $temporada->push();
        $request->session()->flash('Episódio assistido');
        return redirect()->route('episodios.index', ['temporada' => $temporada->id]);

    }
}
