@extends('layouts.dashboard_app')
@section('blogcategory')
active
@endsection
@section('blog')
active
@endsection
@section('title')
    Blog Category | Dashboard
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ url('home') }}">Home</a>
      <span class="breadcrumb-item active">category</span>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        list category(active)
                    </div>
                    <div class="card-body">
                        @if (session('update_status'))
                            <div class="alert alert-success">
                                {{ session('update_status') }}
                            </div>
                        @endif
                        @if (session('delete_status'))
                            <div class="alert alert-danger">
                                {{ session('delete_status') }}
                            </div>
                        @endif
                            @csrf
                           <div class="table-responsive">
                            <table class="table table-border" id="category_table">
                                <thead>
                                  <tr>
                                    <th>Serial NO.</th>
                                    <th>Category Name</th>
                                    <th>Created By</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->index +1 }}</td>
                                        <td>{{ $category->blog_category }}</td>
                                        <td>{{ user_name($category->User_id) }}</td>

                                        <td>
                                            {{ $category->created_at->diffForHumans() }}

                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('blog.category.show',$category->id) }}" type="button" class="btn btn-info">Edit</a>
                                                <a href="{{ route('blog.category.delete',$category->id) }}" type="button" class="btn btn-danger">Delete</a>
                                              </div>
                                        </td>
                                      </tr>
                                      @empty
                                      <tr>
                                          <td colspan="50" class="text-center text-danger">no data available</td>
                                      </tr>
                                    @endforelse
                                </tbody>
                              </table>
                           </div>
                           @if ($categories->count() > 0)
                           @endif
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        add category
                    </div>
                    <div class="card-body">
                        @if (session('category_success'))
                            <div class="alert alert-success">
                                {{ session('category_success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                         <form method="post" action="{{ route('blog.category.store') }}" enctype="multipart/form-data">
                            @csrf
                             <div class="form-group">
                                <label> category name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Category" name="blog_category"  value="{{ old('blog_category') }}">
                                @error('blog_category')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                             </div>
                             <div class="form-group">
                                <button type="submit" class="btn btn-primary"> Add category</button>
                             </div>
                         </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection
@section('footer_scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#category_table').DataTable();
        })
    </script>
@endsection
