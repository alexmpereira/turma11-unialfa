<?php

namespace App\Http\Controllers;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;
use App\Services\CriarSeries;
use App\Services\DeletarSeries;


class SerieController extends Controller
{
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
    public function store(SeriesFormRequest $request, CriarSeries $criarSerie)
    {

        // $dados = $request->except('_token');
        // Serie::create($dados);
        // return redirect('/series');
        $serie = $criarSerie->save($request->nome, $request->qtd_temporadas, $request->ep_por_temporada);
        // $qtdTemporadas = $request->qtd_temporadas;


        $request->session()->flash('mensagem', "Serie '{$serie->nome}' e suas temporadas com episódios criada com sucesso!");
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
        return view('series.show', [
            'serie' => Serie::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, DeletarSeries $removerSerie)
    {
        $nomeSerie =$removerSerie->removerSerie($request->id);

        $request->session()->flash('mensagem', "Serie $nomeSerie excluída com sucesso!");
        return redirect()->route('series.index');
    }

    public function editaNome(Request $request)
    {
        $serie = Serie::find($request->id);
        $nomeAntigo = $serie->nome;
        $serie->nome = $request->nome;
        $serie->save();

        $request->session()->flash('mensagem', "Serie $nomeAntigo alterada para $serie->nome!");
        return redirect()->route('series.index');
    }

}
