<?php

namespace App\Http\Controllers;
use App\Models\Filial;
use Illuminate\Http\Request;

class FilialController extends Controller
{
    /**
     * Lista as Filiais.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filiais = Filial::get();
        return view('filiais.index', [
            'filiais' => $filiais
        ]);
    }

    /**
     * Mostra a view de criar novas filiais.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Cria novas filiais.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Mostra uma filial especifica.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $filial = Filial::find($id);
        return view('filiais.show', [
            'filial' => $filial
        ]);
    }

    /**
     * Mostra o formulário de editar uma determinada filial.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Realiza a edição dos dados de uma filial.
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
     * Remove uma filial.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
