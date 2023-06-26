@extends('layouts.app')

@section('template_title')
    Agent
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Agent') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('agents.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Last Name</th>
										<th>Phone Number</th>
										<th>Age</th>
										<th>Gender</th>
										<th>Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agents as $agent)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $agent->Nombre }}</td>
											<td>{{ $agent->Apellido }}</td>
											<td>{{ $agent->Número}}</td>
											<td>{{ $agent->Edad }}</td>
											<td>{{ $agent->genero }}</td>
											<td>{{ $agent->Email}}</td>

                                            <td>
                                                <form action="{{ route('agents.destroy',$agent->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('agents.show',$agent->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('agents.edit',$agent->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $agents->links() !!}
            </div>
        </div>
    </div>
@endsection
