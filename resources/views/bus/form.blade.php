<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('bus_name') }}
            {{ Form::text('bus_name', $bus->bus_name, ['class' => 'form-control' . ($errors->has('bus_name') ? ' is-invalid' : ''), 'placeholder' => 'Bus Name']) }}
            {!! $errors->first('bus_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('brand') }}
            {{ Form::text('brand', $bus->brand, ['class' => 'form-control' . ($errors->has('brand') ? ' is-invalid' : ''), 'placeholder' => 'Brand']) }}
            {!! $errors->first('brand', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('plate') }}
            {{ Form::text('plate', $bus->plate, ['class' => 'form-control' . ($errors->has('plate') ? ' is-invalid' : ''), 'placeholder' => 'Plate']) }}
            {!! $errors->first('plate', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>