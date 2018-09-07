<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
        //  use SoftDeletes;
      /**
      * The database table used by the model.
      *
      * @var string
      */
      protected $table = 'alumnos';

      /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
      protected $fillable = [
        'nombre', 'apellido', 'fecha_nacimiento', 'grado_alumno', 'tipo_sexo', 'lugar_nacimiento', 'nacionalidad', 'estado_civil', 'estado', 'telefono', 'email', 'fecha_ingreso','contrasena'];

      /**
      * The attributes excluded from the model's JSON form.
      *
      * @var array
      */
      protected $hidden = ['updated_at'];
}
