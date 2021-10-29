@extends('layouts.master')

@section('title', 'Empleados')

@section('content')
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
                <!-- table -->
                <table class="table datatables" id="dataTable-1">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Sexo</th>
                            <th>Correo</th>
                            <th>Fecha de ingreso</th>
                            <th>Fecha de actualización</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $value)
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <label class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->nombre }}</td>
                                <td>{{ $value->apellidos }}</td>
                                <td>{{ $value->sexo }}</td>
                                <td>{{ $value->email }}</td>
                                <td>
                                    <!-- <span class="badge badge-warning">No Disponible</span> -->
                                    @if ($value->created_at == '')
                                        <span class="badge badge-warning">No Disponible</span>
                                    @else
                                        {{ $value->created_at }}
                                    @endif
                                </td>
                                <td>
                                    @if ($value->updated_at == '')
                                        <span class="badge badge-warning">No Disponible</span>
                                    @else
                                        {{ $value->updated_at }}
                                    @endif
                                </td>
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted sr-only">Action</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <form action="{{url ("show/{$value->id}")}}" method="post">
                                            @csrf
                                            <button class="dropdown-item" type="submit">Editar</button>
                                        </form>
                                        <form action="{{ url("delete/{$value->id}") }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item" type="submit">Remover</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- simple table -->
    </div> <!-- end section -->
    </div> <!-- .col-12 -->
    </div> <!-- .row -->
    </div>
@stop
