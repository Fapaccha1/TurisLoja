@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Gráficas de regsitros de museos</h1>
@stop

@section('content')
<p>Aquí puede visualizar gráficas en función a registros por cada museo</p>

<div class="row">
    <div class="col-md-6 col-sm-12">
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

    <div class="col-md-6 col-sm-12">
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
<x-app-layout>
    <div class="container mx-auto">
        @livewire('survey-chart')
    </div>
</x-app-layout>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop