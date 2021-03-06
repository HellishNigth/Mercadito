<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faltante extends Model
{
    use HasFactory;


    public function proveedores(){
        return $this->hasMany("App\Models\Proveedor", "produc_id");
    }
}
