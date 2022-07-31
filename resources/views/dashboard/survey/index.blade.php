@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Encuesta</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{ session('info') }}</strong>
</div>
@endif
<div class="card">
    <div class="card-header">
        <a class="btn btn-primary" href="{{ route('dashboard.survey.create') }}">Encuestar</a>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-hover" id="survey">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">
                        Edad
                    </th>
                    <th scope="col">
                        Género
                    </th>
                    <th scope="col">
                        Pais
                    </th>
                    <th scope="col">
                        Recomendaria visita
                    </th>
                    <th scope="col">
                        Nivel de educación
                    </th>
                    <th scope="col">
                        Actividad económica
                    </th>
                    <th scope="col">
                        Museo
                    </th>
                    <th scope="col">
                        Interes
                    </th>
                    <th scope="col">
                        Niño/a
                    </th>
                    <th scope="col">
                        Día
                    </th>
                    <th scope="col">
                        Razón
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($surveys as $survey)
                <tr>
                    <td>
                        @if ( $survey->age == 1)
                        1 - 17
                        @endif
                        @if ( $survey->age == 2)
                        18 - 64
                        @endif
                        @if ( $survey->age == 3)
                        Mayor a 64
                        @endif
                    </td>
                    <td>
                        @if ( $survey->gender == 1)
                        Masculino
                        @endif
                        @if ( $survey->gender == 2)
                        Femenino
                        @endif
                    </td>
                    <td>
                        @foreach ($countries as $country)
                            @if ($country->id == $survey->country_id)
                                {{ $country->name }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @if ( $survey->recommend_visit == 1)
                        Si
                        @endif
                        @if ( $survey->recommend_visit == 2)
                        No
                        @endif
                    </td>
                    <td>
                        @if ( $survey->education_level == 1)
                        Primaria
                        @endif
                        @if ( $survey->education_level == 2)
                        Secundaria
                        @endif
                        @if ( $survey->education_level == 3)
                        Superior
                        @endif
                    </td>
                    <td>
                        @if ( $survey->economic_activity == 1)
                        Empleado
                        @endif
                        @if ( $survey->economic_activity == 2)
                        Desempleado
                        @endif
                        @if ( $survey->economic_activity == 3)
                        Independiente
                        @endif
                    </td>
                    <td>
                        @if ( $survey->museum == 1)
                        Museo de la música
                        @endif
                        @if ( $survey->museum == 2)
                        Museo de la cultura lojana
                        @endif
                        @if ( $survey->museum == 3)
                        Museo arqueológico y lojanidad
                        @endif
                        @if ( $survey->museum == 4)
                        Museo puerta de la ciudad
                        @endif
                    </td>
                    <td>
                        @if ( $survey->interest == 1)
                        Historia
                        @endif
                        @if ( $survey->interest == 2)
                        Arte
                        @endif
                        @if ( $survey->interest == 3)
                        Etnografía
                        @endif
                        @if ( $survey->interest == 4)
                        Arqueología
                        @endif
                        @if ( $survey->interest == 5)
                        Ninguno
                        @endif
                    </td>
                    <td>
                        @if ( $survey->kid == 1)
                        Si
                        @endif
                        @if ( $survey->kid == 2)
                        No
                        @endif
                    </td>
                    <td>
                        @if ( $survey->day == 1)
                        Lunes
                        @endif
                        @if ( $survey->day == 2)
                        Martes
                        @endif
                        @if ( $survey->day == 3)
                        Miércoles
                        @endif
                        @if ( $survey->day == 4)
                        Jueves
                        @endif
                        @if ( $survey->day == 5)
                        Viernes
                        @endif
                        @if ( $survey->day == 6)
                        Sábado
                        @endif
                        @if ( $survey->day == 7)
                        Domingo
                        @endif
                    </td>
                    <td>
                        @if ( $survey->reason == 1)
                        Poco tiempo
                        @endif
                        @if ( $survey->reason == 2)
                        Falta de información
                        @endif
                        @if ( $survey->reason == 3)
                        Distancia
                        @endif
                        @if ( $survey->reason == 4)
                        No tengo con quien ir
                        @endif
                        @if ( $survey->reason == 5)
                        Ninguno
                        @endif
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@stop

@section('js')
<script>
     $(document).ready(function() {
            $('#survey').DataTable({
                "language": {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
        });
</script>
@stop