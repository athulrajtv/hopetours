@extends('admin.auth.layout.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-7 mx-auto mt-5">
            <div class="card radius-10">
                <div class="card-body p-4">
                    <div class="text-center">
                        <h4>Sign Up</h4>
                        <p>Create a New Account</p>
                    </div>
                    <form method="POST" action="{{ route('admin.register.submit') }}" class="form-body row g-3">
                        @csrf
                        <div class="col-12">
                            <label for="inputName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="inputName" name="regname" value="{{ old('regname') }}" required>
                            @error('regname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="regmail" value="{{ old('regmail') }}" required>
                            @error('regmail')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="regpassword" required>
                            @error('regpassword')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="inputPasswordConfirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="inputPasswordConfirmation" name="regpassword_confirmation" required>
                            @error('regpassword_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 col-lg-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 text-center">
                            <p class="mb-0">Already have an account? <a href="{{ route('admin.auth.login') }}">Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  @endsection