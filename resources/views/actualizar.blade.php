@extends('layouts/plantilla')
@section("tituloPagina","Crear un Registro")
@section('contenido')
<br><br><br><br><br>
<style>
    body {
        background-image: url('{{ asset("img/fondo.jpg") }}');
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
<div class="card">

    <h5 class="card-header">Actualizar Medicamento</h5>
    <div class="card-body">

    <p class="card-text">
        <form action="{{route('medicinas.update',$medicinas->id)}}" method="POST">
            @csrf
            @method("PUT")
            <label for="">nombre </label>
            <input type="text" name="nombre" class="form-control" required value="{{ $medicinas->nombre}}">

            <label for="">precio </label>
            <input type="text" name="precio" class="form-control" required value="{{ $medicinas->precio }}">

            <label for="">cantidad</label>
            <input type="text" name="cantidad" class="form-control" required value="{{ $medicinas->cantidad}}">

            <label for="">descripcion</label>
            <input type="text" name="descripcion" class="form-control" required value="{{ $medicinas->descripcion}}">

            <label for="">fecha_cad</label>
            <input type="date" name="fecha_cad" class="form-control" required value="{{ $medicinas->fecha_cad}}">

            <label for="">presentacion</label>
            <input type="text" name="presentacion" class="form-control" required value="{{ $medicinas->presentacion}}">

            <br>
            <a href="{{route("medicinas.index")}}" class="btn btn-info">
                <span class="fas fa-undo-alt"></span> regresar
                </a>
            <button class="btn btn-warning">
                <span class="fas fa-user-edit"></span> Actualizar</button>
            
        </form>

    </p>

</div>
</div>
@endsection