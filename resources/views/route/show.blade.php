@extends('layouts.app')

@section('template_title')
    {{ $route->name ?? "{{ __('Show') Route" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Route</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('routes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Route Type:</strong>
                            {{ $route->route_type }}
                        </div>
                        <div class="form-group">
                            <strong>Route Name:</strong>
                            {{ $route->route_name }}
                        </div>
                        <div class="form-group">
                            <strong>Route Direction:</strong>
                            {{ $route->route_direction }}
                        </div>
                        <div class="form-group">
                            <strong>Map:</strong>
                            {{ $route->map }}
                        </div>
                        <div class="form-group">
                            <strong>Tourist Attraction:</strong>
                            {{ $route->tourist_attraction }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
