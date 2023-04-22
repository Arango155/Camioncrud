@extends('layout')

@section("tituloPagina", "Actualizar el registro")

@section('sidebar')
    <div class="card">

        <div class="card-body">


            <p class="card-text">

            <form action="{{ route('update2', $camion->id_placa) }}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Placa camion</label>
                <input type="text" name="placa_camion" class="form-control" required value="{{$camion->nombre}}">
                <label for="">Marca</label>
                <input type="text" name="marca" class="form-control" required value="{{$camion->marca}}">
                <label for="">Color</label>
                <input type="text" name="color" class="form-control" required value="{{$camion->color}}">
                <label for="">Modelo</label>
                <input type="date" name="modelo" class="form-control" required value="{{$camion->modelo}}">
                <label for="">Capacidad toneladas</label>
                <input type="text" name="capacidad_toneladas" class="form-control" required value="{{$camion->capacidad_toneladas}}">


                <br>
                <a href="{{ route("home2") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Actualizar
                </button>

            </form>
            </p>

        </div>
    </div>
@endsection
