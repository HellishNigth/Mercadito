<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Proveedor;
use App\model\Faltante;
class ProveedoresController extends Controller
{
    public function getFaltprodByFaltantes(Request $request){
        $input = $request->all();
        $idFaltante = $input["idFaltante"];
        $fprod = Faltante::find($idFaltante);
        return $fprod->faltantes()->get();
    }
    public function getFaltprod(){
        return Proveedor::all();
    }
    public function save(Request $request){
        $input = $request->all();
        $nombreprov= $input["nombreProveedor"];
        $prodnom = $input["fnomProduc"];
        $tprod = $input["ftipoProduc"];
        $frag = $input["prodPragil"];
        $cantfal = $input["fcantidad"];
        $produfaltcId = $input["producId"];

        $proveedor = new Proveedor();
        $proveedor->nombre_proveedor = $nombreprov;
        $proveedor->fnom_produc = $prodnom;
        $proveedor->ftipo_produc = $tprod;
        $proveedor->prod_fragil = $frag;
        $proveedor->fcantidad = $cantfal;
        $proveedor->produc_id = $produfaltcId;

        $proveedor->save();
        return $proveedor;
    }
    public function remove(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();
        return "ok";
    }
}
