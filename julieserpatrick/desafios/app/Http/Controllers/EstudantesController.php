<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EstudantesController extends Controller
{
    /**
     * Lista de Estudantes.
     *
     * @return View
     */
    public function index()
    {
        $estudantes = Estudante::get();

        return view(
            'estudantes.index', ['estudantes' => $estudantes]
        );
    }

    /**
     * Mostrar a View de Criar novos Estudantes.
     *
     * @return View
     */
    public function create()
    {
        return view('estudantes.create');
    }

    /**
     * Criar Estudantes no Banco.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');
        Estudante::create($dados);

        return redirect('estudantes');
    }

    /**
     * Mostrar um Estudante Especifico.
     *
     * @param  int  $id
     * @return View
     */
    public function show(int $id)
    {
        $estudante = Estudante::find($id);

        return view(
            'estudantes.show', ['estudante' => $estudante]
        );

    }

    /**
     * Mostrar o Formulario ora Editar o estudante especifico.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(int $id)
    {
        //Consutar o estudante
        $estudante = Estudante::find($id);

        // agr envia o estudante para a view
        return view(
            'estudantes.edit', ['estudante' => $estudante]
        );

    }

    /**
     * realizar Atualizacao do estudante.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $estudante = Estudante::find($id);

        $estudante->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'nascimento' => $request->nascimento,
            'sala_id' => $request->sala_id


        ]);

        return redirect('/estudantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        $estudante = Estudante::find($id);
        $estudante->delete();

        return redirect('estudantes');

    }
}
