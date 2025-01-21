<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsignaturasTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('asignaturas')->insert([
            [
                'id' => 1,
                'nombre' => 'Matemáticas',
                'descripcion' => 'Cálculo y álgebra',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nombre' => 'Historia',
                'descripcion' => 'Historia Universal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'nombre' => 'Física',
                'descripcion' => 'Física teórica',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
