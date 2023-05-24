@extends('layouts.app')

@section('template_title')
    {{ $organization->name ?? "{{ __('Show') Organization" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Organization</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('organizations.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Jobs Id:</strong>
                            {{ $organization->jobs_id }}
                        </div>
                        <div class="form-group">
                            <strong>Organization Name:</strong>
                            {{ $organization->organization_name }}
                        </div>
                        <div class="form-group">
                            <strong>Order Day:</strong>
                            {{ $organization->Order_Day }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
