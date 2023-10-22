@extends('layouts/plantilla')
@section("tituloPagina","Crear un Registro")
@section('contenido')
<br><br><br><br><br><br><br><br><br>
<style>
    body {
        background-image: url('{{ asset("img/fondo.jpg") }}');
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
    <div class="card">
    
    <h5 class="card-header">Eliminar medicamento</h5>
    <div class="card-body">
    <p class="card-text">
        <div class="alert alert-danger" role="alert">
        estas seguro de eliminar este medicamento?
        
        
        <table class="table table-sm-hover table-bordered" style="background-color:white ">
            <thead>
                <th>nombre</th>
                <th>precio</th>
                <th>cantidad</th>
                <th>descripcion</th>
                <th>fecha_cad</th>
                <th>presentacion</th>

            </thead>
            <thead>
                <tr>
                    <td>{{$medicinas->nombre}}</td>
                    <td>{{$medicinas->precio}}</td>
                    <td>{{$medicinas->cantidad}}</td>
                    <td>{{$medicinas->descripcion}}</td>
                    <td>{{$medicinas->fecha_cad}}</td>
                    <td>{{$medicinas->presentacion}}</td>
                </tr>
            </thead>

        </table>
        <hr>
        <form action="{{route ('medicinas.destroy' , $medicinas->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{route("medicinas.index")}}" class="btn btn-info">
                <span class="fas fa-undo-alt"></span> regresar
                </a>
            <button class="btn btn-danger">
                <span class="fas fa-trash"></span> Eliminar
            </button>

        </form>
        </div>
    </p>
    </div>
    </div>
@endsection
