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
            <h5>Get In touch</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    @if (session('getintouth_status'))
                    <div class="alert alert-success">{{ session('getintouth_status') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th colspan="50">Get In touch info</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($getins as $getin)

                            <tr>
                                <td><strong class="h4">{{ $getin->heading_name	 }}</strong></td>

                               <td> <a href="{{ route('getintouch.show', $getin->id) }}" class="btn btn-info">Update</a></td>
                            </tr>
                            <tr>
                                <td colspan="50" class="bg-white">  {{ $getin->details }}  <br></td>
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
