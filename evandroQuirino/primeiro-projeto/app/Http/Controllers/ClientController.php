<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
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
        return view('clients.index',[
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

        return redirect( '/clients' );
    }

    /**
     * Mostra um cliete especifico.
     *
     * @param  int  $id
     * @return View
     */
    public function show(int $id)
    {
       //TODO buscar um unico cliente.
       $client = Client::find($id);
       
       return view('clients.show', [
            'client' => $client
       ]);
    }

    /**
     * Mostra formulario de edicao de determinado cliente.
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id)
    {
        //TODO consultar o cliente
        $client = Client::find($id);
        //TODO vamos enviar a pessoa para uma view
        return view('clients.edit', [
            'client' => $client
        ]);
        
    }

    /**
     * Realiza a edicao dos dados de um cliente.
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
     * REmove um cliente.
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
