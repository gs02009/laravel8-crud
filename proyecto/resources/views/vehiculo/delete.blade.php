<!-- Modal -->
<div class="modal fade" id="modal-delete-{{ $vehiculo->ID }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="{{route ('vehiculos.destroy', $vehiculo->ID)}}" method="POST">
            @csrf
            @method('DELETE')
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Registros</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Deseas Eliminar al Registro {{$vehiculo->PROPIETARIO." PLACA: ".$vehiculo->NUMPLACA }} ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button class="btn btn-danger" type="submit">Eliminar</button>
      </div>
    </div>

</form>
  </div>
</div>