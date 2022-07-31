@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Listado de registros</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{ session('info') }}</strong>
</div>
@endif
<div class="card">
    <div class="card-header">
        <a class="btn btn-primary" href="{{ route('dashboard.registers.create') }}">Registrar</a>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-hover" id="registers">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">
                        Nombre
                    </th>
                    <th scope="col">
                        Edad
                    </th>
                    <th scope="col">
                        Genero
                    </th>
                    <th scope="col">
                        Transporte
                    </th>
                    <th scope="col">
                        Fecha de registro
                    </th>
                    <th scope="col">
                        País
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registers as $register)
                <tr>
                    <td>
                        {{ $register->name }}
                    </td>
                    <td>
                        {{ $register->age }}
                    </td>
                    <td>
                        {{ $register->gender }}
                    </td>
                    <td>
                        {{ $register->transport }}
                    </td>
                    <td>
                        {{ $register->register_date }}
                    </td>
                    <td>
                        @foreach ($countries as $country)
                            @if ($country->id == $register->country_id)
                                {{ $country->name }}
                            @endif
                        @endforeach
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
            $('#registers').DataTable({
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