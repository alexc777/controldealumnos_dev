<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Catedraticos;
use App\Models\NotasCursoAlumno;

class CatedraticosController extends Controller
{

  public function indexcatedraticos(){
    $catedraticos = Catedraticos::orderBy('id', 'desc')->get();

    if (!$catedraticos) {
      return response()->json(['mensaje' =>  'No se encontraron registros','codigo'=>404],404);
    }
    return response()->json(['datos' =>  $catedraticos],200);

  }

  public function store(Request $request){

    $nombre = $request['nombre'];
    $apellido = $request['apellido'];
    // $fecha_nacimiento = $request['fecha_nacimiento'];
    $telefono = $request['telefono'];
    $email = $request['email'];
    $contrasena = $request['contrasena'];

    $alumnos=Catedraticos::create([
      'nombre' => $nombre,
      'apellido' => $apellido,
      // 'fecha_nacimiento' => $fecha_nacimiento,
      'telefono' => $telefono,
      'email' => $email,
      'contrasena' => $contrasena
    ]);

    $alumnos->save();

  }

  public function storenotas(Request $request){

    $id_alumno = $request['id_alumno'];
    $id_curso = $request['id_curso'];
    $nota = $request['nota'];
    $id_catedratico = $request['id_catedratico'];


    $notasalum=NotasCursoAlumno::create([
      'id_alumno' => $id_alumno,
      'id_curso' => $id_curso,
      'nota' => $nota,
      'id_catedratico' => $id_catedratico,
    ]);

    $notasalum->save();

  }


  public function update(Request $request, $id){

    $catedraticos=Catedraticos::find($id);

    $nombre = $request['nombre'];
    $apellido = $request['apellido'];
    // $fecha_nacimiento = $request['fecha_nacimiento'];
    $telefono = $request['telefono'];
    $email = $request['email'];
    $contrasena = $request['contrasena'];

    $catedraticos->fill([
      'nombre' => $nombre,
      'apellido' => $apellido,
      // 'fecha_nacimiento' => $fecha_nacimiento,
      'telefono' => $telefono,
      'email' => $email,
      'contrasena' => $contrasena
    ]);

    $catedraticos->save();
  }


  public function destroy($id){
      Catedraticos::destroy($id);
  }
}
