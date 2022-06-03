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

        $twoPokemon = $this->getDataPokemons($poke2);
        $twoPokemonAttack = $this->getAttack(
            $poke2,
            $twoPokemon["stats"]
        );

        $pokemonsMerge = array_merge($firstPokemonAttack, $twoPokemonAttack);
        $battle = array_search(max($pokemonsMerge), $pokemonsMerge);

        echo strtoupper($battle) . " - Venceu a batalha" . PHP_EOL;
        exit;
        return true;

        //dd($battle);
    }

    public function getDataPokemons(string $namePokemon) {
        $client = new \GuzzleHttp\Client();
        $pokemon = $client->request(
            'GET',
            'https://pokeapi.co/api/v2/pokemon/'. $namePokemon,
            ['verify'=>false]
        );

        return json_decode($pokemon->getBody()->getContents(), true);
    }

    public function getAttack(string $nomePokemon, array $stats): array {
        $recuperarValorAttack = 0;

        foreach ($stats as $key => $stat) {
            $recuperarValorAttack += $stat['base_stat'];
        }

        /* if ($nomePokemon == "pikachu") {
            $recuperarValorAttack -= 50;
        } */

        return ["$nomePokemon" => $recuperarValorAttack];
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
