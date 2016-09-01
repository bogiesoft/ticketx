@extends('admin.layouts.master')
 
@section('content')

  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Admin
        <small>Permissions</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Show Permissions</li>
      </ol>
    </section>

    <section class="content">
        
        @include('admin.layouts.partials.alerts')

          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Show Permissions</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="box-body">
                
            <div class="form-group">
                <strong>Name:</strong>
                {{ $permission->name }}
            </div>

            <div class="form-group">
                <strong>Display Name:</strong>
                {{ $permission->display_name }}
            </div>

            <div class="form-group">
                <strong>Description:</strong>
                {{ $permission->description }}
            </div>
			<a class="btn bg-purple" href="{{ route('permissions.edit',$permission->id) }}"><i class="fa fa-edit"> Edit</i></a>
			{!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline','class'=>'delete']) !!}
            {{ Form::button('<i class="fa fa-remove"> Delete</i>', array('class'=>'btn btn-danger', 'type'=>'submit')) }}
        	{!! Form::close() !!}
        </div>
          </div>	
    </section>
  </div>

@endsection