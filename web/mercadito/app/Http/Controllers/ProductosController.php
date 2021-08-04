<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function getTipProducs(){
        $tipproduc = array();
        $tipproduc[] = "Comida";
        $tipproduc[] = "Limpieza";
        $tipproduc[] = "Medicamento";
        $tipproduc[] = "Electronico";

        return $tipproduc;
    }
}
