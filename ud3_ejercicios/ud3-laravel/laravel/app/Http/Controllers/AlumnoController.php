<?php
namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    // Retorna todos los alumnos
    public function index()
    {
        return response()->json(Alumno::all());
    }

    // Muestra un alumno específico por su id
    public function show($id)
    {
        return response()->json(Alumno::findOrFail($id));
    }

    // Crea un nuevo alumno
    public function store(Request $request)
    {
        return response()->json(Alumno::create($request->all()));
    }

    // Actualiza un alumno existente
    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->update($request->all());
        return response()->json($alumno);
    }

    // Elimina un alumno
    public function destroy($id)
    {
        Alumno::findOrFail($id)->delete();
        return response()->json(['message' => 'Alumno eliminado']);
    }
    public function testEjer1($id)
    {
        $alumno = Alumno::findOrFail($id); // Elimina el "new"
        $notas = $alumno->notas; // Obtén las notas asociadas a través de la relación
    
        return response()->json([
            'alumno' => $alumno,
            'notas' => $notas,
        ]);
    }

    public function getPosts($id)
{
    $alumno = Alumno::findOrFail($id);
    $posts = $alumno->posts;

    return response()->json([
        'alumno' => $alumno,
        'posts' => $posts,
    ]);
}


public function getPerfil($id)
{
    $alumno = Alumno::findOrFail($id);
    $perfil = $alumno->perfil;

    return response()->json([
        'alumno' => $alumno,
        'perfil' => $perfil,
    ]);
}

    
}
