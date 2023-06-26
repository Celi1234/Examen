<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $agency->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direction') }}
            {{ Form::text('direction', $agency->direction, ['class' => 'form-control' . ($errors->has('direction') ? ' is-invalid' : ''), 'placeholder' => 'Direction']) }}
            {!! $errors->first('direction', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type_of_transport') }}
            {{ Form::text('type_of_transport', $agency->type_of_transport, ['class' => 'form-control' . ($errors->has('type_of_transport') ? ' is-invalid' : ''), 'placeholder' => 'Type Of Transport']) }}
            {!! $errors->first('type_of_transport', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_agents') }}
            {{ Form::text('id_agents', $agency->id_agents, ['class' => 'form-control' . ($errors->has('id_agents') ? ' is-invalid' : ''), 'placeholder' => 'Id Agents']) }}
            {!! $errors->first('id_agents', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_buses') }}
            {{ Form::text('id_buses', $agency->id_buses, ['class' => 'form-control' . ($errors->has('id_buses') ? ' is-invalid' : ''), 'placeholder' => 'Id Buses']) }}
            {!! $errors->first('id_buses', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_drivers') }}
            {{ Form::text('id_drivers', $agency->id_drivers, ['class' => 'form-control' . ($errors->has('id_drivers') ? ' is-invalid' : ''), 'placeholder' => 'Id Drivers']) }}
            {!! $errors->first('id_drivers', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_ticketagents') }}
            {{ Form::text('id_ticketagents', $agency->id_ticketagents, ['class' => 'form-control' . ($errors->has('id_ticketagents') ? ' is-invalid' : ''), 'placeholder' => 'Id Ticketagents']) }}
            {!! $errors->first('id_ticketagents', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_routes') }}
            {{ Form::text('id_routes', $agency->id_routes, ['class' => 'form-control' . ($errors->has('id_routes') ? ' is-invalid' : ''), 'placeholder' => 'Id Routes']) }}
            {!! $errors->first('id_routes', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>