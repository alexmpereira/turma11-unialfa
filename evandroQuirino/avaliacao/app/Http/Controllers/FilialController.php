<?php

namespace App\Http\Controllers;

use App\Models\Filiais;
use Illuminate\Http\Request;

class FilialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filiais = Filiais::get();
        return view('filiais.index', [
            'filiais' => $filiais
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filiais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');
        Filiais::create($dados);

        return redirect( '/' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $filial = Filiais::find($id);
       
        return view('filiais.show', [
             'filial' => $filial
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
        $filial = Filiais::find($id);

        return view('filiais.edit', [
           'filial' => $filial 
        ]);
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
        $filial = Filiais::find($id);

        $filial->update([
            'nome_filial' => $request->nome_filial,
            'regiao' => $request->regiao,
            'data_criacao' => $request->data_criacao
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filial = Filiais::find($id);
        $filial->delete();
        return redirect('/');
    }
}
