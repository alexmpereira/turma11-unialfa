<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Nette\Utils\Json;

class BattleController extends Controller
{
    
    public function startBattle($poke1, $poke2)
    {
        $firstPokemon = $this->getDataPokemom($poke1);
        $firstPokemonAttack = $this->getAttack($poke1, $firstPokemon["stats"]);
       

        $secondPokemon = $this->getDataPokemom($poke2);
        $secondPokemomAttack = $this->getAttack($poke2 , $secondPokemon["stats"]);

        $pokemonsMerge = array_merge($firstPokemonAttack, $secondPokemomAttack);

        $batle = array_search(max($pokemonsMerge), $pokemonsMerge);

        Log::info("batalha efetuado por $poke2 e $poke2 ");

        return response(
            $this->battle($poke1, $poke2, $pokemonsMerge), 200
        );

      

      
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


    public function battle(string $poke1, string $poke2, $pokemons):array
    {
        if ($pokemons[$poke1] > $pokemons[$poke2]) {
           return $this->makeArrayWinner($poke1, $poke2);
        }

        if ($pokemons[$poke2] > $pokemons[$poke1]) {
           return $this->makeArrayWinner($poke2, $poke1);
        }
        return $this->makeArrayDefault();
       
    }

    public function makeArrayWinner(string $pokemon ,string $loser)
    {
        return["winner"=> strtoupper($pokemon), "status"=> "Venceu a batalha matando o lixo do ".strtoupper($loser)];
    }

    public function makeArrayDefault()
    {
        return ["status"=> "Arregaram"];
    }


   
}
