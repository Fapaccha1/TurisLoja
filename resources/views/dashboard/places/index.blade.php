@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Listado de lugares de información</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{ session('info') }}</strong>
</div>
@endif
<div class="card">
    <div class="card-body table-responsive">
        <table class="table table-hover" id="places">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">
                        Código
                    </th>
                    <th scope="col">
                        Nombre
                    </th>
                    <th scope="col">
                        Direccion
                    </th>
                    <th scope="col">
                        Descripcion
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($places as $place)
                <tr>
                    <td>
                        {{ $place->code }}
                    </td>
                    <td>
                        {{ $place->name }}
                    </td>
                    <td>
                        {{ $place->address }}
                    </td>
                    <td>
                        {{ $place->description }}
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
            $('#places').DataTable({
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