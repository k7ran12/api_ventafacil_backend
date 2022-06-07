<?php

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('numero_venta');
            $table->dateTime('fecha_venta');
            $table->string('tipo_pago');
            $table->integer('numero_comprobante');
            $table->tinyInteger('tipo_comprobante');
            $table->decimal('sumas', 8, 2);
            $table->decimal('iva', 8, 2);
            $table->decimal('exento', 8, 2);
            $table->decimal('retenido', 8, 2);
            $table->decimal('descuento', 8, 2);
            $table->decimal('total', 8, 2);
            $table->string('sonlestras');
            $table->decimal('pago_efectivo', 8, 2);
            $table->decimal('pago_tarjeta', 8, 2);
            $table->string('numero_tarjeta');
            $table->string('tarjeta_habiente');
            $table->decimal('cambio', 8, 2);
            $table->tinyInteger('estado');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Cliente::class);
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
        Schema::dropIfExists('ventas');
    }
}
