<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
        /**
     * Lista os Estudantes
     *
     * @return View
     */
    public function index()
    {
        //TODO Buscar estudantees no banco
        $estudantes = Estudante::get();

        //TODO Verificar se veio vazio

        //TODO Validar se CNPJ_CPF é válido
        return view('estudantes.index', [
            'estudantes'=> $estudantes
        ]);
    }

    /**
     * Mostra a view de criar novos estudantees com formulário.
     *
     * @return View
     */
    public function create()
    {
        return view('estudantes.create');
    }

    /**
     * Cria um novo estudantee.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {

        $dados = $request->except('_token');
        Estudante::create($dados);
        //exit;
        return redirect('estudantes');
    }

    /**
     * Mostra um estudantee especifico.
     *
     * @param  int  $id
     * @return View
     */
    public function show(int $id)
    {
        //TODO buscar um unico estudantee
        $estudante = Estudante::find($id);

        return view('estudantes.show', [
            'estudante' =>$estudante
        ]);
    }

    /**
     * Mostra um formulario de editar um determinado estudantee.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(int $id)
    {
        //TODO consultar o estudante pelo id
        $estudante = Estudante::find($id);
        //TODO vamos enviar a pessoa para uma view
        return view('estudantes.edit', [
            'estudante' => $estudante
        ]);
    }

    /**
     * Realiza a edição dos dados de um estudantee.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //dd($request->nome);exit;
        $estudante = Estudante::find($id);
       // dd($request->nome); exit;

        $estudante->update([
            'nome'=>$request->nome,
            'cpf'=>$request->cpf,
            'nascimento'=>$request->nascimento
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
