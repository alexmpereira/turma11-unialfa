<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'nome' => 'Seeders',
            'endereo' => 'Rua teste Umuarama',
            'observacao' => 'teste']);

        DB::table('clients')->insert([
            'nome' => 'Seeders 2',
            'endereo' => 'Rua teste Umuarama 2',
            'observacao' => 'teste outro']);

    }
}
