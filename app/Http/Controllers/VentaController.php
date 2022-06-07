<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function crearVenta(Request $request){
        $result = Venta::create([
            'numero_venta' => $request->numero_venta,            
            'fecha_venta' => $request->fecha_venta,
            'tipo_pago' => $request->tipo_pago,
            'numero_comprobante' => $request->numero_comprobante,
            'tipo_comprobante' => $request->tipo_comprobante,
            'sumas' => $request->sumas,
            'iva' => $request->iva,
            'exento' => $request->exento,
            'retenido' => $request->retenido,
            'descuento' => $request->descuento,
            'total' => $request->total,
            'sonlestras' => $request->sonlestras,
            'pago_efectivo' => $request->pago_efectivo,
            'pago_tarjeta' => $request->pago_tarjeta,
            'numero_tarjeta' => $request->numero_tarjeta,
            'tarjeta_habiente' => $request->tarjeta_habiente,
            'cambio' => $request->cambio,
            'estado' => $request->estado,
            'user_id' => $request->user_id,
            'cliente_id' => $request->cliente_id,
        ]);
        if($result){
            return response()->json(['message'=>'Venta creado correctamente'], 200);
        }else{
            return response()->json(['message'=>'No se pudo crear'],500);
        }
    }

    public function ventas(){
        $ventas = Venta::with('user', 'cliente')->get();
        return $ventas;
    }
}
