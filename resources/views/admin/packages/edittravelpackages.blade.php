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

                

                <h5 class="mb-0">Place Details</h5>
                </div>
            <div class="card-body p-4">
                <form id="jQueryValidationForm" method="post" action="{{ route('admin.packages.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Heading</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input35" name="head" placeholder="" value="{{$data->head}}">
                            @error('head')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        
                        <label for="input38" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input38" name="price" placeholder="" value="{{$data->price}}">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        
                    
                        
                        <label for="input35" class="col-sm-2 col-form-label">Days</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input35" name="days" placeholder="" value="{{$data->days}}">
                            @error('days')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                       
                    </div>

                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input35" name="title" placeholder="" value="{{$data->title}}">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Details</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="ckeditor form-control" id="input35" name="details" placeholder="" >{!!$data->details!!}</textarea>
                            @error('details')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Month</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input35" name="month" placeholder="" value="{!!$data->month!!}">
                            @error('month')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="input40" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="input38" name="image"><br><img style="margin-top: 10px;" src="/uploads/{{$data->image}}" width="100px" height="100px"> 
                            <small class="form-text text-muted">Image dimensions must be 930x466px.</small>
                            @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Basic Information</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="ckeditor form-control" id="input35" name="information" placeholder="" >{!!$data->information!!}</textarea>
                            @error('information')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Tour Plan</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="ckeditor form-control" id="input35" name="plan" placeholder="" >{!!$data->plan!!}</textarea>
                            @error('plan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Map link</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input35" name="link" placeholder="" value="{{$data->link}}">
                            @error('link')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                   

                      
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Gallery</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="input35" name="gallery[]"  value="{{ old('gallery') }}" multiple>

                            <!-- Display existing images -->
                            @if($items && count($items) > 0)
                                <div style="margin-top: 10px;">
                                    @foreach($items as $galleryImage)
                                        <img src="/uploads/{{ $galleryImage->gallery }}" width="100px" height="100px" style="margin-right: 10px;">
                                    @endforeach
                                </div>
                            @endif

                            @error('gallery')
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