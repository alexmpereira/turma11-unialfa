<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * Lista os Clientes
     *
     * @return View
     */
    public function index()
    {
        $clients = Client::get();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    /**
     * Mostra a view de criar novos clientes
     *
     * @return View
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Cria novo cliente.
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
     * Mostra um cliente especifico
     *
     * @param  int  $id
     * @return View
     */
    public function show(int $id)
    {
        //TODO buscar um único cliente
        $client = Client::find($id);

        return view('clients.show', [
            'client' => $client
        ]);
    }

    /**
     * Mostra o formulário de editar um determinado cliente.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(int $id)
    {
        //TODO consultar o cliente
        $client = Client::find($id);
        //TODO vamos enviar a pessoa para uma view
        return view('clients.edit', [
            'client' => $client
        ]);
    }

    /**
     * Realiza a edição dos dados de um cliente
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
     * Remove um cliente.
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
