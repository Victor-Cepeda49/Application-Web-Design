<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'grupo_curso');
    }
}
