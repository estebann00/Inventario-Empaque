<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id('id');
            $table->string('pro_empaque');
            $table->string('pro_estado_llegada');
            $table->string('pro_remitente');
            $table->string('pro_destinatario');
            $table->date('pro_fecha_entrada');
            $table->char('pro_observacion');
            $table->date('pro_fecha_salida');
            $table->string('pro_estado');
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

