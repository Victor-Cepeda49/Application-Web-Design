<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrupoCurso extends Model
{
    use HasFactory;
    protected $table = 'grupo_curso';

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
