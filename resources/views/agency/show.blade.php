@extends('layouts.app')

@section('template_title')
    {{ $agency->name ?? "{{ __('Show') Agency" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Agency</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('agencies.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $agency->name }}
                        </div>
                        <div class="form-group">
                            <strong>Direction:</strong>
                            {{ $agency->direction }}
                        </div>
                        <div class="form-group">
                            <strong>Type Of Transport:</strong>
                            {{ $agency->type_of_transport }}
                        </div>
                        <div class="form-group">
                            <strong>Id Agents:</strong>
                            {{ $agency->id_agents }}
                        </div>
                        <div class="form-group">
                            <strong>Id Buses:</strong>
                            {{ $agency->id_buses }}
                        </div>
                        <div class="form-group">
                            <strong>Id Drivers:</strong>
                            {{ $agency->id_drivers }}
                        </div>
                        <div class="form-group">
                            <strong>Id Ticketagents:</strong>
                            {{ $agency->id_ticketagents }}
                        </div>
                        <div class="form-group">
                            <strong>Id Routes:</strong>
                            {{ $agency->id_routes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
