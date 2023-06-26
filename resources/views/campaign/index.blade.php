@extends('layouts.app')

@section('template_title')
    Campaign
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Campaign') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('campaigns.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Type</th>
										<th>Id Travelers</th>
										<th>Id Agents</th>
										<th>Id Routes</th>
										<th>Id Tourguides</th>
										<th>Id Buses</th>
										<th>Id Offers</th>
										<th>Id Marks</th>
										<th>Id Drivers</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($campaigns as $campaign)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $campaign->name }}</td>
											<td>{{ $campaign->type }}</td>
											<td>{{ $campaign->id_travelers }}</td>
											<td>{{ $campaign->id_agents }}</td>
											<td>{{ $campaign->id_routes }}</td>
											<td>{{ $campaign->id_tourguides }}</td>
											<td>{{ $campaign->id_buses }}</td>
											<td>{{ $campaign->id_offers }}</td>
											<td>{{ $campaign->id_marks }}</td>
											<td>{{ $campaign->id_drivers }}</td>

                                            <td>
                                                <form action="{{ route('campaigns.destroy',$campaign->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('campaigns.show',$campaign->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('campaigns.edit',$campaign->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $campaigns->links() !!}
            </div>
        </div>
    </div>
@endsection
