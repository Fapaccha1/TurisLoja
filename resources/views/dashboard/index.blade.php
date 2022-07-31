@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
    <p>Bienvenidos al Dashboard de Turis Loja</p>
    @foreach (auth()->user()->getRoleNames() as $rol)
        @if ($rol == 'Super Admin')
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card" style="background: #f6ad55">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="card-title"><strong>Número de administradores</strong></h5>
                                </div>
                                <div class="col-5">
                                    <span class="float-right">
                                        @if ($user == 0)
                                        <h5 class="card-text text-danger">No hay usuarios</h5>
                                        @else
                                        <h5 class="card-text">{{ $user }}</h5>
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="card" style="background: #90cdf4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="card-title"><strong>Museos actuales</strong></h5>
                                </div>
                                <div class="col-5">
                                    <span class="float-right">
                                        @if ($museum == 0)
                                        <h5 class="card-text text-danger"><strong>No hay museos</strong></h5>
                                        @else
                                        <h5 class="card-text">{{ $museum }}</h5>
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="card" style="background: #fc8181">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="card-title"><strong>Lugares de información</strong></h5>
                                </div>
                                <div class="col-5">
                                    <span class="float-right">
                                        @if ($place == 0)
                                        <h5 class="card-text text-danger">No hay lugares</h5>
                                        @else
                                        <h5 class="card-text">{{ $place }}</h5>
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="background: #f6ad55"><strong>Listado de administradores</strong></h5>
                            <table class="table table-sm table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Correo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            @if ( count($museums) != 0)
                            <h5 class="card-title" style="background: #90cdf4"><strong>Listado de museos</strong></h5>
                            <table class="table table-sm table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripcion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($museums as $museum)
                                    <tr>
                                        <td>
                                            {{ $museum->name }}
                                        </td>
                                        <td>
                                            {{ $museum->description }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <div class="alert alert-danger">
                                <div class="row">
                                    <div class="col-auto align-self-start">
                                        <!-- or align-self-center -->
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="col">
                                        No hay museos, por favor crear!
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            @if ( count($places) != 0)
                            <h5 class="card-title" style="background: #fc8181"><strong>Listado de lugares de información</strong>
                            </h5>
                            <table class="table table-sm table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Nombre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($places as $place)
                                    <tr>
                                        <td>
                                            {{ $place->code }}
                                        </td>
                                        <td>
                                            {{ $place->name }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <div class="alert alert-danger">
                                <div class="row">
                                    <div class="col-auto align-self-start">
                                        <!-- or align-self-center -->
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="col">
                                        No hay museos, por favor crear!
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="alert alert-info">
                <div class="row">
                    <div class="col-auto align-self-start"> <!-- or align-self-center -->
                        <i class="fas fa-info"></i>
                    </div>
                    <div class="col">
                        Para visualizar gráficas más detalladas por favor visitar la pestaña de gráficas por <a href="/dashboard/gplaces" style="color: greenyellow;">lugares</a>  o <a href="/dashboard/gdates" style="color: greenyellow;">meses</a>.
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card" style="background: #f6ad55">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="card-title"><strong>Numero de museos asignados :</strong></h5>
                                </div>
                                <div class="col-5">
                                    <span class="float-right">
                                        @if (count($actual_user->museums) == 0)
                                            <h5 class="card-text text-white">No asignado</h5>
                                        @else
                                            <h5 class="card-text">{{ count($actual_user->museums) }}</h5>
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="card" style="background: #90cdf4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="card-title"><strong>Total de Registros </strong></h5>
                                </div>
                                <div class="col-5">
                                    <span class="float-right">
                                        @if ($museum_register == 0)
                                        <h5 class="card-text text-white"><strong>No hay registros</strong></h5>
                                        @else
                                        <h5 class="card-text">{{ $museum_register }}</h5>
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="card" style="background: #fc8181">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="card-title"><strong>Total de registros hoy</strong></h5>
                                </div>
                                <div class="col-5">
                                    <span class="float-right">
                                        @if ($actual_museum_register == 0)
                                        <h5 class="card-text text-white">No hay registros</h5>
                                        @else
                                        <h5 class="card-text">{{ $actual_museum_register }}</h5>
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert alert-info">
                <div class="row">
                    <div class="col-auto align-self-start"> <!-- or align-self-center -->
                        <i class="fas fa-info"></i>
                    </div>
                    <div class="col">
                        @if (count($actual_user->museums) == 0)
                            <label >Museo no asignado</label>
                        @else
                            @if (count($actual_user->museums) == 1)
                                Museo asignado:
                            @else
                                Museos asignados: 
                            @endif
                        
                            @foreach ($actual_user->museums as $museum)
                                @if (count($actual_user->museums) > 1)
                                    <label >{{ $museum->name }} ,</label>
                                @else
                                    <label >{{ $museum->name }} </label>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop