@extends('layouts.plantillabase')

<!--
@section('css')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css>




@endsection

-->

@section('contenido')

<h1> Sistema de Registros</h1>




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-nuevo">
  Nuevo Registro
</button>


<div class="container p-5">

<table id="TABLA" class="table table-striped table-hover tabla-dark table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Propietario</th>
                <th>Tipo Placa</th>
                <th>No. Placa</th>
                <th>Marca</th>
                <th>Operaciones</th>

            </tr>
        </thead>
        <tbody>
        @foreach ($vehiculos as $vehiculo)

            <tr>
                <td> {{ $vehiculo->ID }}</td>
                <td>{{ $vehiculo->PROPIETARIO }}</td>
                <td>{{ $vehiculo->IDPLACAS }}</td>
                <td>{{ $vehiculo->NUMPLACA }}</td>
                <td>{{ $vehiculo->MARCA }}</td>
                <td>

          
        
          

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-editar">
  Editar
</button>

          
           
            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $vehiculo->ID }}">
  Eliminar
</button>
<!-- Button trigger modal -->
<button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#modal-show-{{ $vehiculo->ID }}">
  Ver
</button>
    


        </td>

            </tr>
            @include('vehiculo.edit')
            @include('vehiculo.delete')
            @include('vehiculo.show')
            @endforeach

            
        </tbody>
        <tfoot>
            <tr>

            </tr>
        </tfoot>
    </table>

</div>


@include('vehiculo.create')


@endsection

