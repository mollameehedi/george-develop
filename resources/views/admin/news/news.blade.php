@extends('layouts.dashboard_app')
@section('title')
    Contact Message | Dashboard
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
        <a class="breadcrumb-item active">Events Upcoming</a>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Events Upcoming</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-8 pt-5">
                    @if (session('delete_succes'))
                        <div class="alert alert-danger">
                            {{ session('delete_succes') }}
                        </div>
                    @endif
                    @if (session('event_status_success'))
                        <div class="alert alert-success">
                            {{ session('event_status_success') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Name</th>
                                <th>Start</th>
                                <th>Door Open</th>
                                <th>Show Start</th>
                                <th>Ticket Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                            <tr>
                                <td>{{ $event->event_name }}</td>
                                <td>{{ $event->start_from }}</td>
                                <td>{{ $event->door_open }}</td>
                                <td>{{ $event->show_start }}</td>
                                <td>{{ $event->ticket_price }}</td>
                                <td>
                                    <a href="{{ route('event.move', $event->id) }}" class="btn btn-info">Active</a>


                                    <a href="{{ route('event.delete', $event->id) }}" class="btn btn-danger">Delete</a>

                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="50">{{ $events->links() }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div> --}}
                <div class="col-lg-4">

                    <div class="card">
                        <div class="card-header">Add Events</div>
                        <div class="card-body">
                            @if (session('event_add_success'))
                            <div class="alert alert-success">{{ session('event_add_success') }}</div>
                            @endif
                    <form method="POST" action="{{ route('event.store') }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">News Title</label>
                          <input type="text" class="form-control" name="news_title" placeholder="Enter your Event Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Event Location </label>
                            <input type="text" class="form-control" name="event_location" placeholder="Enter your  event name">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Event Description </label>
                           <textarea name="event_desctiption" class="form-control" placeholder="Enter Your Event Desctiption" rows="5"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Ticket Price </label>
                            <input type="number" class="form-control" name="ticket_price" placeholder="Enter your  Ticket Price">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Event Photo </label>
                            <input type="file" class="form-control" name="event_photo" accept="img">
                          </div>

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
