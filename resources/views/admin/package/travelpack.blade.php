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
                <form id="jQueryValidationForm" method="post" action="{{ route('admin.package.creates') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-3 col-form-label">Days</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input35" name="days" placeholder="" value="{{ old('days') }}">
                            @error('days')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input36" class="col-sm-3 col-form-label">Details</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input36" name="details" placeholder="" value="{{ old('details') }}">
                            @error('details')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input37" class="col-sm-3 col-form-label">Mprice</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input37" name="mprice" placeholder="" value="{{ old('mprice') }}">
                            @error('mprice')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input37" class="col-sm-3 col-form-label">Discount</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input37" name="discount" placeholder="" value="{{ old('discount') }}">
                            @error('discount')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input38" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input38" name="price" placeholder="" value="{{ old('price') }}">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input38" class="col-sm-3 col-form-label">Detail</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input38" name="detail" placeholder=""  value="{{ old('detail') }}">
                            @error('detail')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="input40" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="input38" name="image" placeholder="" value="{{ old('image') }}">
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
                    <th>Days</th>
                    <th>Details</th>
                    <th>Mprice</th>
                    <th>Discount</th>
                    <th>Price</th>
                    <th>detail</th>
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
                    <td>{{$data->days}}</td>
                    <td>{{$data->details}}</td>
                    <td>{{$data->mprice}}</td>
                    <td>{{$data->discount}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->detail}}</td>
                    <td>
                        @if($data->image)
                            <img src="/uploads/{{ $data->image }}" width="70px" height="70px"  class="product-img-2">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.package.edit', $data->id) }}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.package.delete', $data->id) }}" class="btn btn-danger">Delete</a>
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

@endsection