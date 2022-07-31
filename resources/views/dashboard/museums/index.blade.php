@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Listado de museos</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{ session('info') }}</strong>
</div>
@endif
<div class="card">
    <div class="card-header">
        <a class="btn btn-primary" href="{{ route('dashboard.museums.create') }}">Agregar museo</a>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-hover" id="museums">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">
                        Nombre
                    </th>
                    <th scope="col">
                        Direccion
                    </th>
                    <th scope="col">
                        Descripcion
                    </th>
                    <th scope="col">
                        Personal
                    </th>
                    <th scope="col">
                        Editar
                    </th>
                    <th scope="col">
                        Eliminar
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($museums as $museum)
                <tr>
                    <td>
                        {{ $museum->name }}
                    </td>
                    <td>
                        {{ $museum->address }}
                    </td>
                    <td>
                        {{ $museum->description }}
                    </td>
                    <td>
                        @if (count($museum->users) == 0)
                        <label class="badge badge-danger">Personal no asignado</label>
                        @else
                            @foreach ($museum->users as $user)
                                <label class="badge badge-success">{{ $user->name }}</label>
                            @endforeach
                        @endif

                    </td>
                    <td>
                        <a href="{{ route('dashboard.museums.edit', $museum) }}" class="btn btn-primary btn-sm"
                            role="button" aria-disabled="true">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('dashboard.museums.destroy', $museum) }}" class="eliminar" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('js')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    $('.eliminar').submit(function(e){
        e.preventDefault();
        Swal.fire({
            icon: 'error',
            title: '¿Está seguro de eliminar?',
            text: '¡Una vez eliminado, no podrá recuperar esta información!',
            showDenyButton: true,
            confirmButtonText: '¡Sí, elimínalo!',
            denyButtonText: 'No, cancelar'
        }).then((result) => {
            if (result.value) {

                this.submit();
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
            $('#museums').DataTable({
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