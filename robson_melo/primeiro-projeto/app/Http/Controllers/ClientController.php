<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Lista os clientes
     *
     * @return View
     */
    public function index()
    {
        //TODO Buscar clientes no banco
        $clients = Client::get();

        //TODO Verificar se veio vazio

        //TODO Validar se CNPJ_CPF é válido
        return view('clients.index', [
            'clients'=> $clients
        ]);
    }

    /**
     * Mostra a view de criar novos clientes com formulário.
     *
     * @return View
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Cria um novo cliente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {

        $dados = $request->except('_token');
        Client::create($dados);
        //exit;
        return redirect('clients');
    }

    /**
     * Mostra um cliente especifico.
     *
     * @param  int  $id
     * @return View
     */
    public function show(int $id)
    {
        //TODO buscar um unico cliente
        $client = Client::find($id);

        return view('clients.show', [
            'client' =>$client
        ]);
    }

    /**
     * Mostra um formulario de editar um determinado cliente.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(int $id)
    {
        //TODO consultar o client pelo id
        $client = Client::find($id);
        //TODO vamos enviar a pessoa para uma view
        return view('clients.edit', [
            'client' => $client
        ]);
    }

    /**
     * Realiza a edição dos dados de um cliente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //dd($request->nome);exit;
        $client = Client::find($id);
       // dd($request->nome); exit;

        $client->update([
            'nome'=>$request->nome,
            'endereco'=>$request->endereco,
            'observacao'=>$request->observacao
        ]);

        return redirect('/clients');
    }

    /**
     * Remove um client.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients');
    }
}
