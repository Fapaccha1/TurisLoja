@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Gráficas por meses y años</h1>
@stop

@section('content')
<p>Aquí puede visualizar gráficas en función a meses y años</p>

<x-app-layout>
    <div class="container mx-auto">
        @livewire('date-chart')
    </div>
</x-app-layout>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop