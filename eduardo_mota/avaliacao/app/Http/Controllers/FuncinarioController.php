<?php

namespace App\Http\Controllers;


use App\Models\Funcionario;
use Illuminate\Http\View;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $funcionarios = Funcionario::get();
        return view('funcionarios.index', compact('funcionarios'));

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function show(int $id)
    {
        $funcionario = Funcionario::find($id);
        return view('funcionarios.show',[
            'funcionario' => $funcionario
        ]);
    }

}
