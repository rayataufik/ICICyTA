@extends('layouts.auth')

@section('content')
<section class="login">
  <div class="d-flex">
    <div class="login-left">
      <div class="login-left-img d-flex align-items-center justify-content-center">
        <img src="images/logo-humic.png" alt="" srcset="" class="mr-3">
        <h1 class="text-white">ICICyTA</h1>
      </div>
    </div>
    <div class="login-right">
      <form action="{{ url('/login') }}" method="POST" class="form-login text-white">
        @csrf
        <h2 class="text-center mb-5">Login</h2>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email') }}">
          @error('email')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
          @error('password')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="check" name="remember">
          <label class="form-check-label" for="check">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </div>
</section>
@endsection