<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use App\Services\CriarSerie;
use App\Services\DeletarSerie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $series = Serie::get();
        $mensagem = $request->session()->get('mensagem');
        return view('series.index', compact('series', 'mensagem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeriesFormRequest $request, CriarSerie $criarSerie)
    {
        /* $dados = $request->except('_token');
        Serie::create($dados); */

        $serie = $criarSerie->save(
            $request->nome,
            $request->qtd_temporadas,
            $request->ep_por_temporada
        );

        $request->session()->flash(
            'mensagem',
            "Série {$serie->id} e suas temporadas e episodios criados com sucesso!"
        );
        return redirect()->route('series.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serie = Serie::find($id);
        return view('series.edit', ['serie' => $serie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $series = Serie::find($id);
        $series->update([
            'nome' => $request->nome,
        ]);

        return redirect('/series');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, DeletarSerie $deletarSerie)
    {
        $deletarSerie->removerSerie(
            $request->id
        );
        $request->session()->flash(
            'mensagem',
            "{$request->id} - Série {$request->nome} deletada com sucesso!"
        );
        return redirect()->route('series.index');
    }

    public function editaNome($id, Request $request)
    {
        dd($id);

        $serie= Serie::find($id);
        $novoNome = $request->nome;
        $serie->nome = $novoNome;
        $serie->save();
    }
}
