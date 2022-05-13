@extends('layouts.app', ['page' => __('createCOL'), 'pageSlug' => 'createCOL'])
@section('content')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Colonium</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('colonias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('colonium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
