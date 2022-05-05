<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    /**
     * Lista as Series.
     * Lista os Itens.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*retorna as series*/
        $series = Serie::get();
        /*return view('series.index', [
            'series' => $series
        ]);*/
        /*faz o mesmo que os comandos acima*/
        return view('series.index', compact('series'));
    }

    /**
     * Mostra a view de criar novas series.
     * Mostra a view de criar novos itens na tabela.
     *
     * @return View
     */
    public function create()
    {
        return view ('series.create');
    }

    /**
     * Cria nova serie.
     * Cria novo item na tabela.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {/*
        $dados = $request->except('_token');
        Serie::create($dados);

        return redirect('/series');
    */
        $serie = Serie::create($request->all());
        return redirect()->route('series.index');
    }

    /**
     * Mostra uma serie especifica.
     * Mostra um item especifico da tabela.
     * 
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        //
    }

    /**
     * Mostra o formulário de editar uma determinada serie
     * Mostra o formulário de editar um determinado item.
     * 
     * @param  int  $id
     * @return View
     */
    public function edit($id)
    {
        //
    }

    /**
     * Realiza a edição dos dados de uma serie.
     * Realiza a edição dos dados de um item.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove um serie.
     * Remove um item.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        //METODO 1
        /*
        $serie = Serie::find($id);
        $serie->delete();
        return redirect('/series');
        */
        //METODO 2
        //Serie::destroy($id);
        //METODO 3
        $serie = Serie::find($id)->delete();
        return redirect()->route('series.index');
    }
}
