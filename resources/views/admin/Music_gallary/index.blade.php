@extends('layouts.dashboard_app')
@section('title')
    Music Gallery | Dashboard
@endsection
@section('gallery')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Music Gallery</a>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Music Gallery</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Heading</th>
                                <th>Sub Heading</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $heading->heading }}</td>
                                <td>{{ $heading->sub_heading }}</td>
                                <td>
                                    <a href="{{ route('musicgalleryheadingupdate', $heading->id) }}" class="btn btn-info">Update</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @if (session('delete_gallery'))
                    <div class="alert alert-danger">{{ session('delete_gallery') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>No</th>
                                <th>Youtube link</th>
                                <th>Video Thumbnail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $gallery)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $gallery->youtube_link }}</td>
                                <td>
                                    <img style="height: 50px; width: 100px;" src="{{ asset('uploads/gallery_thumbnail') }}/{{ $gallery->video_thumbnail }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('gallery.show', $gallery->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('gallery.destroy', $gallery->id)  }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                    @if (session('add_gallery'))
                    <div class="alert alert-success">{{ session('add_gallery') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add Music Gallery</div>
                        <div class="card-body">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                    <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Youtube link</label>
                          <input type="text" class="form-control" name="youtube_link" placeholder="Enter youtube link">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Video thumbnail</label>
                          <input type="file" class="form-control" name="video_thumbnail">
                        </div>
                        <button type="submit" class="btn btn-warning">Submit</button>
                      </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection
