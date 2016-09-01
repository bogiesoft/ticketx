@extends('layouts.master')

@section('title', 'My tickets')

@section('content')

  <div class="content-wrapper">
    <div class="container">
        
      <section class="content-header">
        <h1>
          {{ site_name() }}
          <small>My tickets</small>
        </h1>
      </section>
      
      <section class="content">

        @include('layouts.partials.alerts')

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-ticket"> #{{ $ticket->ticket_id }} - {{ $ticket->title }}</i></h3>
            </div>
            <div class="box-body">

                        <p>Categry: {{ $category->name }}</p>
                        <p>Status: 
                                        @if ($status->id === $ticket->status_id)
                                            @if ($status->id === 1)
                                            <span class="label label-info"> {{ $status->name }}</span>
                                            @elseif ($status->id === 2)
                                            <span class="label label-warning"> {{ $status->name }}</span>
                                            @elseif ($status->id === 3)
                                            <span class="label label-success"> {{ $status->name }}</span>
                                            @else
                                            <span class="label label-danger"> {{ $status->name }}</span>
                                            @endif                                     
                                        @endif
                        </p>
                        <p>Priority: 
                                        @if ($priority->id === $ticket->priority_id)
                                            @if ($priority->id === 1)
                                            <span class="bg-danger"> {{ $priority->name }}</span>
                                            @elseif ($priority->id === 2)
                                            <span class="bg-success"> {{ $priority->name }}</span>
                                            @else 
                                            <span class="bg-info"> {{ $priority->name }}</span>
                                            @endif                                        
                                        @endif                        
                        </p>
                        <p>Created: {{ $ticket->created_at->diffForHumans() }}</p>
                        <p>Last Updated: {{ $ticket->updated_at->diffForHumans() }}</p>
                        <p>Message: <i><h4>{!! $ticket->message !!}</h4></i></p>                        

                    <hr>
                    

           <div class="box-body chat" id="chat-box">

                   @if ($comments->isEmpty())
                        <p>There is no comments yet</p>
                    @else

            @foreach ($comments as $comment)   
 
            
              <!-- chat item -->
              <div class="item">
                <img src="{{ $comment->user->getAvatarUrl() }}" alt="user image" class="@if($ticket->user->id === $comment->user_id){{"online"}}@else{{"offline"}}@endif">

                <div class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{ $comment->created_at->diffForHumans() }}</small>
                    {{ $comment->user->fullname }}
                  </a>
                {!! $comment->comment !!}    
                </div>

              </div>
              <!-- /.item -->
              
              <hr>
              
            @endforeach              
 @endif
            </div>
            <!-- /.chat -->
 
@if ($ticket->status_id === 3)
                        <form action="{{ url('reopen/' . $ticket->ticket_id) }}" method="POST" class="form">
                            {!! csrf_field() !!}
                            <button type="submit" class="btn bg-purple">Reopen</button>
                            </form>            
@else

                        <form action="{{ url('comment') }}" method="POST" class="form">
                            {!! csrf_field() !!}
                    
                            <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
                    
                            <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                <textarea rows="10" id="summernote" class="form-control" name="comment"></textarea>
                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                    
                            <div class="form-group">
                                <button type="submit" class="btn bg-purple">Publish comment</button>
                            </div>
                        </form>
          </div>
          <!-- /.box (chat box) -->

@endif

        </div>
      </section> 
    </div>
  </div>
@endsection