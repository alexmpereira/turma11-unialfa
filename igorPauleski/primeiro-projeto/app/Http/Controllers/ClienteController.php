<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Listar os Clientes
     *
     * @return view
     */
    public function index()
    {
        $clients = Client::get();
        //dd($clients);
        //exit;

        return view('clients.index', [
            'clients' =>$clients
        ]);
    }

    /**
     * Mostrar a view de criar novos clientes
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Criar novo Cliente
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');

        Client::create($dados);

        return redirect('/clients');
    }

    /**
     * Mostrar um cliente expecifico
     *
     * @param  int  $id
     * @return view
     */
    public function show($id)
    {
        //TODO busar um único cliente
        $client = Client::find($id);

        return view('clients.show', [
            'client' => $client
        ]);
    }

    /**
     * Mostrar o formulario de editar um determinado cliente
     *
     * @param  int  $id
     * @return view
     */
    public function edit(int $id)
    {
        //TODO consultar o cliente
        $client = Client::find($id);
        //TODO vamos enviar a pessoa para um aview
        return view('clients.edit', [
            'client' => $client
        ]);
    }

    /**
     * Realiza a edição dos dados do cliente
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $client->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao
        ]);
        return redirect('/clients');
    }

    /**
     * Remover o cliente
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
