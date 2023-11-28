<?php

namespace Database\Seeders;

use App\Models\Finalidade;
use Illuminate\Database\Seeder;

class FinalidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Finalidade::create(['nome' => 'Reserva']);

       
    }
}
