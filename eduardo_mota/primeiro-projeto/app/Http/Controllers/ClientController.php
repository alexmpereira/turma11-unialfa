<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * show view of create new client.
     *
     * @return View
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * create a new client.
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
     * Display the specified resource as only client.
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
     * Show the form for editing the specified client.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(int $id)
    {   
        //TODO consultar o cliente
        $client = Client::find($id);
        //TODO vamos enviar a pessoa para uma view
        return view('clients.edit',[
            'client'=> $client
        ]);

    }

    /**
     * Update the specified client in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Redirect
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
     * Remove the specified client from storage.
     *
     * @param  int  $id
     * @return Redirect
     */
    public function destroy(int $id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients');
    }
}
