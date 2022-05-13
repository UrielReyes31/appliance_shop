@extends('layouts.app', ['page' => __('sCI'), 'pageSlug' => 'sCI'])
@section('content')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ciudad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ciudades.index') }}"> volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Ciudad:</strong>
                            {{ $ciudad->Nombre_ciudad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
