<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo_cliente',
        'nombre_cliente',
        'numero_nit',
        'numero_nrc',
        'direccion_cliente',
        'numero_telefono',
        'email',
        'giro',
        'limite_credito',
        'estado',
        'barrio',
        'documento',
        'tipo_documento',
        'celular',
        'whatsapp',
        'telefono_contacto',
        'celular_contacto',
        'fecha_nacimiento',
        'lugar_nacimiento',
        'estado_civil',
        'vivecon',
        'filiacion',
        'esalumno',
        'imagen',        
    ];
}
