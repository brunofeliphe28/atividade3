<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cadastro;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cadastro::create([
            'nome' => 'Fulano de Ciclano e Silva',
            'cpf' =>   '08645312654',
            'cep' =>   '39280000',
        ]);

    }
}
