@extends('layouts.dashboard_app')
@section('title')
    blog | Dashboard
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
        <a class="breadcrumb-item active">blogs Upcoming</a>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>blogs Upcoming</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pt-5">
                    @if (session('delete_status'))
                        <div class="alert alert-danger">
                            {{ session('delete_status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        @if (session('blog_status_success'))
                        <div class="alert alert-success">
                            {{ session('blog_status_success') }}
                        </div>
                    @endif
                        <thead class="thead-bordered">
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Created By</th>
                                <th>Quotes By</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->blog_name }}</td>
                                <td>{{ $blog->blog_category->blog_category }}</td>
                                <td>{{  user_name($blog->user_id) }}</td>
                                <td>{{ $blog->quotes_by }}</td>
                                <td><img class="img-fluid" width="100" height="100" src="{{ asset('uploads/blog_photo') }}/{{ $blog->blog_photo }}" alt=""></td>
                                <td>
                                    <a href="{{ route('blog.update', $blog->id) }}" class="btn btn-info">Update</a>


                                    <a href="{{ route('blog.delete', $blog->id) }}" class="btn btn-danger">Delete</a>

                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="50">{{ $blogs->links() }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="col-lg-4">

                    <div class="card">
                        <div class="card-header">Add blogs</div>
                        <div class="card-body">
                            @if (session('blog_add_success'))
                            <div class="alert alert-success">{{ session('blog_add_success') }}</div>
                            @endif
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                    <form method="POST" action="{{ route('blog.store') }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label> category name</label>
                            <select name="category_id" class="form-control">
                                <option value="">-select one-</option>
                                @foreach ($active_categories as $active_category)
                                <option value="{{ $active_category->id }}">{{ $active_category->blog_category }}</option>
                                @endforeach
                            </select>
                         </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Blog Name</label>
                          <input type="text" class="form-control" name="blog_name" placeholder="Enter your Blog Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Blog Description </label>
                           <textarea name="blog_desctiption" class="form-control" placeholder="Enter Your Blog Desctiption" rows="5"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Quotes</label>
                            <input type="text" class="form-control" name="quotes" placeholder="Enter your Quotes">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Quotes By</label>
                            <input type="text" class="form-control" name="quotes_by" placeholder="Enter your Quotes By">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Quotes Description </label>
                           <textarea name="quotes_desctiption" class="form-control" placeholder="Enter Your quotes Desctiption" rows="5"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1"> blog Photo </label>
                            <input type="file" class="form-control" name="blog_photo" accept="img">
                          </div>

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
