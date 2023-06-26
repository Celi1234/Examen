@extends('layouts.app')

@section('template_title')
    {{ $traveler->name ?? "{{ __('Show') Traveler" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Traveler</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('travelers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $traveler->name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $traveler->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $traveler->age }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $traveler->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Identification:</strong>
                            {{ $traveler->identification }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
