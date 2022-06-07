<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero_venta',
        'fecha_venta',
        'tipo_pago',
        'numero_comprobante',
        'tipo_comprobante',
        'sumas',
        'iva',
        'exento',
        'retenido',
        'descuento',
        'total',
        'sonlestras',
        'pago_efectivo',
        'pago_tarjeta',
        'numero_tarjeta',
        'tarjeta_habiente',
        'cambio',
        'estado',
        'user_id',
        'cliente_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
