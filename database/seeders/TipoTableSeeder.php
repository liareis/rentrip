<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Seeder;

class TipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tipo::create(['nome' => 'Apartamento']);
        Tipo::create(['nome' => 'Pousada']);
        Tipo::create(['nome' => 'Flat']);

    }
}