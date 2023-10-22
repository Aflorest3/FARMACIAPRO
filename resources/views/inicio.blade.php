<!-- aqui llamo o heredo lo de la carpeta layout llamando 
    el container que ise y el titulo !-->

    @extends('layouts/plantilla')

    @section('titulo_pagina', 'crud farmacia')
        
    @section('contenido')
    <br><br><br><br><br><br><br><br><br>
    <div class="card">
    <h5 class="card-header">FARMACIA FLORES </h5>
        <div class="card-body">
            
            <div class="row">
                <div class="col-sm-12">
                    @if ($mensaje = Session::get('success'))
                        
                    <div class="alert alert-success" role="alert">
                        {{$mensaje }}
                    </div>
    
                    @endif
                </div>
            </div>
        <h5 class="card-title text-center">listado de medicamentos en el sistema</h5>
        <p>
            <a href="{{route("medicinas.create") }}"class="btn btn-primary">
                <span class="fas fa-user-plus"></span> Agregar nuevo medicamento
            </a>
            <a href="{{route("privada")}}" class="btn btn-info">
                <span class="fas fa-undo-alt"></span> regresar
            </a>
        </p>
        <hr>
        <p class="card-text">
            <div class= "table table-responsive">
                <table class="table table-sm table-bordered"> 
                    <thead>
                        <th>nombre</th>
                        <th>precio</th>
                        <th>cantidad</th>
                        <th>descripcion</th>
                        <th>fecha_cad</th>
                        <th>presentacion</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        
                    </thead>
                    <tbody>
    
                @foreach ($datos as $item)
                        <tr>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->precio}}</td>
                            <td>{{$item->cantidad}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>{{$item->fecha_cad}}</td>
                            <td>{{$item->presentacion}}</td>
                            <td>
                                <form action="{{route('medicinas.edit', $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('medicinas.show', $item->id) }}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-trash"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                @endforeach
                    </tbody>
                </table>
                <hr>
            </div>
            <div class="row">
                <div class="col-sm-12 ">
                    {{$datos->links()}}
            </div>
        </p>
    </div>
    </div>
    @endsection