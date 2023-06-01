@extends('layouts.app')
@section('content')    <div class="row">
    <div class="col-12">
        <h1>Nueva venta <i class="fa fa-cart-plus"></i></h1>
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="/" method="post">
                    @csrf
                        <div class="form-group">
                            <button name="accion" value="terminar" type="submit" class="btn btn-success">Terminar
                                venta
                            </button>
                            <button name="accion" value="cancelar" type="submit" class="btn btn-danger">Cancelar
                                venta
                            </button>
                        </div>
                </form>
            </div>
            <div class="col-12 col-md-6">
                <form action="/" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="codigo">Producto</label>
                        <input id="codigo" autocomplete="off" required autofocus name="codigo" type="text"
                               class="form-control"
                               placeholder="Código de barras">
                    </div>
                </form>
            </div>
        </div>

            <h2>Total: $12</h2>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Código de barras</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Quitar</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <h2>Aquí aparecerán los productos de la venta
                <br>
                Escanea el código de barras o escribe y presiona Enter</h2>

    </div>
</div>
@endsection
