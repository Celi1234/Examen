<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('route_type') }}
            {{ Form::text('route_type', $route->route_type, ['class' => 'form-control' . ($errors->has('route_type') ? ' is-invalid' : ''), 'placeholder' => 'Route Type']) }}
            {!! $errors->first('route_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('route_name') }}
            {{ Form::text('route_name', $route->route_name, ['class' => 'form-control' . ($errors->has('route_name') ? ' is-invalid' : ''), 'placeholder' => 'Route Name']) }}
            {!! $errors->first('route_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('route_direction') }}
            {{ Form::text('route_direction', $route->route_direction, ['class' => 'form-control' . ($errors->has('route_direction') ? ' is-invalid' : ''), 'placeholder' => 'Route Direction']) }}
            {!! $errors->first('route_direction', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('map') }}
            {{ Form::text('map', $route->map, ['class' => 'form-control' . ($errors->has('map') ? ' is-invalid' : ''), 'placeholder' => 'Map']) }}
            {!! $errors->first('map', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tourist_attraction') }}
            {{ Form::text('tourist_attraction', $route->tourist_attraction, ['class' => 'form-control' . ($errors->has('tourist_attraction') ? ' is-invalid' : ''), 'placeholder' => 'Tourist Attraction']) }}
            {!! $errors->first('tourist_attraction', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>