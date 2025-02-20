@extends('admin.layouts.master')
@section('body')
<div class="row">
    <div class="col-lg-10 mx-auto">
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

                

                <h5 class="mb-0">Review Details</h5>
                </div>
            <div class="card-body p-4">
                <form id="jQueryValidationForm" method="post" action="{{ route('admin.testmonial.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input35" name="name" placeholder="" value="{{ old('name') }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        
                        <label for="input38" class="col-sm-2 col-form-label">Designation</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input38" name="designation" placeholder="" value="{{ old('designation') }}">
                            @error('designation')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
 
                    </div>
                    
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Review</label>
                        <div class="col-sm-10">
                            <textarea type="text" class=" form-control" id="input35" rows="3" name="review" placeholder="" >{{ old('review') }}</textarea>
                            @error('review')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="input40" class="col-sm-2 col-form-label">Profile Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="input38" name="profile_image" placeholder="" value="{{ old('profile_image') }}">
                            <small class="form-text text-muted">Image dimensions must be 100X100px.</small>
                            @error('profile_image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    

                    <div class="row mb-3">
                        <label for="input40" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="input38" name="image" placeholder="" value="{{ old('image') }}">
                            <small class="form-text text-muted">Image dimensions must be 480X360px.</small>
                            @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
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
                    <th>name</th>
                    <th>Designation</th>
                    <th>Review</th>
                    <th>Profile Image</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php $id = 1; ?>
                @if('$data')
                @foreach( $data as $key => $data )
                <tr>
                    <td>{{$id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->designation}}</td>
                    <td>{{$data->review}}</td>
                    <td>
                        <img src="/uploads/{{ $data->profile_image }}" width="70px" height="70px"  class="product-img-2">
                    </td>
                    <td>
                        <img src="/uploads/{{ $data->image }}" width="70px" height="70px"  class="product-img-2">
                    </td>
                    <td>
                        <a href="{{ route('admin.testmonial.Editpage', $data->id) }}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.testmonial.delete', $data->id) }}" class="btn btn-danger">Delete</a>
                    </td>

                </tr>
                <?php $id += 1; ?>
                @endforeach
                @endif
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('textarea[name="details"]'))
        .catch(error => {
            console.error(error);
    });
    ClassicEditor
        .create(document.querySelector('textarea[name="information"]'))
        .catch(error => {
            console.error(error);
    });
    ClassicEditor
        .create(document.querySelector('textarea[name="plan"]'))
        .catch(error => {
            console.error(error);
    });
</script>
@endsection