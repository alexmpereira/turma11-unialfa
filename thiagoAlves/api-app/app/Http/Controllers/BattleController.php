<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BattleController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function startBattle($poke1, $poke2)
    {

        $firstPokemon = $this->getDataPokemon($poke1);
        $firstPokemonAttack = $this->getAttack($poke1,
            $firstPokemon['stats']);

        $secondPokemon = $this->getDataPokemon($poke2);
        $secondPokemonAttack = $this->getAttack($poke2,
            $secondPokemon['stats']);

            $pokemonsMerge = array_merge($firstPokemon, $secondPokemon);

            Log::info("Batalha entre {$poke1} e {$poke2}", $pokemonsMerge);

        return response(
            $this->battle($poke1, $poke2, $pokemonsMerge),
            200
        );
     }

    public function battle(string $poke1, string $poke2, array $pokemons):array{

        if($pokemons[$poke1] > $pokemons[$poke2]){
           return $this->makeArrayWinner($poke1);
        }

        if($pokemons[$poke1] < $pokemons[$poke2]){
            return $this->makeArrayWinner($poke1);

        }

        Log::error("Empate entre {$poke1} e {$poke2}");
        return $this->makeArrayDefault();

    }

    public function makeArrayDefault(){
        return [
            'status' => "Aconteceu Empate entre os pokemons."
        ];
    }

    public function makeArrayWinner(string $pokemon){
        return [
            'winner' => strtoupper($pokemon),
            'status' => "Venceu a Batalha"
        ];
    }

    public function getDataPokemon(string $namePokemon) {
        $client = new \GuzzleHttp\Client();
        $namePokemon = $client->request('GET', 'https://pokeapi.co/api/v2/pokemon/'.$namePokemon.'/');
        return json_decode($namePokemon->getBody()->getContents() , true);
    }

    public function getAttack(string $nomePokemon, array $stats):array{

        $recuperaValorAttack = 0;
        foreach ($stats as $key => $value) {
            $recuperaValorAttack += $value['base_stat'];
        }

        return ["$nomePokemon" => $recuperaValorAttack];

    }
}
