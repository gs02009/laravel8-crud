
<!-- Modal -->
<div class="modal fade" id="modal-editar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="{{ route('vehiculos.update',$vehiculo->ID) }}" method="post">
    @csrf
    @method('PUT')

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  
      <div class="mb-3">
    <label for=""class="form-label">Propietario:</label>
    <input type="text" name="propietario" class="form-control" id="propietario" tabindex="2" value="{{ $vehiculo->PROPIETARIO }}">    
</div>
<div class="mb-3">

<label for=""class="form-label">Tipo de Placa:</label>


<select name="idplacas" id="idplacas">
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
    <input type="text" name="numplaca" class="form-control" id="numplaca" tabindex="3" max="6" value="{{ $vehiculo->NUMPLACA }}">    
</div>
<div class="mb-3">
    <label for=""class="form-label">Marca:</label>
    <input type="text" name="marca" class="form-control" id="marca" tabindex="4" value="{{ $vehiculo->MARCA }}">    
</div>
   







      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
    </form>
  </div>
</div>


