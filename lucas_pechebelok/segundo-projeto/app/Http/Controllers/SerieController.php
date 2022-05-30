<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\SeriesFormRequest;
=======
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function index(Request $request)
    {

        $series = Serie::get();
        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series', 'mensagem'));
=======
    public function index()
    {
        $series = Serie::get();

        return view('series.index', ['series' => $series]);
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
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
<<<<<<< HEAD
    public function store(SeriesFormRequest $request)
    {

        $serie = Serie::create(['nome' => $request->nome]);

        $qtdTemporadas = $request->qtd_temporadas;
        for($i = 1; $i <= $qtdTemporadas; $i++) {
            $temporada = $serie->temporadas()->create(['numero' => $i]);
            for($j = 1; $j <= $request->ep_por_temporada; $j++) {
                $temporada->episodios()->create(['numero' => $j]);
            }
        }

        $request->session()->flash('mensagem', "Série {$serie->id} e suas temporadas e episodios criados com sucesso {$serie->nome}");
=======
    public function store(Request $request)
    {
        $data = $request->except('_token');
        Serie::create($data);
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f

        return redirect('/series');
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
<<<<<<< HEAD
    public function destroy(int $id, Request $request)
    {
        $serie = Serie::find($id);
        $request->session()->flash('mensagem', "Série deletada com sucesso");
=======
    public function destroy(int $id)
    {
        $serie = Serie::find($id);
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
        $serie->delete();

        return redirect('/series');
    }
}
