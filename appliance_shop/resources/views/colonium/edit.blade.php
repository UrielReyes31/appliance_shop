@extends('layouts.app', ['page' => __('editCOL'), 'pageSlug' => 'editCOL'])
@section('content')


@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Colonium</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('colonias.update', $colonium->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('colonium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
