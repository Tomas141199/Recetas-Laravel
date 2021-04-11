<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    //
    public function index()
    {
        //Obtener las recetas mas nuevas

        $nuevas = Receta::latest()->take(5)->get();

        return view('inicio.index', compact('nuevas'));
    }
}