@extends('layouts.app', ['page' => __('showPP'), 'pageSlug' => 'showPP'])
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles del Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary animation-on-hover" href="{{ route('productos.index') }}"> Back</a>
                            <a class="btn btn-default animation-on-hover" href="{{ url('/paypal/pay',$producto->id) }}"> Comprar</a>
                        </div>
                    </div>

                    <div class="card-body">
                    <div class="form-group">
                        <div>
                            <img src="{{ asset('storage').'/'.$producto->imagen }}"  height=”400” width=450  style="float:left">
                        </div>
                        
                        <br>

                        <div class="form-group">
                            <h1>{{ $producto->Nombre_producto }}</h1>
                        </div>
                        <div class="form-group">
                            <h3>${{ $producto->Precio }}</h3>
                        </div>
                        <hr noshade>
                    
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{ $producto->id }}
                        </div>
   
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $producto->Modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $producto->categoria->Nombre_categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $producto->marca->Nombre_marca }}
                            
                        </div>
                        <div class="form-group">            
                            <a id="acrCustomerReviewLink" class="a-link-normal" href="#customerReviews"> 
                            <span id="acrCustomerReviewText" class="a-size-base">957 calificaciones</span> </a> </span> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
