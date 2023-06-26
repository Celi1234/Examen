@extends('layouts.app')

@section('template_title')
    {{ $campaign->name ?? "{{ __('Show') Campaign" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Campaign</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('campaigns.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $campaign->name }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $campaign->type }}
                        </div>
                        <div class="form-group">
                            <strong>Id Travelers:</strong>
                            {{ $campaign->id_travelers }}
                        </div>
                        <div class="form-group">
                            <strong>Id Agents:</strong>
                            {{ $campaign->id_agents }}
                        </div>
                        <div class="form-group">
                            <strong>Id Routes:</strong>
                            {{ $campaign->id_routes }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tourguides:</strong>
                            {{ $campaign->id_tourguides }}
                        </div>
                        <div class="form-group">
                            <strong>Id Buses:</strong>
                            {{ $campaign->id_buses }}
                        </div>
                        <div class="form-group">
                            <strong>Id Offers:</strong>
                            {{ $campaign->id_offers }}
                        </div>
                        <div class="form-group">
                            <strong>Id Marks:</strong>
                            {{ $campaign->id_marks }}
                        </div>
                        <div class="form-group">
                            <strong>Id Drivers:</strong>
                            {{ $campaign->id_drivers }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
