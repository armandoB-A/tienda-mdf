<?php

namespace App\Http\Controllers;

use App\Models\Categorium;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    function getCategorias()
    {
        $categorias=Categorium::all();
        return view('panelAdmin.Categoriasl', ['categorias'=>$categorias]);
    }
}
