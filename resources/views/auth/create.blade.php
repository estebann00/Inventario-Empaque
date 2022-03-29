<!-- Modal de editar -->
<form action="{{route('registro.update', $product->id)}}" method="POST">
            @csrf @method('PUT')
<div class="modal fade" id="modaleditar{{$product->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" >
            <div class="mb-3">
            <div class="mb-2">
                <label for="FormControlInput1" class="form-label">fecha salida</label>
                <input type="date" class="form-control" name="pro_fecha_salida" value="{{$product->pro_fecha_salida}}" placeholder="fecha salida">
            </div>
            <div class="modal-footer">  
                <button type="button" class="bg-blue-500 0 text-white px-8 py-2 rounded-md text-1xl 
                        font-medium hover:bg-blue-700 transition duration-3" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>        
            </div>
            </div>
        </div>
    </div>
</div>
</form>
            <!-- Modal de editar -->