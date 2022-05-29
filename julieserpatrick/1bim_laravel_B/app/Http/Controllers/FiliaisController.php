<?php

namespace App\Http\Controllers;

use App\Models\Filiais;
use Illuminate\Http\View;

class FiliaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $filiais = Filiais::get();

        return view(
            'filiais.index', ['filiais' => $filiais]
        );

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function show(int $id)
    {
        $filiais = Filiais::find($id);

        return view(
            'filiais.show', ['filiais' => $filiais]
        );
    }

}
