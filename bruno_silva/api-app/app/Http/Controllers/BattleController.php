<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BattleController extends Controller
{
    public function startBattle($poke1, $poke2)
    {
        $firstPoke = $this->getDataPoke($poke1);
        $firstPokeAttack = $this->getAttack($poke1, $firstPoke['stats']);

        $secondPoke = $this->getDataPoke($poke2);
        $secondPokeAttack = $this->getAttack($poke2, $secondPoke['stats']);
        $pokeMerge = array_merge($secondPokeAttack, $firstPokeAttack);

        Log::info('Batalha Efetuada entre $poke1 e $poke2', $pokeMerge);
        return Response(
            $this->battle($poke1, $poke2, $pokeMerge)
        );
    }


    public function battle(string $poke1, string $poke2, $pokes)
    {
        if ($pokes[$poke1] > $pokes[$poke2]) {
            return $this->makeArrayWinner($poke1);
        }


        if ($pokes[$poke2] > $pokes[$poke1]) {
            return $this->makeArrayWinner($poke2);
        }

        Log::error('Ocorreu um empate', $pokes);


        return $this->makeArrayDefault();
    }

    public function makeArrayWinner(string $pokemon)
    {
        return [
            'winner' => strtoupper($pokemon) . ' Ganhou a Batalha'
        ];
    }

    public function makeArrayDefault()
    {
        return ['status' => 'Ocorreu um empate'];
    }

    public function getAttack(string $nomePoke, array $stats)
    {
        $baseStatsSum = 0;

        foreach ($stats as $key => $stat) {
            $baseStatsSum += $stat['base_stat'];
        }

        return [$nomePoke => $baseStatsSum];
    }


    public function getDataPoke(string $nomePoke)
    {
        $client = new \GuzzleHttp\Client();
        $firstPoke = $client->request(
            'GET',
            'https://pokeapi.co/api/v2/pokemon/' . $nomePoke,
            [
                'verify' => false,
            ]
        );
        return json_decode($firstPoke->getBody(), true);
    }
}
