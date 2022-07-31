@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Crear nueva encuesta</h1>
@stop

@section('content')
{!! Form::open(['route' => 'dashboard.survey.store']) !!}
    <div class="form-group">
        {!! Form::label('age', 'Edad') !!}
        {!! Form::select('age', ['1' => '1-17', '2' => '18-64', '3' => 'Mayor a 64'], null, ['placeholder' => 'Elija un
        rango de edad', 'class' => 'form-control']) !!}
        @error('age')
        <span class="text-danger">{{ $message }}</span>
        <br>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('gender', 'Género') !!}
        {!! Form::select('gender', ['1' => 'Masculino', '2' => 'Femenino'], null, ['placeholder' => 'Elija un género',
        'class' => 'form-control']) !!}
        @error('gender')
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

    <div class="form-group">
        {!! Form::label('recommend_visit', '¿Recomendaría la visita a otras personas?') !!}
        {!! Form::select('recommend_visit', ['1' => 'Si', '2' => 'No'], null, ['placeholder' => 'Elija un género', 'class'
        => 'form-control']) !!}
        @error('recommend_visit')
        <span class="text-danger">{{ $message }}</span>
        <br>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('education_level', '¿Nivel educativo?') !!}
        {!! Form::select('education_level', ['1' => 'Primaria', '2' => 'Secundaria', '3' => 'Superior'], null,
        ['placeholder' => 'Elija una opción', 'class' => 'form-control']) !!}
        @error('education_level')
        <span class="text-danger">{{ $message }}</span>
        <br>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('economic_activity', '¿Actividad economica?') !!}
        {!! Form::select('economic_activity', ['1' => 'Empleado', '2' => 'Desempleado', '3' => 'Independiente'], null,
        ['placeholder' => 'Elija una opción', 'class' => 'form-control']) !!}
        @error('economic_activity')
        <span class="text-danger">{{ $message }}</span>
        <br>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('museum', '¿Cuál/cuáles museos conoce?') !!}
        {!! Form::select('museum', ['1' => 'Museo de la música', '2' => 'Museo de la cultura lojana', '3' => 'Museo
        arqueológico y lojanidad', '4' => 'Museo de la puerta de la ciudad' ], null, ['placeholder' => 'Elija una opción',
        'class' => 'form-control']) !!}
        @error('museum')
        <span class="text-danger">{{ $message }}</span>
        <br>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('interest', '¿Con respecto al contenido de los museos, que tema mas le interesa ?') !!}
        {!! Form::select('interest', ['1' => 'Historia', '2' => 'Arte', '3' => 'Etnografía', '4' => 'Arqueología', '5' =>
        'Ninguno'], null, ['placeholder' => 'Elija una opción', 'class' => 'form-control']) !!}
        @error('interest')
        <span class="text-danger">{{ $message }}</span>
        <br>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('kid', '¿A llevado algun niño a visitar un museo?') !!}
        {!! Form::select('kid', ['1' => 'Si', '2' => 'No'], null, ['placeholder' => 'Elija una opción', 'class' =>
        'form-control']) !!}
        @error('kid')
        <span class="text-danger">{{ $message }}</span>
        <br>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('day', '¿Cuál es el dia que dedica usted a visitar un museo?') !!}
        {!! Form::select('day', ['1' => 'Lunes', '2' => 'Martes', '3' => 'Miércoles', '4' => 'Jueves', '5' => 'Viernes', '6'=> 'Sábado', '7' => 'Domingo'], null, ['placeholder' => 'Elija una opción', 'class' => 'form-control']) !!}
        @error('day')
        <span class="text-danger">{{ $message }}</span>
        <br>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('reason', '¿Qué razón le ha impedido visitar un museo?') !!}
        {!! Form::select('reason', ['1' => 'Poco tiempo', '2' => 'Falta de informacion', '3' => 'Distancia', '4' =>'Arqueología', '5' => 'No tengo con quien ir', '6' => 'Ninguno'], null, ['placeholder' => 'Elija una opción', 'class'=> 'form-control']) !!}
        @error('reason')
        <span class="text-danger">{{ $message }}</span>
        <br>
        @enderror
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