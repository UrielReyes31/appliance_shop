@extends('layouts.app', ['page' => __('indexCI'), 'pageSlug' => 'indexCI'])
@section('content')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ciudad') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ciudades.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>id</th>
                                        
										<th>Nombre Ciudad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ciudads as $ciudad)
                                        <tr>
                                            <td>{{ $ciudad->id }}</td>
                                            
											<td>{{ $ciudad->Nombre_ciudad }}</td>

                                            <td>
                                                <form action="{{ route('ciudades.destroy',$ciudad->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ciudades.show',$ciudad->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ciudades.edit',$ciudad->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $ciudads->links() !!}
            </div>
        </div>
    </div>
@endsection
