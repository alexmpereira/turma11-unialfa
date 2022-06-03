<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Utils\Json;

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
        $firstPokemon = $this->getDataPokemom($poke1);
        $firstPokemonAttack = $this->getAttack($poke1, $firstPokemon["stats"]);
       

        $secondPokemon = $this->getDataPokemom($poke2);
        $secondPokemomAttack = $this->getAttack($poke2 , $secondPokemon["stats"]);

        $pokemonsMerge = array_merge($firstPokemonAttack, $secondPokemomAttack);

        $batle = array_search(max($pokemonsMerge), $pokemonsMerge);

        echo strtoupper($batle) . "- Venceu a batalha e matou o !"  .PHP_EOL ;

      
    }


    public function getAttack(string $nomePokemom , array $stats)
    {
        $recuperaValorAttack = 0 ;
        foreach ($stats as $key => $value) {
            $recuperaValorAttack += $value['base_stat'];
        }
        
        return ["$nomePokemom" => $recuperaValorAttack];
    }

    public function getDataPokemom(string $nomePokemom)
    {
        $client = new \GuzzleHttp\Client();
        $firstPokemon = $client->request(
         'GET',
         'https://pokeapi.co/api/v2/pokemon/' . $nomePokemom,
         ['verify'=>false]
        );
 
        return json_decode($firstPokemon->getBody()->getContents(), true);
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
