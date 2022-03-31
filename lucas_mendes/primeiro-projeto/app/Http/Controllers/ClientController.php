<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    /**
     * lista os clientes
     *
     * @return view
     */
    public function index()
    {
        $clients = Client::get();
        return view('clients.index', [
            "clients" => $clients
        ]);
    }

    /**
     * mostra a view de criar novos clientes
     *
     * @return view
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * cria novo cliente
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        //TODO buscar um unico cliente
        $client = Client::find($id);

        return view('clients.show', [
            'client' => $client
        ]);
    }

    /**
     * mostra o formulario de editar um determinado cliente
     *
     * @param  int  $id
     * @return view
     */
    public function edit(int $id)
    {
        //TODO consltar o cliente
        $client = Client::find($id);
        //TODO vamos enviar uma pessoa para um view
        return view('clients.edit', [
            'client' => $client
        ]);
    }

    /**
     * realiza a edição dos dados do cliente
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
     * remove um cliente.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients');
    }
}
