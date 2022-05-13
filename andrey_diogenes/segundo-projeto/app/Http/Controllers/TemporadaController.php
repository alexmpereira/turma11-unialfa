<?php

namespace App\Http\Controllers;
use App\Models\Serie;
use Illuminate\Http\Request;

class TemporadaController extends Controller
{
    /**
     * Lista as Temporadas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(int $serieId)
    {
        $serie = Serie::find($serieId);
        $temporadas = $serie->temporadas;

        return view(
            'temporadas.index',
            compact('serie', 'temporadas')
        );
    }

    /**
     * Mostra uma Temporada especifica.
     * 
     * @param  int  $id
     * @return View
     *//*
    public function show(int $id)
    {
        $temporada = Serie::find($id);
        return view('series.show', [
            'serie' => $temporada
        ]);
    }*/
}
