@extends('layouts.app')
@section('content')

    <div class="container my-4">
        <div class="row">

            <div class="col-12 text-center">
                <h1>CONTROL CLASIFICACION</h1>
            </div>
            <div class="col-12">
                <a href="/" class="btn btn-primary mb-4">Agregar</a>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NUMERO</th>
                        <th>DESCRIPCION</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clasificaciones as $clasificacion)
                        <tr>
                            <td>{{ $clasificacion->id_clasificacion}}</td>
                            <td>{{ $clasificacion->numero_espesor }}</td>
                            <td>{{$clasificacion->dscripcion_clasificacion }}</td>
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
