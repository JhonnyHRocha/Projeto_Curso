<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DA UM TRUNCATE NA TABELA ANTES DE INSERIR 10 NOVOS REGISTROS ALEATORIOS
        \ProjetoCurso\Models\Client::truncate();
        factory(\ProjetoCurso\Models\Client::class, 10)->create();
    }
}
