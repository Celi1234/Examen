@extends('layouts.app')

@section('template_title')
    Agency
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Agency') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('agencies.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Direction</th>
										<th>Type Of Transport</th>
										<th>Id Agents</th>
										<th>Id Buses</th>
										<th>Id Drivers</th>
										<th>Id Ticketagents</th>
										<th>Id Routes</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agencies as $agency)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $agency->Nombre }}</td>
											<td>{{ $agency->Dirección }}</td>
											<td>{{ $agency->tipo }}</td>
											<td>{{ $agency->id_agente }}</td>
											<td>{{ $agency->id_bus }}</td>
											<td>{{ $agency->id_conductores}}</td>
											<td>{{ $agency->id_Agente }}</td>
											<td>{{ $agency->id_Rutas }}</td>

                                            <td>
                                                <form action="{{ route('agencies.destroy',$agency->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('agencies.show',$agency->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('agencies.edit',$agency->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $agencies->links() !!}
            </div>
        </div>
    </div>
@endsection
