<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return view
     */
    public function index()
    {
        $clients = Client::get();
        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return View
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
     * @return View
     */
    public function show(int $id)
    {
        $client = Client::find($id);
        return view('clients.show', [
            'client' => $client
        ]);
    }

    /**
     * Mostrar determinado cliente
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id)
    {

        $client = Client::find($id);

        //TODO vamos enviar a pessoa para uma view
        return view('clients.edit', [
            'client' => $client
        ]);
    }

    /**
     * Realiza a edicao de dados do cliente
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return redirect
     */
    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $client->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao,
        ]);

        return redirect('/clients');
    }

    /**
     * Remove um cliente
     *
     * @param  int  $id
     * @return redirect
     */
    public function destroy($id)
    {
        $client = Client::find($id);

        $client->delete();

        return redirect('/clients');
    }
}
