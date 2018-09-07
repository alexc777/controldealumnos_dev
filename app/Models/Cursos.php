<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
  //  use SoftDeletes;
/**
* The database table used by the model.
*
* @var string
*/
protected $table = 'cursos';

      /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
      protected $fillable = ['nombre_curso', 'id_catedratico', 'id_tipo'];

      /**
      * The attributes excluded from the model's JSON form.
      *
      * @var array
      */
      protected $hidden = ['updated_at'];
}
