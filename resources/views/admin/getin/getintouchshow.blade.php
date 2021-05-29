@extends('layouts.dashboard_app')
@section('title')
Get in touch | Dashboard
@endsection
@section('getin')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('getintouch') }}">Get In Touch</a>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>{{ $getin->heading_name	 }}</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">

                    <div class="card">
                        <div class="card-header h4">{{ $getin->heading_name	 }}</div>
                        <div class="card-body">
                            @if (session('about_update_success'))
                            <div class="alert alert-success">{{ session('about_update_success') }}</div>
                            @endif
                    <form method="POST" action="{{ route('getintouch.store') }}"  enctype="multipart/form-data">
                        @csrf
                            <input type="hidden" name="id" value="{{  $getin->id }}">
                            <textarea class="form-control"  name="details"  rows="5">{{ $getin->details }}</textarea>
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
