@extends('base');

@section('contenido')
<a href="productos" class="btn btn-primary">AGREGAR</a>
<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Codigo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach($productos as $producto)
    <tr>
        <td>{{$producto->id}}</td>
        <td>{{$producto->codigo}}</td>
        <td>{{$producto->nombre}}</td>
        <td>{{$producto->precio}}</td>
        <td>
            <a class="btn btn-info">Editar</a>
            <button class="btn btn-danger">Eliminar</button>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection