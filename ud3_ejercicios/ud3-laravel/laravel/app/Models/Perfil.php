<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perfil extends Model
{
    //
    use HasFactory;

    // Especifica el nombre correcto de la tabla
    protected $table = 'perfiles';

    public function alumno()
{
    return $this->belongsTo(Alumno::class, 'usuario_id');
}
}
