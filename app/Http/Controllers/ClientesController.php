<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
class ClientesController extends Controller
{
    public function index()
    {
        return Clientes::all();
    }

    public function show(Clientes $id)
    {
        return $id;
    }
}
