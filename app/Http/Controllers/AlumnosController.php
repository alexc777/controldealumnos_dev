<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Alumnos;


class AlumnosController extends Controller
{


    public function indexalumnos(){
      $alumnos = Alumnos::orderBy('id', 'desc')->get();

      if (!$alumnos) {
        return response()->json(['mensaje' =>  'No se encontraron registros','codigo'=>404],404);
      }
      return response()->json(['datos' =>  $alumnos],200);

    }

    public function store(Request $request){

      $nombre = $request['nombre'];
      $apellido = $request['apellido'];
      // $fecha_nacimiento = $request['fecha_nacimiento'];
      $grado_alumno = $request['grado_alumno'];
      $tipo_sexo = $request['tipo_sexo'];
      $lugar_nacimiento = $request['lugar_nacimiento'];
      $nacionalidad = $request['nacionalidad'];
      $estado_civil = $request['estado_civil'];
      $estado = $request['estado'];
      $telefono = $request['telefono'];
      $email = $request['email'];
      // $fecha_ingreso = $request['fecha_ingreso'];
      $contrasena = $request['contrasena'];

      $alumnos=Alumnos::create([
        'nombre' => $nombre,
        'apellido' => $apellido,
        // 'fecha_nacimiento' => $fecha_nacimiento,
        'grado_alumno' => $grado_alumno,
        'tipo_sexo' => $tipo_sexo,
        'lugar_nacimiento' => $lugar_nacimiento,
        'nacionalidad' => $nacionalidad,
        'estado_civil' => $estado_civil,
        'estado' => $estado,
        'telefono' => $telefono,
        'email' => $email,
        // 'fecha_ingreso' =>  $fecha_ingreso,
        'contrasena' => $contrasena
      ]);

      $alumnos->save();

    }


    public function update(Request $request, $id){

      $alumnos=Alumnos::find($id);

      $nombre = $request['nombre'];
      $apellido = $request['apellido'];
      // $fecha_nacimiento = $request['fecha_nacimiento'];
      $grado_alumno = $request['grado_alumno'];
      $tipo_sexo = $request['tipo_sexo'];
      $lugar_nacimiento = $request['lugar_nacimiento'];
      $nacionalidad = $request['nacionalidad'];
      $estado_civil = $request['estado_civil'];
      $estado = $request['estado'];
      $telefono = $request['telefono'];
      $email = $request['email'];
      // $fecha_ingreso = $request['fecha_ingreso'];
      $contrasena = $request['contrasena'];


      $alumnos->fill([
        'nombre' => $nombre,
        'apellido' => $apellido,
        // 'fecha_nacimiento' => $fecha_nacimiento,
        'grado_alumno' => $grado_alumno,
        'tipo_sexo' => $tipo_sexo,
        'lugar_nacimiento' => $lugar_nacimiento,
        'nacionalidad' => $nacionalidad,
        'estado_civil' => $estado_civil,
        'estado' => $estado,
        'telefono' => $telefono,
        'email' => $email,
        // 'fecha_ingreso' =>  $fecha_ingreso,
        'contrasena' => $contrasena
      ]);
      $alumnos->save();
    }


    public function destroy($id){
        Alumnos::destroy($id);
    }

}
