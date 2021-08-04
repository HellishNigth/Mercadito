@extends('layouts.master')

@section('contenido')
<div class="row mt-5">
    <div class="col-12 col-md-6 col-lg-5 mx-auto">
        <div class="card">
            <div class="card-header bg-danger text-dark">
                <span>Registro Proveedor</span>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="nombre-txt" class="form-label">Nombre Empresa Proveedora</label>
                    <input type="text" id="nombre_proveedor-txt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="prodprov-txt" class="form-label">Producto a proveer</label>
                    <input type="text" id="prodprov-txt" class="form control">
                </div>
                <div class="mb-3">
                    <label for="tipo_proveedor-select" class="form-label">Tipo Proveedor</label>
                    <select class="form-select" id="tipo_proveedor-select">
                        <option value="comida">Comida</option>
                        <option value="limpieza">Limpieza</option>
                        <option value="medicamento">Medicamento</option>
                        <option value="electronico">Electronico</option>
                    </select>
                </div>
                <div class="mb-3">
                    
                </div>
                <div class="mb-3">
                    <label for="cantidad_provista-txt" class="form-label">Cantidad a proveer</label>
                    <input type="number" class="form-control" id="cantidad_provista-txt">
                </div>
            </div>
            <div class="card-footer d-grid gap-1">
                <button class="btn btn-info">Registrar</button>
            </div>
        </div>
    </div>
</div>
@endsection