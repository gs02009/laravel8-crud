


<!-- Modal -->
<div class="modal fade" id="modal-show-{{ $vehiculo->ID }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ver Registros</h5>
    
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      
    <form action="/vehiculos/{{$vehiculo->id}}" method="post">
    @csrf
    @method('PUT')

<div class="mb-3">
    <label for=""class="form-label">Propietario:</label>
    <input type="text" disabled name="propietario" block class="form-control" id="propietario" tabindex="2" value="{{ $vehiculo->PROPIETARIO }}">    
</div>
<div class="mb-3">

<label for=""class="form-label">Tipo de Placa:</label>


<select name="idplacas" id="idplacas" disabled>
    @foreach ($placas as $placa)
        <option value="{{ $placa->ID }}" 
        @php
   
    if($placa->ID == $vehiculo->IDPLACAS) {
	echo('selected');
}
@endphp
        
        >
            {{ $placa->NOMPLACA }}
        </option>
    @endforeach
</select>

</div>

<div class="mb-3">
    <label for=""class="form-label">Número de la Placa:</label>
    <input type="text" name="numplaca" disabled class="form-control" id="numplaca" tabindex="3" max="6" value="{{ $vehiculo->NUMPLACA }}">    
</div>
<div class="mb-3">
    <label for=""class="form-label">Marca:</label>
    <input type="text" name="marca" disabled class="form-control" id="marca" tabindex="4" value="{{ $vehiculo->MARCA }}">    
</div>


</form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>









