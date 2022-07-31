@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')
    {!! Form::model($user, ['route' => ['dashboard.users.update', $user], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre']) !!}
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    

    <div class="form-group">
        {!! Form::label('email', 'Correo') !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese correo']) !!}
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    

    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <h2 class="h5 font-weight-bold">Listado de lugares</h2>
                
                @foreach ($museums as $museum)
                    <div>
                        <label>
                            {!! Form::checkbox('museums[]', $museum->id, null, ['class' => 'mr-1', 'id' => 'lugar' . $museum->id]) !!}
                            {{ ucwords(strtolower($museum->name)) }}
                        </label>
                    </div>
                @endforeach
        
                @error('museums')
                    <span class="text-danger">{{ $message }}</span>
                    <br>
                @enderror
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <h2 class="h5 font-weight-bold">Listado de roles</h2>
        
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1', 'id' => 'rol' . $role->id]) !!}
                            {{ $role->name }}
                        </label>
                    </div>
                @endforeach
        
                @error('roles')
                    <span class="text-danger">{{ $message }}</span>
                    <br>
                @enderror
            </div>
        </div>
    </div>

    {!! Form::submit('Editar usuario', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@stop

@section('js')
@stop
