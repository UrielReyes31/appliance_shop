@extends('layouts.app', ['page' => __('showt'), 'pageSlug' => 'showt'])
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tienda</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tienda.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{ $tienda->id }}
                        </div>
                        <div class="form-group">
                            <strong>Tienda:</strong>
                            {{ $tienda->Sucursal }}
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
