@extends('layouts.app', ['page' => __('showU'), 'pageSlug' => 'SHOWUU'])

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuario->Nombre }} {{ $usuario->Paterno }}   {{ $usuario->Materno }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $usuario->Edad }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $usuario->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Tienda:</strong>
                            {{ $usuario->Tienda->Sucursal }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección: </strong>
                           {{ $usuario->Direccion->codigo_postal }}, 
                           {{ $usuario->Direccion->Ciudad->Nombre_ciudad }},
                           {{ $usuario->Direccion->Colonium->Nombre_colonia }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $usuario->Sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $usuario->Correo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
