@extends('layouts.dashboard_app')
@section('title')
    Update | blog | Dashboard
@endsection
@section('main_blog')
active
@endsection
@section('blog')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('blog.index') }}">Blog</a>
        <a class="breadcrumb-item active">Update blog</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update | blog</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card">
                        <div class="card-header">Update blogs</div>
                        <div class="card-body">
                            @if (session('update_blog'))
                            <div class="alert alert-success">{{ session('update_blog') }}</div>
                            @endif
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                    <form method="POST" action="{{ route('blog.update.post', $info->id) }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label> category name</label>
                            <select name="category_id" class="form-control">
                                <option value="">-select one-</option>
                                @foreach ($active_categories as $active_category)
                                <option {{ ($active_category->id == $info->category_id ? "selected":"") }}  value="{{ $active_category->id }}">{{ $active_category->blog_category }}</option>
                                @endforeach
                            </select>
                         </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Blog Name</label>
                          <input type="text" class="form-control" name="blog_name"  value="{{ $info->blog_name }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Blog Description </label>
                           <textarea name="blog_desctiption" class="form-control"  rows="5">{{ $info->blog_desctiption }}</textarea>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Quotes</label>
                            <input type="text" class="form-control" name="quotes" value="{{ $info->quotes }}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Quotes By</label>
                            <input type="text" class="form-control" name="quotes_by" value="{{ $info->quotes_by }}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Quotes Description </label>
                           <textarea name="quotes_desctiption" class="form-control"  rows="5">{{ $info->quotes_desctiption }}</textarea>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1"> blog Photo </label>
                            <input type="file" class="form-control" name="blog_photo" accept="img">
                          </div>
                          <img style="height: 50px; width: 100px;" src="{{ asset('uploads/blog_photo') }}/{{ $info->blog_photo }}" alt="">
                          <br>
                          <br>

                        <button type="submit" class="btn btn-info">Submit</button>
                      </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection