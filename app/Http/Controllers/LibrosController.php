<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index()
    {
        return Libros::all();
    }

    public function show(Libros $id)
    {
        return $id;
    }
}
