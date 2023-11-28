<?php

namespace Database\Seeders;

use App\Models\Proximidade;
use Illuminate\Database\Seeder;

class ProximidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proximidade::create(['nome' => 'Ponto turístico']);
        Proximidade::create(['nome' => 'Academia']);
        Proximidade::create(['nome' => 'Posto policial']);
        Proximidade::create(['nome' => 'Restaurante']);
        Proximidade::create(['nome' => 'Shopping']);
        Proximidade::create(['nome' => 'Hospital']);
        Proximidade::create(['nome' => 'Supermercado']);
        Proximidade::create(['nome' => 'Parque']);
        Proximidade::create(['nome' => 'Padaria']);
        Proximidade::create(['nome' => 'Farmácia']);
    }
}
