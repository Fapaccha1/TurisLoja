@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear nuevo museo</h1>
@stop

@section('content')
    {!! Form::open(['route' => 'dashboard.museums.store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre']) !!}
        @error('name')
            <span class="text-danger">{{ $message }}</span>
            <br>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Dirección') !!}
        {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Ingrese dirección']) !!}
        @error('address')
            <span class="text-danger">{{ $message }}</span>
            <br>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Descripción') !!}
        {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese descripción']) !!}
        @error('description')
            <span class="text-danger">{{ $message }}</span>
            <br>
        @enderror
    </div>

    <div class="form-group">
        <p class="font-weight-bold">Listado de usuarios</p>
        
        @foreach ($users as $user)
            <div>
                <label>
                    {!! Form::checkbox('users[]', $user->id, null, ['class' => 'mr-1', 'id' => 'rol' . $user->id]) !!}
                    {{ $user->name }}
                </label>
            </div>
        @endforeach
    </div>

    {!! Form::submit('Crear museo', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@stop

@section('js')
@stop
