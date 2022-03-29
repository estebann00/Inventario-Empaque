<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{    
    protected $table = "producto";
    protected $primarykey ="id";
    protected $filetable = ['pro_empaque','pro_estado_llegada','pro_remitente','pro_destinatario',
                            'pro_fecha_entrada','pro_observacion','pro_fecha_salida'];
}
