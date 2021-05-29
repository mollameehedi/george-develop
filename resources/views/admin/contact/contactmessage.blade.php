@extends('layouts.dashboard_app')
@section('title')
    Contact Message | Dashboard
@endsection
@section('contact')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Contact Message</a>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Contact Messges</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Map Embed code</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $map->map }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Map Update</div>
                        <div class="card-body">
                            @if (session('map_updeted'))
                            <div class="alert alert-success">{{ session('map_updeted') }}</div>
                            @endif
                    <form method="POST" action="{{ route('message.store') }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Map Embed Link</label>
                          <input type="text" class="form-control" name="map" value="{{ $map->map }}" placeholder="Enter Map Embed link">
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                      </form>
                        </div>
                      </div>
                </div>

                <div class="col-lg-12 m-auto pt-5">
                    @if (session('delete_succes'))
                        <div class="alert alert-danger">
                            {{ session('delete_succes') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Name</th>
                                <th>Created At</th>
                                <th>Subject</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->created_at }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>
                                    <a href="{{ route('contact_message.view', $contact->id) }}" class="btn btn-info">view</a>
                                    <a href="{{ route('contact_message.delete', $contact->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="50">{{ $contacts->links() }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection
