@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Gráficas por lugares</h1>
@stop

@section('content')
<p>Aquí puede visualizar gráficas en función a los lugares</p>
<x-app-layout>
    <div class="container mx-auto">
        @livewire('visitors-chart')
    </div>
</x-app-layout>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop