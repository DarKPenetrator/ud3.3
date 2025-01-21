<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'usuario_id' => 1, // ID de un alumno existente
                'titulo' => 'Mi primer post',
                'contenido' => 'Contenido de ejemplo para mi primer post.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usuario_id' => 2, // ID de otro alumno
                'titulo' => 'Explorando Laravel',
                'contenido' => 'Este post trata sobre mi experiencia aprendiendo Laravel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
