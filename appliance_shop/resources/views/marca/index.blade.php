
@extends('layouts.app', ['page' => __('IndexMM'), 'pageSlug' => 'indexMM'])

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Marca') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('marcas.create') }}" class="btn btn-primary btn-sm float-right animation-on-hover"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
										<th class = " text-center " scope="col">Id</th>
										<th class = " text-center " scope="col">Nombre Marca</th>
                                        <th class = " text-center " scope="col">Acciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($marcas as $marca)
                                        <tr>
											<td class = " text-center ">{{ $marca->id }}</td>
											<td class = " text-center ">{{ $marca->Nombre_marca }}</td>
                                            <td>
                                                <div class = "text-center">
                                                    <form action="{{ route('marcas.destroy',$marca->id) }}"  class = "marca-eliminar"method="POST">
                                                        <a class="btn btn-sm btn-primary animation-on-hover" href="{{ route('marcas.show',$marca->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                        <a class="btn btn-sm btn-success animation-on-hover" href="{{ route('marcas.edit',$marca->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                        </div>
                    </div>
                </div>
                {!! $marcas->links() !!}
            </div>
        </div>
    </div>
@endsection
@push('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('MarcaEl')== 'ok')
    <script>
    Swal.fire(
                '¡Marca Eliminada!',
                'El registro se elimino correctamente.',
                'success'
                )
    </script>
    @endif

    <script>

        $('.marca-eliminar').submit(function(e){
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
    @if (session('marcaag')== 'ok')
    <script>
    Swal.fire(
                '¡Marca registrada!',
                'La marca se registro correctamente.',
                'success'
                )
    </script>
    @endif
@endpush
@push('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('marcaAc')== 'ok')
    <script>
    Swal.fire(
                '¡Marca Actualizada!',
                'La marca se actualizo correctamente.',
                'success'
                )
    </script>
    @endif
@endpush
