<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('jobs_id') }}
            {{ Form::text('jobs_id', $organization->jobs_id, ['class' => 'form-control' . ($errors->has('jobs_id') ? ' is-invalid' : ''), 'placeholder' => 'Jobs Id']) }}
            {!! $errors->first('jobs_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('organization_name') }}
            {{ Form::text('organization_name', $organization->organization_name, ['class' => 'form-control' . ($errors->has('organization_name') ? ' is-invalid' : ''), 'placeholder' => 'Organization Name']) }}
            {!! $errors->first('organization_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Order_Day') }}
            {{ Form::text('Order_Day', $organization->Order_Day, ['class' => 'form-control' . ($errors->has('Order_Day') ? ' is-invalid' : ''), 'placeholder' => 'Order Day']) }}
            {!! $errors->first('Order_Day', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>