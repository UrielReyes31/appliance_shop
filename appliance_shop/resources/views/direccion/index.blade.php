@extends('layouts.app', ['page' => __('indexDD'), 'pageSlug' => 'indexDD'])


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Direccion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('direcciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                        
										<th>Codigo Postal</th>
										<th>Colonia</th>
										<th>Ciudad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($direccions as $direccion)
                                        <tr>         
											<td>{{ $direccion->codigo_postal }}</td>
											<td>{{ $direccion->Colonium->Nombre_colonia }}</td>
											<td>{{ $direccion->ciudad->Nombre_ciudad }}</td>

                                            <td>
                                                <form action="{{ route('direcciones.destroy',$direccion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('direcciones.show',$direccion->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('direcciones.edit',$direccion->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $direccions->links() !!}
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
                            <div class="card ">
                                <div class="card-header">
                                    <h4 class="card-title">Colonias</h4>
                                </div>
                                <div class="card-body">
                                    <a class = "btn btn-success btn-round animation-on-hover " href="{{ route('colonias.index') }}">Colonias</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-12">
                            <div class="card ">
                                <div class="card-header">
                                    <h4 class="card-title">Ciudades</h4>
                                </div>
                                <div class="card-body">
                                    <a class = "btn btn-success btn-round animation-on-hover " href="{{ route('ciudades.index') }}">Ciudades</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
