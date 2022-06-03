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
        $firstPoke = $this->getDataPoke($poke1);
        $firstPokeAttack = $this->getAttack($poke1, $firstPoke['stats']);

        $secondPoke = $this->getDataPoke($poke2);
        $secondPokeAttack = $this->getAttack($poke2, $secondPoke['stats']);
        $pokeMerge = array_merge($secondPokeAttack, $firstPokeAttack);
        $battle = array_search(max($pokeMerge), $pokeMerge);

        echo strtoupper($battle) . ' Ganhou a Batalha';
    }

public function getAttack(string $nomePoke, array $stats)
{
    $baseStatsSum = 0;

    foreach ($stats as $key => $stat) {
        $baseStatsSum += $stat['base_stat'];
    }

    return[$nomePoke => $baseStatsSum];
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
