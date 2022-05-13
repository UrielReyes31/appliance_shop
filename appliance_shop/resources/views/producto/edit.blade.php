@extends('layouts.app', ['page' => __('editPP'), 'pageSlug' => 'editPP'])
@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Producto</span>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/productos/'.$producto->id) }}" method="post"  enctype="multipart/form-data">
                          @csrf
                           {{ method_field('PATCH') }}
                           @include('producto.form')
                           
                            <a class = "btn btn-primary animation-on-hover" class = "volver-sg"href="{{ url('productos/') }}"> Volver a lista </a>
                            <br>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
