@extends('admin.layouts.master')

@section('content')

   <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Admin
                <small>Dashboard</small>
            </h1>
      
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            </ol>
        </section>


    <section class="content">
        
        @include('admin.layouts.partials.alerts')

    
    @permission('manage-tickets')
      <div class="row">
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-folder-open"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Open Tickets</span>
              <span class="info-box-number">{{ $count_open_ticket }}</span>
            </div>
          </div>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Closed Tickets</span>
              <span class="info-box-number">{{ $count_closed_ticket }}</span>
            </div>
          </div>
        </div>
 
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-folder"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">In Progress</span>
              <span class="info-box-number">{{ $count_inprogress_ticket }}</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-history"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Reopened</span>
              <span class="info-box-number">{{ $count_reopened_ticket }}</span>
            </div>
          </div>
        </div>
        
     </div>
     @endpermission
     
      <div class="row">
          
        @permission('manage-permissions')
        <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-teal">
            <div class="inner">
              <h3>{{ $count_permissions }}</h3>
              <p>Permissions</p>
            </div>
            <div class="icon">
              <i class="fa fa-key"></i>
            </div>
            <a href="{{ route('permissions.index') }}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        @endpermission

        @permission('manage-users')
        <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3>{{ $count_users }}</h3>
              <p>Users</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="{{ route('users.index') }}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        @endpermission
        
        @permission('manage-roles')
        <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>{{ $count_roles }}</h3>
              <p>Roles</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="{{ route('roles.index') }}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        @endpermission
      </div>
    </section>
   </div>

@stop