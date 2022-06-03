<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BattleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($poke1, $poke2)
    {
        $firstPokemon = $this->getDataPokemons($poke1);
        $firstPokemonAttack = $this->getAttack(
            $poke1,
            $firstPokemon["stats"]
        );
        //dd($firstPokemonAttack);

        $secondPokemon = $this->getDataPokemons($poke2);
        $secondPokemonAttack = $this->getAttack(
            $poke2,
            $secondPokemon["stats"]
        );
        //dd($secondPokemonAttack);

        //dd($firstPokemon, $secondPokemon);

        $pokemonMerge = array_merge($firstPokemonAttack, $secondPokemonAttack);
        //dd($pokemonMerge);

        $battle = array_search(max($pokemonMerge), $pokemonMerge);
        //dd($battle);

        echo strtoupper($battle) . " - Venceu a batalha" . PHP_EOL;
        exit;
        return true;
    }

    public function getDataPokemons(string $nomePokemon)
    {
        $client = new \GuzzleHttp\Client();
        $firstPokemon = $client->request(
            'GET',
            'https://pokeapi.co/api/v2/pokemon/' . $nomePokemon,
            ['verify'=>false]
        );

        return json_decode($firstPokemon->getBody()->getContents(), true);
    }

    public function getAttack(string $nomePokemon, array $stats): array 
    {
        $recuperaValorAttack = 0;
        foreach($stats as $key => $value) {
            $recuperaValorAttack += $value["base_stat"];
        }
        /*
        if ($nomePokemon == "pikachu") {
            $recuperaValorAttack -= 50;
            //dd($recuperaValorAttack);
        }
        */
        return ["$nomePokemon" => $recuperaValorAttack];
    }
    /**
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
    }
}
