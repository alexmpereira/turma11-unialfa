<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    /**
     * Lista os Estudantes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $estudantes = Estudante::get();
        return view('estudantes.index', [
            'estudantes' => $estudantes
        ]);
    }

    /**
     *  Mostra a view de criar novos estudantes.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudantes.create');
    }

    /**
     * Cria novo estudante.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');

        Estudante::create($dados);
        
        return redirect('/estudantes');
    }

    /**
     * Mostra um estudante especifico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudante = Estudante::find($id);
        return view('estudantes.show', [
            'estudante' => $estudante
        ]);
    }

    /**
     * Mostra o formulário de editar um determinado estudante.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudante = Estudante::find($id);

        return view('estudantes.edit', [
            'estudante' => $estudante
        ]);
    }

    /**
     * Realiza a edição dos dados de um estudante.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudante = Estudante::find($id);

        $estudante->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'nascimento' => $request->nascimento
        ]);

        return redirect('/estudantes');
    }

    /**
     * Remove um estudante.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $estudante = Estudante::find($id);
        $estudante->delete();
        return redirect('/estudantes');
    }
}
