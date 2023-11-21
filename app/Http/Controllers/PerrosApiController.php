<?php

namespace App\Http\Controllers;

use App\Models\Perros;
use Illuminate\Http\Request;

class PerrosApiController extends Controller
{
    public function obtenerPerroAleatorio()
    {
        $perro = Perros::inRandomOrder()->first();
        return response()->json($perro);
    }
}
