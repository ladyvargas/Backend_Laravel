<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    use HasFactory;
    protected $table = 'Libros';
    protected $fillable = ['Titulo', 'NombreAutor', 'Categoria'];
    protected $hidden = ['id'];

    public function obtenerLibros()
    {
        return Libros::all();
    }

    public function obtenerLibrosPorId($id)
    {
        return Libros::find($id);
    }
}
