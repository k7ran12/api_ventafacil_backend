<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_cliente')->nullable();
            $table->string('nombre_cliente');
            $table->string('numero_nit')->nullable();
            $table->string('numero_nrc')->nullable();
            $table->string('direccion_cliente')->nullable();
            $table->string('numero_telefono')->nullable();
            $table->string('email');
            $table->string('giro');
            $table->decimal('limite_credito',8,2);
            $table->tinyInteger('estado');
            $table->string('barrio')->nullable();
            $table->string('documento')->nullable();
            $table->string('tipo_documento')->nullable();
            $table->string('celular')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('telefono_contacto')->nullable();
            $table->string('celular_contacto')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('lugar_nacimiento')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('eps')->nullable();
            $table->string('vivecon')->nullable();
            $table->string('filiacion')->nullable();
            $table->tinyInteger('esalumno');
            $table->string('imagen')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
