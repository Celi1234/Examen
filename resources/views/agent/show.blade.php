@extends('layouts.app')

@section('template_title')
    {{ $agent->name ?? "{{ __('Show') Agent" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Agent</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('agents.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $agent->name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $agent->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Phone Number:</strong>
                            {{ $agent->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $agent->age }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $agent->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $agent->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
