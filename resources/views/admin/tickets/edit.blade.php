@extends('admin.layouts.master')

@section('content')

  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Admin
        <small>Tickets</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Edit Tickets</li>
      </ol>
    </section>


    <section class="content">
        
        @include('admin.layouts.partials.alerts')

          <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-ticket"> Edit Ticket</i></h3>
            </div>
            <div class="box-body">

                    {!! Form::model($tickets, ['method' => 'PATCH','route' => ['managetickets.update', $tickets->ticket_id]]) !!}
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <strong>Category:</strong>
                                        {{ Form::select('category',$categories,$tickets->category_id,['class'=>'form-control'])}}
                                    </div>

                        <div class="form-group">
                            <strong>Priority:</strong>
                                        {{ Form::select('priority',$prioritys,$tickets->priority_id,['class'=>'form-control'])}}
                                    </div>

                        <div class="form-group">
                          <strong>Status:</strong>
                                {{ Form::select('status',$statuses,$tickets->status_id,['class'=>'form-control'])}}
                                    </div>

                        <div class="form-group">
                                <button type="submit" class="btn bg-purple">
                                    <i class="fa fa-btn fa-ticket"></i> Edit Ticket
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
      </section> 
    </div>
  </div>
@endsection