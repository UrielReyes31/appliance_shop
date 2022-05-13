@extends('layouts.app', ['page' => __('Indext'), 'pageSlug' => 'indexT'])


@section('content')
  <div class="row">
     <div class="card">
            <div class="card-body">
                <h1 class = 'text-center'>Lista de tiendas</h1>
                <a class = "btn btn-default btn-round animation-on-hover animation-on-hover " href="{{ url('tienda/create') }}"> Registrar nueva Tienda</a>  
                <a class = "btn btn-default btn-round animation-on-hover animation-on-hover " href="{{ route('tienda.export') }}"> Exportar tabla a Excel</a>  
                                
                <table class="table">
                    <thead>
                        <tr>
                        <th class = " text-center " scope="col">id</th>
                        <th class = " text-center " scope="col">Sucursal</th>
                        <th class = " text-center " scope="col">Acciones</th>
                        </tr>
                    </thead>
                    @foreach( $tiendas as $tienda )
                    <tbody>
                        <tr>
                            <td class = " text-center ">{{$tienda->id}}</td>
                            <td class = " text-center ">{{$tienda->Sucursal}}</td>
                            <td> 
                                <div class = "text-center">
                               
                                    <form action="{{ route('tienda.destroy',$tienda->id) }}"   class = " tienda-eliminar"method="POST">
                                    <a class="btn btn-sm btn-primary animation-on-hover" href="{{ route('tienda.show',$tienda->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                    <a class="btn btn-sm btn-success animation-on-hover" href="{{ url('/tienda/'.$tienda->id.'/edit') }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm animation-on-hover"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                    </form>
                                </div>    
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <form action="{{ route('tienda.import') }}" method="post" enctype ="multipart/form-data">
                    @csrf
                    <input type="file" name="file">
                    <button>Importar tiendas de Excel</button>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('Teliminar')== 'ok')
    <script>
    Swal.fire(
                '¡Tienda eliminada!',
                'La tienda se elimino correctamente.',
                'success'
                )
    </script>
    @endif

    <script>

        $('.tienda-eliminar').submit(function(e){
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
    @if (session('Tcrear')== 'ok')
    <script>
    Swal.fire(
                '¡Tienda registrada!',
                'El registro se guardo correctamente.',
                'success'
                )
    </script>
    @endif
@endpush
@push('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('Tactualizar')== 'ok')
    <script>
    Swal.fire(
                '¡Tienda Actualizada!',
                'La tienda se actualizo correctamente.',
                'success'
                )
    </script>
    @endif
@endpush