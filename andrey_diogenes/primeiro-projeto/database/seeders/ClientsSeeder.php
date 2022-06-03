<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            [
                "nome" => "Turma Seeders",
                "endereco" => "dsghrshnr",
                "observacao" => "testando"
            ],
            [
                "nome" => "Turma Seeders 2",
                "endereco" => "iluiyryrthj",
                "observacao" => "testando 2"
            ]
        ]);
    }
}
