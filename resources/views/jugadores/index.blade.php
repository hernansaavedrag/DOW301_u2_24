@extends('layouts.master')

@section('contenido-principal')
    <!-- datos -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3>Jugadores</h3>
            </div>
        </div>

        <div class="row">
            <!-- tabla -->
            <div class="col-12 col-lg-8 order-last order-lg-first">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Apellido</th>
                            <th>Nombre</th>
                            <th>Posición</th>
                            <th>Número</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jugadores as $num=>$jugador)
                        <tr>
                            <td class="align-middle">{{$num+1}}</td>
                            <td class="align-middle">{{$jugador->apellido}}</td>
                            <td class="align-middle">{{$jugador->nombre}}</td>
                            <td class="align-middle">{{$jugador->posicion}}</td>
                            <td class="align-middle">{{$jugador->numero}}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-danger pb-0" data-bs-toggle="tooltip" data-bs-title="Borrar {{$jugador->nombre}}"
                                    data-bs-title="Borrar Jugador">
                                    <span class="material-icons">delete</span>
                                </a>
                                <a href="#" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                    data-bs-title="Editar Jugador">
                                    <span class="material-icons">edit</span>
                                </a>
                                <a href="#" class="btn btn-sm btn-info pb-0 text-white" data-bs-toggle="tooltip"
                                    data-bs-title="Ver Jugador">
                                    <span class="material-icons">group</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- form agregar equipo -->
            <div class="col-12 col-lg-4 order-first order-lg-last">
                <div class="card">
                    <div class="card-header bg-dark text-white">Agregar Jugadores</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('equipos.store')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" id="nombre" name="nombre"  class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="entrenador" class="form-label">Entrenador</label>
                                <input type="text" id="entrenador" name="entrenador"  class="form-control">
                            </div>
                            <div class="mb-3 d-grid gap-2 d-lg-block">
                                <button  type="reset" class="btn btn-warning">Cancelar</button>
                                <button type="submit" class="btn btn-success">Agregar Equipo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
   