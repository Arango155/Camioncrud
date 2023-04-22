@extends('layout')

@section("tituloPagina", "Actualizar el registro")

@section('sidebar')
    <div class="card">

        <div class="card-body">


            <p class="card-text">

            <form action="{{ route('update1', $transporte->id) }}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$transporte->nombre}}">
                <label for="">Razon social</label>
                <input type="text" name="razon_social" class="form-control" required value="{{$transporte->razon_social}}">
              <br>
                <a href="{{ route("home") }}" class="btn btn-info" >
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
