@extends('layouts.app', ['page' => __('EditT'), 'pageSlug' => 'editT'])
@section('content')
<div class="row">
    <div class="card">
         <div class="card-body">
            <h1 class = 'text-center' >Editar Registro</h1>
            <form action="{{ url('/tienda/'.$tienda->id ) }}" method="post">
                @csrf
                {{ method_field('PATCH') }}
                @include('tienda.form')
            </form>
        </div>
    </div> 
</div>
@endsection