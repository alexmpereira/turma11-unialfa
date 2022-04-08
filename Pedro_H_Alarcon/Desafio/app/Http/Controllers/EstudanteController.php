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
        $studant = Estudante::get();
        return view('students.index', [
            'students'=> $studant
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studant = $request->except('_token');
        Estudante::create($studant);
        //exit;
        return redirect('students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //TODO buscar um unico cliente
        $estudante = Estudante::find($id);

        return view('students.show', [
            'students' =>$estudante
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
        //TODO Consultar o cliente
        $estudante = Estudante::find($id);
        //TODO Vamos evniar a pessoa para uma view
        return view('students.edit', [
            'students' => $estudante
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
        $estudante = Estudante::find($id);
        $estudante ->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'nascimento' => $request->nascimento
        ]);

        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
