<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('subject_name') }}
            {{ Form::text('subject_name', $study->subject_name, ['class' => 'form-control' . ($errors->has('subject_name') ? ' is-invalid' : ''), 'placeholder' => 'Subject Name']) }}
            {!! $errors->first('subject_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('difficulty') }}
            {{ Form::text('difficulty', $study->difficulty, ['class' => 'form-control' . ($errors->has('difficulty') ? ' is-invalid' : ''), 'placeholder' => 'Difficulty']) }}
            {!! $errors->first('difficulty', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>