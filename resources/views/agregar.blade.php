@extends('layouts/plantilla')
@section("tituloPagina","Crear un Registro")
@section('contenido')

<div class="card" style="margin-top: 150px; margin-left: 50px;">
    <h5 class="card-header">Agregar Nuevo medicamento</h5>
    <div class="card-body">

    <p class="card-text">
        <form action="{{route('medicinas.store')}}" method="POST">
            @csrf
            <label for="">nombre</label>
            <input type="text" name="nombre" class="form-control" required>

            <label for="">precio </label>
            <input type="text" name="precio" class="form-control" required>

            <label for="">cantidad</label>
            <input type="text" name="cantidad" class="form-control" required>

            <label for="">descripcion</label>
            <input type="text" name="descripcion" class="form-control" required>

            <label for="">fecha_cad</label>
            <input type="date" name="fecha_cad" class="form-control" required>

            <label for="">presentacion</label>
            <input type="text" name="presentacion" class="form-control" required>

            <br>
            <a href="{{route("privada")}}" class="btn btn-info">
            <span class="fas fa-undo-alt"></span> regresar
            </a>
            <button class="btn btn-primary">
                <span class="fas fa-user-plus"></span> Agregar</button>
            
        </form>

    </p>

</div>
</div>
@endsection