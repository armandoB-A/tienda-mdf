@extends('layouts.app')

@section('content')
    <div style="text-align: center; color: #51b5ec;">
        <h1>Bienvenido {{Auth::user()->name}}</h1>
    </div>
    <div id="componentesADmi">
        <div class="container">
            <div class="row">
                <div class='col-md-12 col-12 mb-4'>
                    <div class='card h-100'>
                        <a href="{{route('productosl')}}">
                            <div class='card-body'>
                                <h2 class='card-title'>Modificación de producto</h2>
                                <h4 class='card-text'>Creacion, Edicion y Eliminacion de categorias</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='col-md-12 col-12 mb-4'>
                    <div class='card h-100'>
                        <a href="{{route('clasificacionl')}}">
                            <div class='card-body'>
                                <h2 class='card-title'>Modificación de clasificaciones</h2>
                                <h4 class='card-text'>Creacion, Edicion y Eliminacion de clasificaciones</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='col-md-12 col-12 mb-4'>
                    <div class='card h-100'>
                        <a href="{{route('categoriasl')}}">
                            <div class='card-body'>
                                <h2 class='card-title'>Modificación de categorias</h2>
                                <h4 class='card-text'>Creacion, Edicion y Eliminacion de categorias</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='col-md-12 col-12 mb-4'>
                    <div class='card h-100'>
                        <a href="{{route('ventas')}}">
                            <div class='card-body'>
                                <h2 class='card-title'>VENTAS</h2>
                                <h4 class='card-text'>Realizacion de ventas para la tienda</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='col-md-12 col-12 mb-4'>
                    <div class='card h-100'>
                        <a href="/">
                            <div class='card-body'>
                                <h2 class='card-title'>Pedidos</h2>
                                <h4 class='card-text'>Realizacion de pedidos para la tienda</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
