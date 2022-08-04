<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class TemporadaController extends Controller
{
    public function index(int $serieId)
    {
        $serie = Serie::find($serieId);
        $temporadas = $serie->temporadas;

        return view('temporadas.index', compact('serie', 'temporadas'));
    }
}
