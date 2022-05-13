@extends('layouts.app', ['page' => __('indexPP'), 'pageSlug' => 'indexPP'])
@section('content')
<div class="content">
        <div class="row">
            <div class="card-body ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <span id="card_title">
                                            <h1>Productos</h1>
                                        </span>
                                        <div class="float-right">
                                            <a class = "btn btn-default btn-round animation-on-hover animation-on-hover " href= "{{ route('productos.create') }}" > Nuevo producto</a>
                                        </div>
                                    </div>
                                </div>
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                                @endif
                                <div class="card-body">
                                    <div class="table-responsive" >
                                        <table class="table table-striped table-hover">
                                            <thead class="thead">
                                                <tr>
                                                <th class = " text-center " scope="col">Imagen</th>
                                                    <th class = " text-center " scope="col">Nombre Producto</th>
                                                    <th class = " text-center " scope="col">Precio</th>
                                                    <th class = " text-center " scope="col">categoria </th>
                                                    <th class = " text-center " scope="col">marca </th>
                                                    <th class = " text-center " scope="col">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($productos as $producto)
                                                <tr>
                                                    <td><img src="{{ asset('storage').'/'.$producto->imagen }}" width="50px"></td>
                                                    <td >{{ $producto->Nombre_producto }}</td>
                                                    <td class = " text-center ">{{ $producto->Precio }}</td>
                                                    <td class = " text-center ">{{ $producto->categoria->Nombre_categoria }}</td>
                                                    <td class = " text-center ">{{ $producto->marca->Nombre_marca }}</td>
                                                    <td>
                                                        <div class = "text-center">

                                                            <form action="{{url('/productos/'.$producto->id)}}"    class = " producto-eliminar" method="POST">
                                                            <a class="btn btn-info animation-on-hover btn-sm" href="{{ route('productos.show',$producto->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                            <a class="btn btn-success animation-on-hover btn-sm" href="{{ url('/productos/'.$producto->id.'/edit') }}"><i class="fa fa-fw fa-edit"></i></a>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger animation-on-hover btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class = "d-flex justify-content-end">
                                            {!! $productos->links() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="card ">
                                <div class="card-header">
                                    <h4 class="card-title"> Ver Marcas</h4>
                                </div>
                                <div class="card-body">
                                    <a class = "btn btn-success btn-round animation-on-hover " href="{{ route('marcas.index') }}">Marcas</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-12">
                            <div class="card ">
                                <div class="card-header">
                                    <h4 class="card-title">Ver Categorias</h4>
                                </div>
                                <div class="card-body">
                                    <a class = "btn btn-success btn-round animation-on-hover " href="{{ route('categorias.index') }}">Categorias</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection

@push('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('eliminar')== 'ok')
    <script>
    Swal.fire(
                '¡Eliminado!',
                'El registro se elimino correctamente.',
                'success'
                )
    </script>
    @endif

    <script>

        $('.producto-eliminar').submit(function(e){
                e.preventDefault();


            Swal.fire({
            title: '¿Estas seguro de eliminar el registro?',
            text: "¡No podra recuperar el registro!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, eliminar!',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {

                this.submit();
            }
            })
        });
    </script>
@endpush

@push('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('Pagregado')== 'ok')
    <script>
    Swal.fire(
                '¡Producto Guardado!',
                'El registro se guardo correctamente.',
                'success'
                )
    </script>
    @endif
@endpush
@push('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('Pactualizado')== 'ok')
    <script>
    Swal.fire(
                '¡Producto Actualizado!',
                'El producto se actualizo correctamente.',
                'success'
                )
    </script>
    @endif
@endpush
@push('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('SiRealizado')== 'ok')
    <script>
    Swal.fire(
                '¡Compra Realizada en paypal Correctamente!',
                'producto comprado.',
                'success'
                )
    </script>
    @endif
@endpush
@push('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('NoRealizado')== 'ok')
    <script>
    Swal.fire(
                '¡Fallo en la compra de paypal :(!',
                'Intentelo nuevamenete.',
                'success'
                )
    </script>
    @endif
@endpush
