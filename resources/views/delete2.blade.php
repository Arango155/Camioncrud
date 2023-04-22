@extends('layout')

@section("tituloPagina", "Eliminar registro")

@section('sidebar')
    <div class="card">
        <h5 class="card-header">Eliminar registro</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!!

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                    <th>Id placa</th>
                    <th>Placa camion</th>
                    <th>Marca</th>
                    <th>Color</th>
                    <th>Modelo</th>
                    <th>Capacidad toneladas</th>

                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $camion->id_placa}}</td>
                        <td>{{ $camion->placa_camion}}</td>
                        <td>{{ $camion->marca}}</td>
                        <td>{{ $camion->color}}</td>
                        <td>{{ $camion->modelo}}</td>
                        <td>{{ $camion->capacidad_toneladas}}</td>

                    </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('destroy2', $camion->id_transporte) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("home2") }}" class="btn btn-info" >
                        <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span> Eliminar
                    </button>
                </form>
            </div>
            </p>

        </div>
    </div>
@endsection
