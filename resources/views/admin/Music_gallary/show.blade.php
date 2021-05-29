@extends('layouts.dashboard_app')
@section('title')
    Update | Music Gallery | Dashboard
@endsection
@section('gallery')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('gallery.index') }}">Music Gallery</a>
        <a class="breadcrumb-item active">Update Music Gallery</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update Music Gallery</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_gallery'))
                    <div class="alert alert-success">{{ session('update_gallery') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update Music Gallery</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('gallery.update', $info->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Youtube Link</label>
                          <input type="text" class="form-control" name="youtube_link" value="{{ $info->youtube_link }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Video Thumbnail</label>
                          <input type="file" class="form-control" name="video_thumbnail">
                        </div>
                        <img style="height: 25px; width: 50px;" src="{{ asset('uploads/gallery_thumbnail') }}/{{ $info->video_thumbnail }}" alt="">
                        <br>
                        <br>
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