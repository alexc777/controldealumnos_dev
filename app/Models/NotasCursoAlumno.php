<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotasCursoAlumno extends Model
{

      /**
      * The database table used by the model.
      *
      * @var string
      */
        protected $table = 'notas_cursos_alumno';

        /**
        * The attributes that are mass assignable.
        *
        * @var array
        */
        protected $fillable = ['id_alumno', 'id_curso', 'nota', 'id_catedratico'];

        /**
        * The attributes excluded from the model's JSON form.
        *
        * @var array
        */
        protected $hidden = ['updated_at'];
}
