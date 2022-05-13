
@extends('layouts.app', ['page' => __('CreateT'), 'pageSlug' => 'createT'])
@section('content')
<div class="row">
    <div class="card">
         <div class="card-body">            
            <h2 class = 'text-center'>Registrar tienda</h2>
            <form action="{{url ('/tienda')}}" method="post">
                @csrf
                @include('tienda.form')
            </form>
        </div>
    </div>
</div>
@endsection





