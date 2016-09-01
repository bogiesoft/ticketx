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
        <li class="active">Permissions</li>
      </ol>
    </section>


    <section class="content">
        
        @include('admin.layouts.partials.alerts')

          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Permissions</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="box-body table-responsive">
  <div class="col-md-12">                
	<table class="table table-hover" id="permissiontable">
	    <thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Display Name</th>
			<th>Description</th>
		</tr>
		</thead>
		<tbody>
	@foreach ($permissions as $key => $permission)
	<tr>
		<td>{{ ++$i }}</td>
		<td><a href="{{ route('permissions.show',$permission->id) }}">{{ $permission->name }}</a></td>
	    <td>{{ $permission->display_name }}</td>		
		<td>{{ $permission->description }}</td>
	</tr>
	@endforeach
	</tbody>
	</table>
	
	</div>
        </div>
          </div>
          <a class="btn bg-purple" href="{{ route('permissions.create') }}"> Create New Permission</a>
    </section>
  </div>

@push('scripts') 
 <script>
   $(function () {
     $("#permissiontable").DataTable();
   });
 </script>  
 @endpush

@endsection