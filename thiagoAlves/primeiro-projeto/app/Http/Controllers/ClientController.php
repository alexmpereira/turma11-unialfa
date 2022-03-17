<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){

        //TODO buscar clients no banco
        $clients = Client::get();

        //TODO verificar se veio vazio

        //TODO validar se cpnj_cpf é válido
        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    public function destroy($id) {
        return Client::deleteClient($id);
    }

    public function show(int $id){
        //TODO buscar um único cliente
        $client = Client::find($id);

        return view('clients.show', [
            'client' => $client
        ]);
    }

}
