@extends('layout.app')
@section('contenido')
<div class="container-fluid index">
    <h1 class="tittle" id="tittle-section"><span>Inventario</span></h1>
    <p class="paragraph-content">
        Menu de inicio de la seccion inventario y resumen de los ultimos productos registrados
    </p>
    <div class="row menu-inventary">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
            <a href="#" class="button-custom button-custom-color">Nuevo producto</a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
            <a href="#" class="button-custom button-custom-color">Modificar producto</a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
            <a href="#" class="button-custom button-custom-color">Remover producto</a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
            <a href="#" class="button-custom button-custom-color">Respaldar</a>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="ID del producto" aria-label="ID del producto" aria-describedby="button-addon2">
        <button class="btn-input btn-outline-custom" type="button" id="button-addon2">Buscar</button>
      </div>
    <div class="col">
        <table class="table table-bordered table-striped">
            <thead class="table-danger">
              <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Producto</th>
                  <th scope="col">Marca</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Fecha de registro</th>
                  <th scope="col">Detalles</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <th>XDDDD</th>
                    <th>XDDDD</th>
                    <th>XDDDD</th>
                    <th>XDDDD</th>
                    <th>XDDDD</th>
                    <th>XDDDD</th>
                </tr>
                <tr>
                    <th>XDDDD</th>
                    <th>XDDDD</th>
                    <th>XDDDD</th>
                    <th>XDDDD</th>
                    <th>XDDDD</th>
                    <th>XDDDD</th>
                </tr>
                <tr>
            </tbody>
        </table>
    </div>
</div>
@endsection