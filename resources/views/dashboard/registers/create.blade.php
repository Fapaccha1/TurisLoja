@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear nuevo registro</h1>
@stop

@section('content')
    {!! Form::open(['route' => 'dashboard.registers.store']) !!}

    <div class="form-group">
        {!! Form::label('register_date', 'Fecha de registro') !!}
        {!! Form::datetimeLocal('register_date', \Carbon\Carbon::now(), ['readonly','class' => 'form-control']) !!} 
        
        @error('register_date')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    @if (count($museums) <= 1)
        @csrf
        @foreach ($museums as $id => $name) 
            {!! Form::hidden('museum_id', $id, ['id' => 'museum_id']) !!}
            <div class="form-group">
                {!! Form::label('museum', 'Museo actual') !!}
                {!! Form::text('museum', $name, ['readonly','class' => 'form-control']) !!}
            </div>
        @endforeach
        
    @else
        <div class="form-group">
            {!! Form::label('museum_id', 'Museo actual') !!}
            {!! Form::select('museum_id', $museums, null, ['placeholder' => 'Elija museo en el cual se encuentra ahora', 'class' => 'form-control']) !!}
            @error('museum_id')
                <span class="text-danger">{{ $message }}</span>
                <br>
            @enderror
        </div>
    @endif

    <div class="form-group">
        {!! Form::label('document', 'Cédula') !!}
        {!! Form::text('document', null, ['class' => 'form-control', 'placeholder' => 'Ingrese cédula']) !!}
        @error('document')
            <span class="text-danger">{{ $message }}</span>
            <br>
        @enderror
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre']) !!}
        @error('name')
            <span class="text-danger">{{ $message }}</span>
            <br>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('age', 'Edad') !!}
        {!! Form::number('age', null, ['class' => 'form-control', 'placeholder' => 'Ingrese edad']) !!}
        @error('age')
            <span class="text-danger">{{ $message }}</span>
            <br>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('gender', 'Género') !!}
        {!! Form::select('gender', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino', 'Prefiero no decir' => 'Prefiero no decir'], null, ['placeholder' => 'Elija un género', 'class' => 'form-control']) !!}
        @error('gender')
            <span class="text-danger">{{ $message }}</span>
            <br>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('transport', 'Medio de transporte') !!}
        {!! Form::select('transport', ['Taxi' => 'Taxi', 'Bus' => 'Bus', 'Pie' => 'Pie', 'Otro' => 'Otro',], null, ['placeholder' => 'Elija un medio de transporte', 'class' => 'form-control']) !!}
        @error('transport')
            <span class="text-danger">{{ $message }}</span>
            <br>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('day', 'Día de la visita') !!}
        {!! Form::select('day', ['1' => 'Lunes', '2' => 'Martes', '3' => 'Miércoles', '4' => 'Jueves', '5' => 'Viernes', '6' => 'Sábado', '7' => 'Domingo'], null, ['placeholder' => 'Elija día de la visita', 'class' => 'form-control']) !!}
        @error('day')
            <span class="text-danger">{{ $message }}</span>
            <br>
        @enderror
    </div>

    <div class="form-group">
        <label for="countries">País de procedencia</label>
        <select class="select2-multiple form-control" name="country_id" id="countries">
            <option value="">Elija país de procedencia</option>
            @foreach ($countries as $country)
                <option value="{{ $country->id}}">{{ $country->name}}</option>
            @endforeach             
        </select>
    </div> 

    {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@stop

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/i18n/es.js"></script>

<script>
    $(document).ready(function() {
        // Select2 Multiple
        $('.select2-multiple').select2({
            placeholder: "Elija un país",
            allowClear: true,
            language: "es"
        });
    });
</script>

@stop
