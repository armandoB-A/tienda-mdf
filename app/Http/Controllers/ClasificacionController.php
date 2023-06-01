<?php

namespace App\Http\Controllers;

use App\Models\Clasificacion;
use Illuminate\Http\Request;

class ClasificacionController extends Controller
{
    function getClasificacion()
    {
        $clasificaciones=Clasificacion::all();
        return view('panelAdmin.ClasificacionList', ['clasificaciones'=>$clasificaciones]);
    }
}
