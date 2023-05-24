@extends('layouts.app')

@section('template_title')
    Organization
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Organization') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('organizations.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Jobs Id</th>
										<th>Organization Name</th>
										<th>Order Day</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($organizations as $organization)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $organization->jobs_id }}</td>
											<td>{{ $organization->organization_name }}</td>
											<td>{{ $organization->Order_Day }}</td>

                                            <td>
                                                <form action="{{ route('organizations.destroy',$organization->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('organizations.show',$organization->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('organizations.edit',$organization->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $organizations->links() !!}
            </div>
        </div>
    </div>
@endsection
