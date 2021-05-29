@extends('layouts.dashboard_app')
@section('title')
   Home | About  | Dashboard
@endsection
@section('allbanner')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('about.event.photo') }}">About and event photo</a>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>About Event Photo</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pt-5">
                    @if (session('about_update_success'))
                            <div class="alert alert-success">{{ session('about_update_success') }}</div>
                            @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>About Photo</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img style="width: 300px;height:250px" src="{{ asset('uploads/abouteventphoto') }}/{{ $about_photo->about_photo }}" class="img-fluid" height="250" alt="">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="col-lg-4 m-auto">

                    <div class="card">
                        <div class="card-header">Update About</div>
                        <div class="card-body">
                            @if (session('about_update_success'))
                            <div class="alert alert-success">{{ session('about_update_success') }}</div>
                            @endif
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                    <form method="POST" action="{{ route('about.photo.update') }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1"> about Photo </label>
                            <input type="file" class="form-control" name="about_photo" accept="img">
                          </div>

                        <button type="submit" class="btn btn-info">Changer</button>
                      </form>
                        </div>
                      </div>
                </div>
                <div class="col-lg-8 pt-5">
                    @if (session('about_update_success'))
                            <div class="alert alert-success">{{ session('about_update_success') }}</div>
                            @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Event Photo</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img style="width: 300px;height:250px" src="{{ asset('uploads/abouteventphoto') }}/{{ $event_photo->event_photo }}" class="img-fluid"  alt="">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="col-lg-4 m-auto">

                    <div class="card">
                        <div class="card-header">Update Event Photo</div>
                        <div class="card-body">
                            @if (session('about_update_success'))
                            <div class="alert alert-success">{{ session('about_update_success') }}</div>
                            @endif
                    <form method="POST" action="{{ route('event.photo.update') }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Event Photo </label>
                            <input type="file" class="form-control" name="event_photo" accept="img">
                          </div>

                        <button type="submit" class="btn btn-info">Changer</button>
                      </form>
                        </div>
                      </div>
                </div>


            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection
