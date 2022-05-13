@extends('layouts.app', ['page' => __('editCI'), 'pageSlug' => 'editCI'])
@section('content')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Ciudad</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ciudades.update', $ciudad->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('ciudad.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
