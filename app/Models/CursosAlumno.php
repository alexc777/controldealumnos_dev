<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CursosAlumno extends Model
{

    /**
    * The database table used by the model.
    *
    * @var string
    */
      protected $table = 'cursos_alumno';

      /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
      protected $fillable = ['id_curso', 'id_alumno'];

      /**
      * The attributes excluded from the model's JSON form.
      *
      * @var array
      */
      protected $hidden = ['updated_at'];

      public function NombreCurso(){

        return $this->hasOne('\App\Models\Cursos','id','id_curso');
      }
}
