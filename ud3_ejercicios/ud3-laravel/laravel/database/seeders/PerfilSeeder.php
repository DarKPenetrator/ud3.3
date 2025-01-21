<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perfiles')->insert([
            [
                'usuario_id' => 1, // Asegúrate de que el alumno con ID 1 existe
                'biografia' => 'Alumno destacado en matemáticas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usuario_id' => 2, // Asegúrate de que el alumno con ID 2 existe
                'biografia' => 'Interesado en historia y ciencias.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
