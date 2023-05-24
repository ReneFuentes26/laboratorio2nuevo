@extends('layouts.app')

@section('template_title')
    {{ $study->name ?? "{{ __('Show') Study" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Study</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('studies.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Subject Name:</strong>
                            {{ $study->subject_name }}
                        </div>
                        <div class="form-group">
                            <strong>Difficulty:</strong>
                            {{ $study->difficulty }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
