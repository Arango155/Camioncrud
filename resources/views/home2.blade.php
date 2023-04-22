
@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    <div class="card">
        <h5 class="card-header">CRUD CAMION</h5>
        <div class="card-body">
            <h5 class="card-title">Listado</h5>
            <p><a href="{{route('create1')}}" class="btn btn-primary">Agregar</a></p>
            <p><a href="{{route('home')}}" class="btn btn-primary">Listado de transportes</a></p>

            @php

                @endphp

            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                    <th>Id placa</th>
                    <th>Placa camion</th>
                    <th>Marca</th>
                    <th>Color</th>
                    <th>Modelo</th>
                    <th>Capacidad toneladas</th>
                    <th>Id transporte</th>


                    </thead>
                    <tbody>

                    @foreach($dates as $item)
                        <tr>
                            <td>{{$item->id_placa}}</td>
                            <td>{{$item->placa_camion}}</td>
                            <td>{{$item->marca}}</td>
                            <td>{{$item->color}}</td>
                            <td>{{$item->modelo}}</td>
                            <td>{{$item->capacidad_toneladas}}</td>

                            <td>
                                <form action="{{"edit2", $item->id_placa}}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{"delete2", $item->id_placa}}" method="GET">
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
