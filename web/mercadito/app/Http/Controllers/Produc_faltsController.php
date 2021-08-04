<?php

namespace App\Http\Controllers;
use App\Models\Faltante;
use Illuminate\Http\Request;

class Produc_faltsController extends Controller
{
   public function getTipFaltantes(){
       $faltante = array();
       $faltante[] = "Falto alimento";
       $faltante[] = "Falto limpieza";
       $faltante[] = "Falto medicamento";
       $faltante[] = "Falta electronico";

       return $faltante;
   }

   public function getFaltantes(){
        $faltantes = Faltante::all();
        return $faltantes;
   }
    public function crearFaltante(Request $request){
        $input = $request->all();
        $faltante = new Faltante();
        $faltante->fnom_produc = $input["fnom_produc"];
        $faltante->ftipo_produc = $input["ftipo_produc"];
        $faltante->fcantidad = $input["fcantidad"];

        $faltante->save();
        return $faltante;
    }
}
