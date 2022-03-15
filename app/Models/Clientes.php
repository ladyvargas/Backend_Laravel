<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $table = 'Clientes';
    protected $fillable = ['nombre', 'apellido', 'direccion', 'correo'];
    protected $hidden = ['id'];

    public function obtenerClientes()
    {
        return Clientes::all();
    }

    public function obtenerClientePorId($id)
    {
        return Clientes::find($id);
    }
}
