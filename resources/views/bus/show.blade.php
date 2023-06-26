@extends('layouts.app')

@section('template_title')
    {{ $bus->name ?? "{{ __('Show') Bus" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Bus</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('buses.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Bus Name:</strong>
                            {{ $bus->bus_name }}
                        </div>
                        <div class="form-group">
                            <strong>Brand:</strong>
                            {{ $bus->brand }}
                        </div>
                        <div class="form-group">
                            <strong>Plate:</strong>
                            {{ $bus->plate }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
