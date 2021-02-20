@extends('layout.app')
@section('contenido')
<div class="welcome container-fluid">
    <div class="head row" id="tittle">
       <h1 class="tittle"><span>¡Hola usuario!</span> Ya es hora de trabajar.</h1>
       <p class="paragraph-content col-xl-5 col-lg-4 col-md-6" style="margin-top:3em;">Ultimas ventas registradas, para más detalles de la venta haga click en "<span>Más información</span>".</p>
       <div class="col-xl-7 col-lg-8"><img src="{{ asset("/images/platinum sell.svg") }}" alt="PlatinumSell" class="logo-head"></div>
    </div>
    <div class="contenedor">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 col-lg-9">
                    <table class="table table-bordered table-striped">
                        <thead class="table-danger">
                          <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Fecha</th>
                              <th scope="col">Producto</th>
                              <th scope="col">Precio</th>
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
                            </tr>
                            <tr>
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
                <div class="tabla col-xl-5 col-lg-3">
                    <img src="{{ asset("/images/image.png") }}" alt="ImageReference" class="image-reference">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection