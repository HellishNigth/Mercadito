<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produc_faltsController extends Controller
{
   public function getFaltantes(){
       $faltante = array();
       $faltante[] = "Falto alimento";
       $faltante[] = "Falto limpieza";
       $faltante[] = "Falto medicamento";
       $faltante[] = "Falta electronico";

       return $faltante;
   }




}
