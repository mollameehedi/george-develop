@extends('layouts.dashboard_app')
@section('title')
    Update | events | Dashboard
@endsection
@section('eventupcoming')
    active
@endsection
@section('event')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('event.upcoming') }}">Update </a>
        <a class="breadcrumb-item active">Update events</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update | events</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    

                    <div class="card">
                        <div class="card-header">Update Events</div>
                        <div class="card-body">
                            @if (session('update_event'))
                            <div class="alert alert-success">{{ session('update_event') }}</div>
                            @endif
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                    <form method="POST" action="{{ route('event.update.post', $info->id) }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Event Name</label>
                          <input type="text" class="form-control" name="event_name"  value="{{ $info->event_name }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Starts from</label>
                          <input type="date" class="form-control" name="start_from" value="{{ $info->start_from }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Door Open</label>
                          <input type="time" class="form-control" name="door_open" value="{{ $info->door_open }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Show Start</label>
                          <input type="time" class="form-control" name="show_start"  value="{{ $info->show_start }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Event Location </label>
                            <input type="text" class="form-control" name="event_location" value="{{ $info->event_location }}">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Event Description </label>
                           <textarea name="event_desctiption" class="form-control" rows="5">{{ $info->event_desctiption }}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Ticket Price </label>
                            <input type="number" class="form-control" name="ticket_price" value="{{ $info->ticket_price }}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Event Photo </label>
                            <input type="file" class="form-control" name="event_photo" accept="img">
                          </div>
                          <img style="height: 50px; width: 100px;" src="{{ asset('uploads/event_photo') }}/{{ $info->event_photo }}" alt="">
                          <br>
                          <br>

                        <button type="submit" class="btn btn-info">Submit</button>
                      </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection