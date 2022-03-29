@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <div class="container " style="width: 28rem"> 
    <div class="card-body">
    <div class="row justify-content-center">
      <form action="{{route('registro.store')}}" method="POST">
        @csrf
      <div class="mb-3">
        <select class="form-select" name="pro_empaque" aria-label="Disabled select example">
          <option selected disabled>Seleccionar encomienda</option>
          <option value="Caja">Caja</option>
          <option value="Bolsa">Bolsa</option>
          <option value="Empaque">Empaque</option>
          <option value="Sobre">Sobre</option>
        </select>
      </div>
      <div class="mb-2">
        <select class="form-select" name="pro_estado_llegada" aria-label="Disabled select example">
          <option selected disabled>Estado de la encomienda</option>
          <option value="Bien">Bien</option>
          <option value="Regular">Regular</option>
          <option value="Dañado">Dañado</option>
        </select>
      </div>
        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Remitente</label>
            <input type="text" class="form-control" name="pro_remitente" placeholder="Remitente">
        </div>
        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Destinatario</label>
            <input type="text" class="form-control" name="pro_destinatario" placeholder="Destinario">
        </div>      
        <div class="mb-2">
            <label for="FormControlInput1" class="form-label">fecha entrada</label>
            <input type="date" class="form-control" name="pro_fecha_entrada" value="{{$date}}" placeholder="Remitente">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Observacion</label>
            <textarea type="text" class="form-control" name="pro_observacion" rows="2"></textarea>
        </div>
        <div class="modal-footer">  
        <a type="button" href="{{ route('registro.index') }}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
         </form>
    </div>
    </div>
    </div>
    </div>

@endsection