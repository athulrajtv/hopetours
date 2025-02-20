@extends('admin.layouts.master')
@section('body')
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header px-4 py-3">

                <!-- Display Success and Error Messages -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                

                <h5 class="mb-0">YouTube Link</h5>
                </div>
            <div class="card-body p-4">
                <form id="jQueryValidationForm" method="post" action="{{ route('admin.videos.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-3 col-form-label">Video LinkVideo Link</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input35" name="link" placeholder="" value="{{ old('link') }}">
                            @error('link')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
 <!--end row-->


<!-- start page content-->
<div class="page-content">
    <div class="card">
        <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">Details Table</h5>
            <form class="ms-auto position-relative">
                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><ion-icon name="search-sharp"></ion-icon></div>
                <input class="form-control ps-5" type="text" placeholder="search">
            </form>
        </div>
        <div class="table-responsive mt-3">
            <table class="table align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Vidoe Link</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @if('$data')
                @foreach( $data as $key => $data )
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->link}}</td>
                    <td>
                        <a href="{{ route('admin.videos.Editpage', $data->id) }}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.video.delete', $data->id) }}" class="btn btn-danger">Delete</a>
                    </td>

                </tr>
                @endforeach
                @endif
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

@endsection