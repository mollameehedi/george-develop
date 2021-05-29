@extends('layouts.dashboard_app')
@section('title')
    Events | Dashboard
@endsection
@section('event')
    active
@endsection
@section('event_main')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Events</a>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Events</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pt-5">
                    @if (session('delete_succes'))
                        <div class="alert alert-danger">
                            {{ session('delete_succes') }}
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
                                    <a href="{{ route('event.move', $event->id) }}" class="btn btn-warning">Off</a>
                                    <a href="{{ route('event.delete', $event->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="50">{{ $events->links() }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection
