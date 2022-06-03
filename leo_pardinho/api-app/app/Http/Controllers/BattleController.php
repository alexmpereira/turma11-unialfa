<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BattleController extends Controller
{
 
    public function startBattle($poke1, $poke2)
    {
        $firstPokemon = $this->getDataPokemons(($poke1));
        $firstPokemonAttack = $this->getAttack( $poke1, $firstPokemon['stats']);

        $secondPokemon = $this->getDataPokemons(($poke2));
        $secondPokemonAttack = $this->getAttack( $poke2, $secondPokemon['stats']);

        $pokemonsMerge = array_merge($firstPokemonAttack, $secondPokemonAttack);

        Log::info(
            "Batalha efetuada por $poke1 e $poke2",$pokemonsMerge
        );

        return response(
            $this->battle($poke1, $poke2, $pokemonsMerge, 200)
        );
    }

    public function battle(string $poke1,string $poke2, $pokemons): array {

        if ($pokemons[$poke1] > $pokemons[$poke2]) {
            return $this->makeArrayWinner($poke1);
        }

        if ($pokemons[$poke2] > $pokemons[$poke1]) {
            return $this->makeArrayWinner($poke2);
        }

        Log::error("Aconteceu um empate entre $poke1 e $poke2");

        return $this->makeArrayDefault();
    }

    public function makeArrayWinner(string $pokemon) {
        return ["winner" => strtoupper($pokemon), " status" => "Venceu a batalha!"];
    }
    public function makeArrayDefault() {
        return ["status" => "Aconteceu um empate entre os pokemons!"];
    }

    public function getDataPokemons(string $namePokemon) {

        $client = new \GuzzleHttp\Client();
        $firstPokemon = $client->request(
            'GET',
            'https://pokeapi.co/api/v2/pokemon/'.$namePokemon,
            ['verify'=>false]
        );

        return json_decode($firstPokemon->getBody()->getContents(), true);
    }

    public function getAttack(string $nomePokemon, array $stats): array {
        
        $recuperaValorAttack = 0;
        foreach($stats as $key => $value) {
            $recuperaValorAttack += $value['base_stat'];
        }

        return ["$nomePokemon" => $recuperaValorAttack];
    }

}