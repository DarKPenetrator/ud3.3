<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // IMPORTANTE: Asegúrate de incluir esta línea

class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notas')->insert([
            [
                'alumno_id' => 1, // Verifica que este ID exista en la tabla alumnos
                'asignatura_id' => 1, // Verifica que este ID exista en la tabla asignaturas
                'nota' => 8.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'alumno_id' => 2,
                'asignatura_id' => 2,
                'nota' => 7.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'alumno_id' => 3,
                'asignatura_id' => 3,
                'nota' => 9.2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
