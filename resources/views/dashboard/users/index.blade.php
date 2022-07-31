@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Listado de usuarios</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{ session('info') }}</strong>
</div>
@endif
<div class="card">
    <div class="card-header">
        <a class="btn btn-primary" href="{{ route('dashboard.users.create') }}">Agregar usuario</a>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-hover" id="users">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">
                        Nombre
                    </th>
                    <th scope="col">
                        Correo
                    </th>
                    <th scope="col">
                        Rol
                    </th>
                    <th scope="col">
                        Lugar Asignado
                    </th>
                    <th scope="col">
                        Editar
                    </th>
                    <th scope="col">
                        Eliminar
                    </th>
                </tr>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        @if (!empty($user->getRoleNames()))
                            @foreach ($user->getRoleNames() as $rol)
                            <label class="badge badge-primary">{{ $rol }}</label>
                            @endforeach
                        @endif
                    </td>
                    <td>
                        @if (count($user->museums) == 0)
                        <label class="badge badge-danger">Lugar no asignado</label>
                        @else
                            @foreach ($user->museums as $museum)
                                <label class="badge badge-success">{{ $museum->name }}</label>
                            @endforeach
                        @endif

                    </td>
                    <td>
                        <a href="{{ route('dashboard.users.edit', $user) }}" class="btn btn-primary btn-sm"
                            role="button" aria-disabled="true">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('dashboard.users.destroy', $user) }}" class="eliminar" method="POST">
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
            $('#users').DataTable({
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