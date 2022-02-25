@extends('layouts.app')

@section('content')

<header class="page-header">
    <h2>Productos</h2>

</header>

    <div class="panel-body">

        <form action="/BODYTECH/carrito_compras/public/productos" method="POST" class="form-horizontal">

            {{ csrf_field() }}

            <!-- AGREGANDO PRODUCTO NUEVO    -->
         <div class="panel panel-default">
            <div class="form-group">
                <label for="Nombre" class="col-sm-3 control-label">Nombre</label>

                <div class="col-sm-6">
                    <input type="text" name="Nombre" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="Precio" class="col-sm-3 control-label">Precio</label>

                <div class="col-sm-6">
                    <input type="text" name="Precio" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="Caracteristicas" class="col-sm-3 control-label">Caracteristicas</label>

                <div class="col-sm-6">
                    <input type="text" name="Caracteristicas" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="Disponibles" class="col-sm-3 control-label">Cantidad</label>

                <div class="col-sm-6">
                    <input type="text" name="Disponibles" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 text-right pull-right">
                    <button type="submit" class="btn btn-primary">

                        <i class="fa fa-plus"></i> Agregar Producto

                    </button>
                </div>
            </div>
        </div>

        <!-- LISTAR PRODUCTOS DE BD  -->
    @if (count($prod) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Listado de Productos
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Columnas de la tabla -->
                    <thead>
                        <th>Productos</th>
                        <th>Acción</th>
                    </thead>

                    <!-- Contenido de la tabla -->
                    <tbody>
                        @foreach ($prod as $index)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $index->Nombre }}</div>
                                </td>

                                <td>
                                    <!-- TODO: Delete Button -->
                                    <form action="/BODYTECH/carrito_compras/public/productos/{{$prod->id}}" method="POST">

                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button>Delete Task</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
        </form>
    </div>

    <!-- TODO: Current producto -->
@endsection
