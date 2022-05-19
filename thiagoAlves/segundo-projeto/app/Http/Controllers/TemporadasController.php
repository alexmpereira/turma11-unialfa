<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class TemporadasController extends Controller
{
    public function index(int $serieId)
    {
        $serie = Serie::find($serieId);
        $temporadas = $serie->temporadas;
        return view('temporadas.index', compact('serie','temporadas'));
    }
}
