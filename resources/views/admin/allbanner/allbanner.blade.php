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
            <h5>Home Banner</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    @if (session('add_banner'))
                    <div class="alert alert-success">{{ session('add_banner') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Page</th>
                                <th>Banner BG</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $banner)

                            <tr>
                                <td><strong class="h4">{{ $banner->page_name }}</strong></td>
                                <td>
                                    <img style="height: 50px; width: 100px;" src="{{ asset('uploads/allbannerbg') }}/{{ $banner->banner_bg }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('all.banner.show', $banner->id) }}" class="btn btn-info">Update</a>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="50" class="bg-white">    <br></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- <div class="col-lg-4">
                    @if (session('add_banner'))
                    <div class="alert alert-success">{{ session('add_banner') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add about Banner</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('all.banner.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">banner Banner BG</label>
                          <input type="file" class="form-control" name="banner_bg">
                        </div>
                        <button type="submit" class="btn btn-warning">Submit</button>
                      </form>
                        </div>
                      </div>
                </div> --}}
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection
