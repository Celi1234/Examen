<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $campaign->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type') }}
            {{ Form::text('type', $campaign->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_travelers') }}
            {{ Form::text('id_travelers', $campaign->id_travelers, ['class' => 'form-control' . ($errors->has('id_travelers') ? ' is-invalid' : ''), 'placeholder' => 'Id Travelers']) }}
            {!! $errors->first('id_travelers', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_agents') }}
            {{ Form::text('id_agents', $campaign->id_agents, ['class' => 'form-control' . ($errors->has('id_agents') ? ' is-invalid' : ''), 'placeholder' => 'Id Agents']) }}
            {!! $errors->first('id_agents', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_routes') }}
            {{ Form::text('id_routes', $campaign->id_routes, ['class' => 'form-control' . ($errors->has('id_routes') ? ' is-invalid' : ''), 'placeholder' => 'Id Routes']) }}
            {!! $errors->first('id_routes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tourguides') }}
            {{ Form::text('id_tourguides', $campaign->id_tourguides, ['class' => 'form-control' . ($errors->has('id_tourguides') ? ' is-invalid' : ''), 'placeholder' => 'Id Tourguides']) }}
            {!! $errors->first('id_tourguides', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_buses') }}
            {{ Form::text('id_buses', $campaign->id_buses, ['class' => 'form-control' . ($errors->has('id_buses') ? ' is-invalid' : ''), 'placeholder' => 'Id Buses']) }}
            {!! $errors->first('id_buses', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_offers') }}
            {{ Form::text('id_offers', $campaign->id_offers, ['class' => 'form-control' . ($errors->has('id_offers') ? ' is-invalid' : ''), 'placeholder' => 'Id Offers']) }}
            {!! $errors->first('id_offers', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_marks') }}
            {{ Form::text('id_marks', $campaign->id_marks, ['class' => 'form-control' . ($errors->has('id_marks') ? ' is-invalid' : ''), 'placeholder' => 'Id Marks']) }}
            {!! $errors->first('id_marks', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_drivers') }}
            {{ Form::text('id_drivers', $campaign->id_drivers, ['class' => 'form-control' . ($errors->has('id_drivers') ? ' is-invalid' : ''), 'placeholder' => 'Id Drivers']) }}
            {!! $errors->first('id_drivers', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>