@extends('layouts.app')
@section('content')

    <div class="container my-4">
        <div class="row">

            <div class="col-12 text-center">
                <h1>CONTROL PRODUCTOS</h1>
            </div>
            <div class="col-12">
                <a href="/" class="btn btn-primary mb-4">Agregar</a>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Existencia</th>
                        <th>Stock Mínimo</th>
                        <th>Stock Máximo</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($productos as $producto)
                        <tr>
                            <td>{{ $producto->id_producto}}</td>
                            <td>{{ $producto->nombre_producto }}</td>
                            <td>{{ $producto->precio_venta }}</td>
                            <td>{{ $producto->existencias }}</td>
                            <td>{{ $producto->stock_minimo }}</td>
                            <td>{{ $producto->stock_maximo }}</td>
                            <td></td>
                            <td>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
