@extends('layouts.dashboard_app')
@section('title')
    Testimonials | Dashboard
@endsection
@section('testimonialupcoming')
    active
@endsection
@section('testimonial')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">testimonials Upcoming</a>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>testimonials Upcoming</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pt-5">
                    @if (session('delete_status'))
                        <div class="alert alert-danger">
                            {{ session('delete_status') }}
                        </div>
                    @endif
                    @if (session('testimonial_status_success'))
                        <div class="alert alert-success">
                            {{ session('testimonial_status_success') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Client Name</th>
                                <th>Service Name</th>
                                <th>Ster</th>
                                <th>Show Start</th>
                                <th>What Client Say</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonials as $testimonial)
                            <tr>
                                <td>{{ $testimonial->client_name }}</td>
                                <td>{{ $testimonial->service_name }}</td>
                                <td>{{ $testimonial->ster }}</td>
                                <td>{{ $testimonial->what_client_say }}</td>
                                <td>
                                    <img src="{{ asset('uploads/client_photo') }}/{{ $testimonial->client_photo }}" class="img-fluid" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('testimonial.delete', $testimonial->id) }}" class="btn btn-danger">Delete</a>

                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="50">{{ $testimonials->links() }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="col-lg-4">

                    <div class="card">
                        <div class="card-header">Add testimonials</div>
                        <div class="card-body">
                            @if (session('testi_added'))
                            <div class="alert alert-success">{{ session('testi_added') }}</div>
                            @endif
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                    <form method="POST" action="{{ route('testimonial.store') }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Client Name</label>
                          <input type="text" class="form-control" name="client_name" placeholder="Enter your Client Name">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">service Name</label>
                          <input type="text" class="form-control" name="service_name" placeholder="Enter your Service Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Ster </label>
                            <select name="ster" class="form-control" id="">
                                <option value="">Select a option</option>
                                <option value="1">One Ster</option>
                                <option value="2">Two Ster</option>
                                <option value="3">Three Ster</option>
                                <option value="4">Four Ster</option>
                                <option value="5">Five Ster</option>
                            </select>
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">What client say</label>
                           <textarea name="what_client_say" class="form-control" placeholder="What client say" rows="5"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1"> Client Photo </label>
                            <input type="file" class="form-control" name="client_photo" accept="img">
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
