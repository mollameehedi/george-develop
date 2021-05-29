@extends('layouts.dashboard_app')
@section('title')
    Update | Music Gallery Heading | Dashboard
@endsection
@section('gallery')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('gallery.index') }}">Music Gallery Heading</a>
        <a class="breadcrumb-item active">Update Music Gallery Heading</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update Music Gallery Heading</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_heading'))
                    <div class="alert alert-success">{{ session('update_heading') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update Music Gallery Heading</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('musicgalleryheadingupdatepost', $info->id) }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Heading</label>
                          <input type="text" class="form-control" name="heading" value="{{ $info->heading }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Sub Heading</label>
                          <input type="text" class="form-control" name="sub_heading" value="{{ $info->sub_heading }}">
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