@extends('layouts.dashboard_app')
@section('title')
    About details | Dashboard
@endsection
@section('about')
    active
@endsection
@section('aboutdetails')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('about.index') }}">About</a>
        <a class="breadcrumb-item active">About Details</a>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>About Details</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">

                    <div class="card">
                        <div class="card-header">Update about_details</div>
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
                    <form method="POST" action="{{ route('about.store') }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">About Title</label>
                          <input type="text" class="form-control" name="about_title" value="{{ $about_detail->about_title }}" placeholder="Enter your about_detail Name">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Subtitle</label>
                          <input type="text" class="form-control" value="{{ $about_detail->about_subtitle }}"  name="about_subtitle" placeholder="Enter your about_detail Name">
                        </div>

                         <div class="form-group">
                            <label for="exampleInputEmail1">About Description </label>
                           <textarea name="about_desctiption" class="form-control" placeholder="Enter Your Blog Desctiption" rows="5">{{ $about_detail->about_desctiption }}</textarea>
                          </div>

                          {{--<div class="form-group">
                            <label for="exampleInputEmail1">Quotes</label>
                            <input type="text" class="form-control" name="quotes" placeholder="Enter your Quotes" value="{{ $about_detail->quotes }}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Quotes By</label>
                            <input type="text" class="form-control" name="quotes_by" placeholder="Enter your Quotes By" value="{{ $about_detail->quotes_by }}">
                          </div>--}}
                          <div class="form-group">
                            <label for="exampleInputEmail1">2nd Description </label>
                           <textarea name="quotes_desctiption" class="form-control" placeholder="Enter Your quotes Desctiption" rows="5">{{ $about_detail->quotes_desctiption }}</textarea>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1"> about Photo </label>
                            <input type="file" class="form-control" name="about_photo" accept="img">
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
