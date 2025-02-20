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

                

                <h5 class="mb-0">Travel packages</h5>
                </div>
            <div class="card-body p-4">
                <form id="jQueryValidationForm" method="post" action="{{ route('admin.package.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-3 col-form-label">Days</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input35" name="days" placeholder="" value="{{$data->days}}">
                            @error('days')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input36" class="col-sm-3 col-form-label">Details</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input36" name="details" placeholder="" value="{{$data->details}}">
                            @error('details')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input37" class="col-sm-3 col-form-label">Mprice</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input37" name="mprice" placeholder="" value="{{$data->mprice}}">
                            @error('mprice')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input37" class="col-sm-3 col-form-label">Discount</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input37" name="discount" placeholder="" value="{{$data->discount}}">
                            @error('discount')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input38" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input38" name="price" placeholder="" value="{{$data->price}}">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input38" class="col-sm-3 col-form-label">Detail</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input38" name="detail" placeholder=""  value="{{$data->detail}}">
                            @error('detail')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="input40" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="image"><br><img style="margin-top: 10px;" src="/uploads/{{$data->image}}" width="100px" height="100px">
                            <small class="form-text text-muted">Image dimensions must be 350x200.</small>
                            @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
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
@endsection