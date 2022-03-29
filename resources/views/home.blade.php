@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<nav class="h-16 flex justify mb-4 py-4 px-8">
    <!--<a href="{{route('registro.index')}}" class="border border-blue-800 rounded px-4 pt-1 h-10
      bg-blue-500 text-white font-semibold mx-2 no-underline">registro</a>-->

    <a href="{{route('registro.vista')}}" class="border border-blue-800 rounded-md px-4 pt-1 h-10
      bg-blue-500 text-white  mx-2 hover:bg-indigo-500 no-underline">Agregar</a>
    </nav>

<!-- Tabla de registro -->
<div class="bg-white overflow-hidden px-3 shadow-xl sm:rounded-lg ">

        <table class="table-fixed-flex">
          <thead>
            <tr class="text-center bg-indigo-800 text-white">
            <th class="col-1 py-3 ..."><i>Id</i></th>
              <th class="col-1 py-3 ...">Empaque</th>
              <th class="col-1 py-3 ...">Estado llegada</th>
              <th class="col-3 py-2 ...">Remitente</th>
              <th class="col-3 py-3 ...">Destinatario</th>
              <th class="col-2 py-3 ...">Fecha llegada</th>
              <th class="col-1 py-3 ...">Estado</th>
              <th class="col-1 py-3 ...">Observacion</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($productos as $product)
            <tr>
            <td class="p-1 px-4">{{$product->id}}</td>
              <td class="p-1 px-4">{{$product->pro_empaque}}</td>
              <td class="p-1 px-4 ">{{$product->pro_estado_llegada}}</td>
              <td class="p px-5">{{$product->pro_remitente}}</td>
              <td class="p px-5">{{$product->pro_destinatario}}</td>
              <td class="p px-5">{{$product->pro_fecha_entrada}}</td>
              <td class="px-4">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaleditar{{$product->id}}">
                detalle
              </button>
              </td>

              <td class="p px-5">
              <button type="button" data-bs-toggle="modal" data-bs-target="#modaldetalle{{$product->id}}"              
			        class="uppercase p-3 flex items-center bg-blue-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg rounded-full w-12 h-12 ">
				      <svg width="32" height="32"  viewBox="0 0 32 32" style="transform: rotate(360deg);"><path d="M29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29zM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9z" 
              fill="currentColor"></path></svg>
              </button>
              @include ('auth.create')

            <!-- Modal de detalles -->
              <div class="modal fade" id="modaldetalle{{$product->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-body" >
              <div class="mb-2">
              
              <h5>DETALLES</h5>
              <hr>
              <h5>Empaque</h5>
              {{$product->pro_empaque}}
            
              <h5>Estado de llegada</h5>
              {{$product->pro_estado_llegada}}
              
              <h5>Remitente</h5>
              {{$product->pro_remitente}}
              
              <h5>Destinario</h5>
              {{$product->pro_destinatario}}
              
              <h5>Fecha llegada</h5>
              {{$product->pro_fecha_entrada}}
              
              
              <h5>Fecha salida</h5>
              {{$product->pro_fecha_salida}}
              
              <h5>Observacion</h5>
              {{$product->pro_observacion}}
              </div>      

                <div class="modal-footer">  
                <button type="button" class="bg-blue-500 0 text-white px-8 py-2 rounded-md text-1xl 
                font-medium hover:bg-blue-700 transition duration-3" data-bs-dismiss="modal">Cerrar</button>
                </div>
                </div>
                    </div>
                  </div>
                </div>
                </form>
              </td>
            </tr>



          @endforeach
          </tbody>
        </table>
      </div>


@endsection
