<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaProveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string("nombre_proveedor");
            $table->string("nombre_prodprov");
            $table->tinyInteger("prod_fragil")->default(0);
            $table->integer("cant_prod")->unsigned()->default(1)->nullable();
            $table->bigInteger("produc_id")->unsigned();
            $table->foreign("produc_id")->references("id")->on("faltantes")->onDelete("cascade");
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
        Schema::dropIfExists('proveedores');
    }
}
