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
                <form id="jQueryValidationForm" method="post" action="{{ route('admin.testmonial.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input35" name="name" placeholder="" value="{{ $data->name }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        
                        <label for="input38" class="col-sm-2 col-form-label">Designation</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input38" name="designation" placeholder="" value="{{ $data->designation }}">
                            @error('designation')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
 
                    </div>
                    
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Review</label>
                        <div class="col-sm-10">
                            <textarea type="text" class=" form-control" id="input35" rows="3" name="review" placeholder="" >{{ $data->review  }}</textarea>
                            @error('review')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="input40" class="col-sm-2 col-form-label">Profile Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="input38" name="profile_image"><br><img style="margin-top: 10px;" src="/uploads/{{$data->profile_image}}" width="100px" height="100px">
                            <small class="form-text text-muted">Image dimensions must be 100X100px.</small>
                            @error('profile_image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    

                    <div class="row mb-3">
                        <label for="input40" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="input38" name="image"><br><img style="margin-top: 10px;" src="/uploads/{{$data->image}}" width="100px" height="100px">
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
                                <button type="submit" class="btn btn-primary px-4">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
 <!--end row-->



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