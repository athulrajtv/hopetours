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
                <form id="jQueryValidationForm" method="post" action="{{ route('admin.packages.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Heading</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input35" name="head" placeholder="" value="{{ old('head') }}">
                            @error('head')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        
                        <label for="input38" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input38" name="price" placeholder="" value="{{ old('price') }}">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        
                    
                        
                        <label for="input35" class="col-sm-2 col-form-label">Days</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input35" name="days" placeholder="" value="{{ old('days') }}">
                            @error('days')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                       
                    </div>

                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input35" name="title" placeholder="" value="{{ old('title') }}">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Details</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="ckeditor form-control" id="input35" name="details" placeholder="" >{{ old('details') }}</textarea>
                            @error('details')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Month</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input35" name="month" placeholder="" value="{{ old('month') }}">
                            @error('month')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="input40" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="input38" name="image" placeholder="" value="{{ old('image') }}">
                            <small class="form-text text-muted">Image dimensions must be 930x466px.</small>
                            @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Basic Information</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="ckeditor form-control" id="input35" name="information" placeholder="" >{{ old('information') }}</textarea>
                            @error('information')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Tour Plan</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="ckeditor form-control" id="input35" name="plan" placeholder="" >{{ old('plan') }}</textarea>
                            @error('plan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Map link</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input35" name="link" placeholder="" value="{{ old('link') }}">
                            @error('link')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                   

                      
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-2 col-form-label">Gallery</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="input35" name="gallery[]"  value="{{ old('gallery') }}" multiple>
                            <small class="form-text text-muted">Image dimensions must be 930x700px.</small>
                            @error('gallery')
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
                    <th>Heading</th>
                    <th>Price</th>
                    <th>Days</th>
                    <th>Title</th>
                    <th>Details</th>
                    <th>Month</th>
                    <th>Image</th>
                    <th>Basic Information</th>
                    <th>Tour Plan</th>
                    <th>Map link</th>
                    <th>Gallery</th>
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
                    <td>{{$data->head}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->days}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->details}}</td>
                    <td>{{$data->month}}</td>
                    <td>
                        <img src="/uploads/{{ $data->image }}" width="70px" height="70px"  class="product-img-2">
                    </td>
                    <td>{{$data->information}}</td>
                    <td>{{$data->plan}}</td>
                    <td>{{$data->link}}</td>
                    <td>
                        @if($package->galleryImages && $package->galleryImages->count() > 0)
                            @foreach($package->galleryImages as $image)
                                <img src="/uploads/{{ $image->gallery }}" width="70px" height="70px" class="product-img-2" style="margin-right: 5px;">
                            @endforeach
                        @else
                            <p>No images available</p>
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('admin.packages.Editpage', $data->id) }}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.packages.delete', $data->id) }}" class="btn btn-danger">Delete</a>
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