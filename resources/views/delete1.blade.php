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
                    <th>Nombre</th>
                    <th>Razon social</th>

                    </thead>
                    <tbody>
                    <tr>

                        <td>{{ $transporte->nombre}}</td>
                        <td>{{ $transporte->razon_social}}</td>

                    </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('destroy1', $transporte->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("home") }}" class="btn btn-info" >
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
