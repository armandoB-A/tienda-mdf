<?php

namespace App\Http\Controllers;

use App\Models\Categorium;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //
    function getProductos()
    {
        $productos = \App\Models\Producto::where('status', '1')->get();

        //$categorias=Categorium::where('id_categoria', $productos->id_categoria)->get();
        return view('panelAdmin.ProductoList', ['productos' => $productos]);
    }
}
