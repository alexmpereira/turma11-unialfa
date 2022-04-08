<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudantes= Estudante::get();
        return view('estudante.index', [
            'estudantes' => $estudantes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados= $request->except('_token');
        Estudante::create($dados);
        return redirect('estudantes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudantes = Estudante::find($id);
        return view('estudante.show', [
            'estudantes' => $estudantes
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
        $estudantes = Estudante::find($id);
        return view('estudante.edit', [
            'estudantes' => $estudantes
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
        $estudantes = Estudante::find($id);
        $estudantes->update([
            "nome" => $request->nome,
            "cpf" => $request->cpf,
            "nascimento" =>$request->nascimento,
            "sala" =>$request->sala
        ]);
        return redirect('/estudantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudantes = Estudante::find($id);
        $estudantes->delete();
        return redirect('/estudantes');
}

}