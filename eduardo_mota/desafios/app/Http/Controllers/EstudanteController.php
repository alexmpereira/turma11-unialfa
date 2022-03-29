<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    public function index()
    {
        $estudante = Estudante::get();

        return view('estudante.index', [
            'estudante' => $estudante
        ]);
        
    }

    //redirect view for create a new studant
    public function new()
    {
        return view('estudante/create.blade.php');
    }

    //create function

    public function create(Request $request)
    {
        $dados = $request->except('_token');
        Estudante::create($dados);
        return redirect('estudante');
    }


    //show studant
    public function show($id)
    {
        $estudante = Estudante::find($id);

        return view('estudante.show',[
            'estudante'=> $estudante
        ]);

    }

    //edit studant
    public function edit(int $id)
    {   
        
        $estudante = Estudante::find($id);

        return view('estudante.edit',[
            'estudante'=> $estudante
        ]);

    }


    //update function
    public function update(Request $request, $id)
    {
        $estudante = Estudante::find($id);

        $estudante->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'nascimento' => $request->nascimento
        ]);
        return redirect('/estudante');
    }

    //delete function

    public function delete(int $id)
    {
        $estudante = Estudante::find($id);
        $estudante->delete();
        return redirect('/estudante');
    }
}
