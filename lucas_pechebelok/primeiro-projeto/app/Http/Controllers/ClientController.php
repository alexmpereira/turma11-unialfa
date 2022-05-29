<?php

namespace App\Http\Controllers;

use App\Models\Client;
<<<<<<< HEAD
use Illuminate\Http\Request;
=======
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f

class ClientController extends Controller
{
    /**
<<<<<<< HEAD
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
=======
     * Lista os Clientes
     *
     * @return View
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
     */
    public function index()
    {
        $clients = Client::get();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    /**
<<<<<<< HEAD
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
=======
     * Mostra a view de criar novos clientes
     *
     * @return View
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
<<<<<<< HEAD
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(('_token'));
        Client::create($data);

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
=======
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
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
        $client = Client::find($id);

        return view('clients.show', [
            'client' => $client
        ]);
    }

    /**
<<<<<<< HEAD
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
=======
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
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
    }
}
