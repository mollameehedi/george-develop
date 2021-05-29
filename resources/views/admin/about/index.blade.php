@extends('layouts.dashboard_app')
@section('title')
    About details | Dashboard
@endsection
@section('about')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">About Details</a>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>About Details</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pt-5">
                    @if (session('about_update_success'))
                            <div class="alert alert-success">{{ session('about_update_success') }}</div>
                            @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>About title</th>
                                <th>Subtitle</th>
                                <th>About Description</th>
                                <th>Quotes Description</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $about_detail->about_title }}</td>
                                <td>{{ $about_detail->about_subtitle }}</td>
                                <td>{{ $about_detail->about_desctiption }}</td>
                                <td>{{ $about_detail->quotes_desctiption }}</td>
                                <td>{{ $about_detail->about_photo }}</td>
                                <td>

                                    <a href="{{ route('about.detail.show') }}" class="btn btn-info">Edit</a>

                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>


            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-4">

                    <div class="card">
                        <div class="card-header">Add about_details</div>
                        <div class="card-body">
                            @if (session('extra_added'))
                            <div class="alert alert-success">{{ session('extra_added') }}</div>
                            @endif
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                    <form method="POST" action="{{ route('about.detail.extra') }}"  enctype="multipart/form-data">
                        @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Description </label>
                           <textarea name="desctiption" class="form-control" placeholder="Enter Your quotes Desctiption" rows="5"></textarea>
                          </div>

                        <button type="submit" class="btn btn-info">Add</button>
                      </form>
                        </div>
                      </div>
                </div>
                <div class="col-lg-8 pt-5">
                    @if (session('extra_delete'))
                            <div class="alert alert-danger">{{ session('extra_delete') }}</div>
                            @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>About desctiption</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ab_extras as $extra)


                            <tr>
                                <td>{{ $extra->desctiption }}</td>
                                <td>

                                    <a href="{{ route('about.detail.desctiption.delete',$extra->id) }}" class="btn btn-info">delete</a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection
