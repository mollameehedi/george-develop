@extends('layouts.dashboard_app')
@section('blog')
active
@endsection
@section('blog_category')
active
@endsection
@section('title')
    Blog | Category | Edit
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ url('home') }}">Home</a>
      <a class="breadcrumb-item" href="{{ route('blog.category.index') }}">Blog Category</a>
      <span class="breadcrumb-item active">{{ $blog_category->blog_category }}</span>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto" >
                <div class="card">
                    <div class="card-header">
                        Edit Blog Category
                    </div>
                    <div class="card-body">
                        @if ($errors->all())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                         <form method="post" action="{{ route('blog.category.update') }}" enctype="multipart/form-data">
                            @csrf
                             <div class="form-group">
                                <label>category name</label>
                                <input type="hidden" name="id" value="{{ $blog_category->id }}">
                                <input type="text" class="form-control" name="blog_category"  value="{{ $blog_category->blog_category }}">
                             </div>
                             <div class="form-group">
                                <button type="submit" class="btn btn-primary"> Change category</button>
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
