<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('job_name') }}
            {{ Form::text('job_name', $job->job_name, ['class' => 'form-control' . ($errors->has('job_name') ? ' is-invalid' : ''), 'placeholder' => 'Job Name']) }}
            {!! $errors->first('job_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $job->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('started_at') }}
            {{ Form::text('started_at', $job->started_at, ['class' => 'form-control' . ($errors->has('started_at') ? ' is-invalid' : ''), 'placeholder' => 'Started At']) }}
            {!! $errors->first('started_at', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>