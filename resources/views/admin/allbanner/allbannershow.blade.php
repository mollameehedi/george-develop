@extends('layouts.dashboard_app')
@section('title')
    All Banner | Dashboard
@endsection
@section('banner')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Home Banner</a>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>{{ $banner->page_name }} Update</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-header">{{ $banner->page_name }} Update</div>
                        <div class="card-body">
                            <img style="height: 50px; width: 100px;" src="{{ asset('uploads/allbannerbg') }}/{{ $banner->banner_bg }}" alt="">
                    <form method="POST" action="{{ route('all.banner.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" value="{{ $banner->id }}" name="id">
                          <input type="file" class="form-control" name="banner_bg">
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
