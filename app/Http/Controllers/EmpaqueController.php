
    public function index(){
        $productos = producto::where('pro_empaque','pro_estado_llegada','pro_remitente','pro_destinatario',
        'pro_fecha_entrada','pro_observacion','pro_fecha_salida','pro_estado')
        ->paginate(3);

        return view('home',compact('productos'));
        
    }

    public function vista(){
        $estado = estado::all(); 
        $date = Carbon::now();  
        $date = $date->format('d-m-Y'); 
        
        return view('auth.vista',compact('date','estado'));
    }


    public function store(Request $request){

        $productos = new producto();
        $request->validate([
            'pro_empaque' => 'required',
            'pro_estado_llegada' => 'required',
            'pro_remitente' => 'required|max:50',
            'pro_destinatario' => 'required|max:50',
            'pro_observacion' => 'required|max:255',
            'pro_fecha_salida',
            'pro_estado' => 'required',

        ]);

        $productos->pro_empaque=$request->pro_empaque;
        $productos->pro_estado_llegada=$request->pro_estado_llegada;
        $productos->pro_remitente=$request->pro_remitente;
        $productos->pro_destinatario=$request->pro_destinatario;
        $productos->pro_fecha_entrada = date('Y-m-d');        
        $productos->pro_observacion=$request->pro_observacion;
        $productos->pro_fecha_salida = date('Y-m-d');
        $productos->pro_estado = $request->pro_estado;
                                                                                                                                                    
        $productos->save();
        return redirect()->route('registro.store');
    }

    public function show($pro_id, $est){
        
        $productos = producto::where('id',$pro_id)->first();
        $estado = estado::where('id', $est)->first();
        
        return view('auth.create', compact('productos','estado'));
    }

    public function update(Request $request, $id){
        
      $productos = producto::find($id);

      $productos->pro_fecha_salida = $request->pro_fecha_salida;
        

      $productos->save();
      return redirect()->route('registro.index');
        
    }
}
