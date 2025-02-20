@extends('admin.auth.layout.master')
@section('content')

<div class="container">
  <div class="row">
      <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
          <div class="card radius-10">
              <div class="card-body p-4">
                  <div class="text-center">
                      <h4>Login In</h4>
                      <p>Sign In to your account</p>
                  </div>
                  <form class="form-body row g-3" method="POST" action="{{ route('admin.login.submit') }}">
                      @csrf
                      <div class="col-12">
                          <label for="inputEmail" class="form-label">Email</label>
                          <input type="email" class="form-control" id="inputEmail" name="email" value="{{ old('email') }}" required>
                          @error('email')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                      <div class="col-12">
                          <label for="inputPassword" class="form-label">Password</label>
                          <input type="password" class="form-control" id="inputPassword" name="password" required>
                          @error('password')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                      {{-- <div class="col-12 col-lg-6 text-end">
                          <a href="{{ route('password.request') }}">Forgot Password?</a>
                      </div> --}}
                      <div class="col-12 col-lg-12">
                          <div class="d-grid">
                              <button type="submit" class="btn btn-primary">Sign In</button>
                          </div>
                      </div>
                      
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

  
  @endsection