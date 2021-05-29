@extends('layouts.dashboard_app')
@section('title')
    Update | Home Banner | Dashboard
@endsection
@section('banner')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('banner.index') }}">Home Banner</a>
        <a class="breadcrumb-item active">Update Home Banner</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update Home Banner</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_banner'))
                    <div class="alert alert-success">{{ session('update_banner') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update Banner</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('banner.update', $info->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Banner Heading</label>
                          <input type="text" class="form-control" name="heading" value="{{ $info->heading }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Banner BG</label>
                          <input type="file" class="form-control" name="banner_bg">
                        </div>
                        <img style="height: 25px; width: 50px;" src="{{ asset('uploads/banner_bg') }}/{{ $info->banner_bg }}" alt="">
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