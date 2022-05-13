
@extends('layouts.app', ['page' => __('FormMM'), 'pageSlug' => 'formMM'])
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Marca</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('marcas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{ $marca->id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Marca:</strong>
                            {{ $marca->Nombre_marca }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
