<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Cursos;
use App\Models\CursosAlumno;
use App\Models\NotasCursoAlumno;

class CursosController extends Controller
{

  public function indexcursos(){
    $cursos = Cursos::orderBy('id', 'desc')->get();

    if (!$cursos) {
      return response()->json(['mensaje' =>  'No se encontraron registros','codigo'=>404],404);
    }
    return response()->json(['datos' =>  $cursos],200);

  }

  public function indexcursosalumnoap($id){

    $cursos = NotasCursoAlumno::where('id_alumno', $id)->with("NombreCurso", "NombreCatedratico")->orderBy('id', 'desc')->get();

    if (!$cursos) {
      return response()->json(['mensaje' =>  'No se encontraron registros','codigo'=>404],404);
    }
    return response()->json(['datos' =>  $cursos],200);

  }

  public function store(Request $request){

    $nombre_curso = $request['nombre_curso'];
    $id_catedratico = $request['id_catedratico'];
    $id_tipo = $request['id_tipo'];

    $alumnos=Cursos::create([
      'nombre_curso' => $nombre_curso,
      'id_catedratico' => $id_catedratico,
      'id_tipo' => $id_tipo,
    ]);

    $alumnos->save();
  }

  public function update(Request $request, $id){

    $cursos=Cursos::find($id);

    $nombre_curso = $request['nombre_curso'];
    $id_catedratico = $request['id_catedratico'];
    $id_tipo = $request['id_tipo'];

    $cursos->fill([
      'nombre_curso' => $nombre_curso,
      'id_catedratico' => $id_catedratico,
      'id_tipo' => $id_tipo,
    ]);

    $cursos->save();
  }

  public function indexcursosalumno($id){

    $cursos = CursosAlumno::where('id_alumno', $id)->orderBy('id', 'desc')->with("NombreCurso")->get();

    if (!$cursos) {
      return response()->json(['mensaje' =>  'No se encontraron registros','codigo'=>404],404);
    }
    return response()->json(['datos' =>  $cursos],200);
  }

  public function asignarcurso(Request $request){

    $id_alumno = $request['id_alumno'];
    $id_curso = $request['id_curso'];

    $cursosalumno=CursosAlumno::create([
      'id_alumno' => $id_alumno,
      'id_curso' => $id_curso,
    ]);

    $cursosalumno->save();
  }


  public function destroy($id){
      Cursos::destroy($id);
  }
}
