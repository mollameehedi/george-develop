@extends('layouts.dashboard_app')
@section('title')
    Update | Logo | Dashboard
@endsection
@section('logo')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('logo') }}">logo</a>
        <a class="breadcrumb-item active">Update logo</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 m-auto">
                    @if (session('update_logo'))
                    <div class="alert alert-success">{{ session('update_logo') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update Logo</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('logoupdatepost', $info->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Logo</label>
                          <input type="file" class="form-control" name="logo">
                        </div>
                        <img style="background: #f1f1f1; padding: 5px 5px;" src="{{ asset('uploads/logo') }}/{{ $info->logo }}" alt="">
                        <br>
                        <br>
                        <button type="submit" class="btn btn-warning">Change Name</button>
                      </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection