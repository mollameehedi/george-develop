@extends('layouts.dashboard_app')
@section('title')
    Home Banner | Dashboard
@endsection
@section('home')
    active
@endsection
@section('homebanner')
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
            <h5>Home Banner</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if (session('delete_banner'))
                    <div class="alert alert-danger">{{ session('delete_banner') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>No</th>
                                <th>Banner Heading</th>
                                <th>Banner BG</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $banner)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $banner->heading }}</td>
                                <td>
                                    <img style="height: 50px; width: 100px;" src="{{ asset('uploads/banner_bg') }}/{{ $banner->banner_bg }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('banner.show', $banner->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('banner.destroy', $banner->id)  }}" method="post">
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
                    @if (session('add_banner'))
                    <div class="alert alert-success">{{ session('add_banner') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add Banner</div>
                        <div class="card-body">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                    <form method="POST" action="{{ route('banner.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Banner Heading</label>
                          <input type="text" class="form-control" name="heading" placeholder="Enter banner heading">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Banner BG</label>
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
