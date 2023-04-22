@extends('layout')

@section("tituloPagina", "Crear un nuevo registro")

@section('sidebar')
    <div class="card">
        <h5 class="card-header">Agregar un transporte</h5>
        <div class="card-body">

            <p class="card-text">

            @csrf
            <form action="{{ route("add1") }}" method="POST">
                @csrf
                <label for="">Id</label>
                <input type="text" name="id" class="form-control" required>
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Razon social</label>
                <input type="text" name="razon_social" class="form-control" required>


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
