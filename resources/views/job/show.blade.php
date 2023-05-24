@extends('layouts.app')

@section('template_title')
    {{ $job->name ?? "{{ __('Show') Job" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Job</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('jobs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Job Name:</strong>
                            {{ $job->job_name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $job->description }}
                        </div>
                        <div class="form-group">
                            <strong>Started At:</strong>
                            {{ $job->started_at }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
