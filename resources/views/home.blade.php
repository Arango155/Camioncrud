
@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    <div class="card">
        <h5 class="card-header">CRUD TRANSPORTE</h5>
        <div class="card-body">
            <h5 class="card-title">Listado</h5>
            <p><a href="{{route('create1')}}" class="btn btn-primary">Agregar</a></p>
            <p><a href="{{route('home2')}}" class="btn btn-primary">Listado de camiones</a></p>

            @php

                @endphp

            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Razon social</th>


                    </thead>
                    <tbody>

                    @foreach($datos as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->razon_social}}</td>

                            <td>
                                <form action="{{route("edit1",$item->id)}}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route("delete1",$item->id)}}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            </p>
        </div>
    </div>
@endsection

@section('content')

@endsection
