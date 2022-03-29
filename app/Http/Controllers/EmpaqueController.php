<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Carbon\Carbon;
use Illuminate\Database\RecordsNotFoundException;
use Illuminate\Http\Request;

class EmpaqueController extends Controller
{
    public function index(){
        $productos = producto::all();

        return view('home',compact('productos'));
    }

    public function vista(){
        $date = Carbon::now();  
        $date = $date->format('d-m-Y');
        return view('auth.vista',compact('date'));
    }


    public function store(Request $request){

        $productos = new producto();
        $request->validate([
            'pro_empaque' => 'required',
            'pro_estado_llegada' => 'required',
            'pro_remitente' => 'required|max:50',
            'pro_destinatario' => 'required|max:50',
            'pro_fecha_entrada' => 'required',
            'pro_observacion' => 'required|max:255',
            'pro_fecha_salida',

        ]);
        
        $productos->pro_empaque=$request->pro_empaque;
        $productos->pro_estado_llegada=$request->pro_estado_llegada;
        $productos->pro_remitente=$request->pro_remitente;
        $productos->pro_destinatario=$request->pro_destinatario;
        $productos->pro_fecha_entrada=$request->pro_fecha_entrada;
        $productos->pro_observacion=$request->pro_observacion;
        $productos->pro_fecha_salida = date('Y-m-d');
                                                                                                                                                    
        $productos->save();
        return redirect()->route('registro.index');
    }

    public function show($pro_id){
        
        $productos = producto::where('id',$pro_id)->first();
        
        return view('auth.create', compact('productos'));
    }

    public function update(Request $request, $id){
        
      $productos = producto::find($id);

      $productos->pro_fecha_salida = $request->pro_fecha_salida;  

      $productos->save();
      return redirect()->route('registro.index');
        
    }
}
