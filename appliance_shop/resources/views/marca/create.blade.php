@extends('layouts.app', ['page' => __('CreateMM'), 'pageSlug' => 'createMM'])


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

            

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Nueva Marca</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('marcas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('marca.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
