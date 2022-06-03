<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BattleController extends Controller
{
    public function startBattle($poke1, $poke2)
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

        $pokemonsMerge = array_merge($firstPokemonAttack, $secondPokemonAttack);
        //dd($pokemonMerge);

        $battle = array_search(max($pokemonsMerge), $pokemonsMerge);
        //dd($battle);
        /*
        echo strtoupper($battle) . " - Venceu a batalha" . PHP_EOL;
        exit;*/

        Log::info("Batalha efetuada por $poke1 e $poke2",$pokemonsMerge);

        return response(
            $this->battle($poke1, $poke2, $pokemonsMerge)
        );
    }

    public function battle(string $poke1, string $poke2, $pokemons): array
    {
        if ($pokemons[$poke1] > $pokemons[$poke2]) {
            return $this->makeArrayWinner($poke1,);
        }

        if ($pokemons[$poke2] > $pokemons[$poke1]) {
            return $this->makeArrayWinner($poke2);
        }

        return $this->makeArrayDefault();
    }

    public function makeArrayWinner(string $pokemon)
    {
        return ["winner" => strtoupper($pokemon), "status" => "Venceu a batalha"];
    }

    public function makeArrayDefault()
    {
        return ["status" => "Aconteceu EMPATE entre os pokemons."];
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
}
