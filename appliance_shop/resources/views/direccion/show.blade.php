@extends('layouts.app', ['page' => __('showDD'), 'pageSlug' => 'showDD'])


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Direccion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('direcciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                       
                        <div class="form-group">
                            <strong>Codigo Postal:</strong>
                            {{ $direccion->codigo_postal }}
                        </div>
                        <div class="form-group">
                            <strong>Colonia:</strong>
                            {{ $direccion->Colonium->Nombre_colonia}}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $direccion->ciudad->Nombre_ciudad  }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
