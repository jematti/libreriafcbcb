<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_repositorio',
        'sigla',
        'ciudad',
        'correo',
        'ubicacion',
        'horario_atencion',
        'telefono',
        'pagina_web'
    ];

    // relacion 1 a n una Categoria puede tener varios libro
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
