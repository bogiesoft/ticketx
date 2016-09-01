@extends('admin.layouts.master')
 
@section('content')

  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Admin
        <small>Roles</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Show Roles</li>
      </ol>
    </section>


    <section class="content">
        
        @include('admin.layouts.partials.alerts')

          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Show Role</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="box-body">
                
            <div class="form-group">
                <strong>Name:</strong>
                {{ $role->name }}
            </div>

            <div class="form-group">
                <strong>Display Name:</strong>
                {{ $role->display_name }}
            </div>

            <div class="form-group">
                <strong>Description:</strong>
                {{ $role->description }}
            </div>

            <div class="form-group">
                <strong>Permissions:</strong>
                @if(!empty($rolePermissions))
					@foreach($rolePermissions as $v)
						<label class="label label-success">{{ $v->display_name }}</label>
					@endforeach
				@endif
            </div>
            
			<a class="btn bg-purple" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-edit"></i> Edit</a>
			{!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline','class'=>'delete']) !!}
            {{ Form::button('<i class="fa fa-remove"> Delete</i>', array('class'=>'btn btn-danger', 'type'=>'submit')) }}
        	{!! Form::close() !!}
        
        </div>
          </div>	
    </section>
  </div>

@endsection