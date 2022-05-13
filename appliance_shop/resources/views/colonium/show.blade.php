@extends('layouts.app', ['page' => __('sCOL'), 'pageSlug' => 'sCOL'])
@section('content')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Colonium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('colonias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Colonia:</strong>
                            {{ $colonium->Nombre_colonia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
