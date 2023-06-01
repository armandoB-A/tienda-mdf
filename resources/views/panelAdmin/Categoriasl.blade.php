@extends('layouts.app')
@section('content')

    <div class="container my-4">
        <div class="row">

            <div class="col-12 text-center">
                <h1>CONTROL CATEGORIAS</h1>
            </div>
            <div class="col-12">
                <a href="/" class="btn btn-primary mb-4">Agregar</a>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id_categoria}}</td>
                            <td>{{ $categoria->nombre_categoria}}</td>
                            <td>{{ $categoria->descripcion_categoria }}</td>
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
