@extends('layout')

@section("tituloPagina", "Crear un nuevo registro")

@section('sidebar')
    <div class="card">
        <h5 class="card-header">Agregar nueva persona</h5>
        <div class="card-body">

            <p class="card-text">

            @csrf
            <form action="{{ route("add2") }}" method="POST">
                @csrf
                <label for="">Id placa</label>
                <input type="text" name="id_placa" class="form-control" required>
                <label for="">Placa camion</label>
                <input type="text" name="placa_camion" class="form-control" required>
                <label for="">Marca</label>
                <input type="text" name="marca" class="form-control" required>
                    <label for="">Color</label>
                    <input type="text" name="color" class="form-control" required>
                    <label for="">Modelo</label>
                <input type="date" name="modelo" class="form-control" required>
                    <label for="">Capacidad toneladas</label>
                        <input type="text" name="capacidad_toneladas" class="form-control" required>

                <label for="">Id transporte</label>
                <input type="text" name="id_transporte" class="form-control" required>


                <br>
                <a href="{{ route("home") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Inicio
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar
                </button>


            </form>
            </p>

        </div>
    </div>
@endsection
