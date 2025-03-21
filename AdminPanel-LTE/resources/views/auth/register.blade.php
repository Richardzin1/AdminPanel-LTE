@extends('layouts.auth')

@section('body-class', 'register-page')

@section('content')
<div class="register-box">
  <div class="register-logo">
    <a href="{{ route('login') }}"><b>Admin</b>LTE</a>
  </div>
  <!-- /.register-logo -->
  <div class="card">
    <div class="card-body register-card-body">
      <p class="register-box-msg">Register a new membership</p>
      <form action="{{ 'register' }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <div class="input-group-text"><span class="bi bi-person"></span></div>
          <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" value="{{ old('name') }}"  />
          @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
                @enderror 
        </div>
        <div class="input-group mb-3">
          <div class="input-group-text"><span class="bi bi-envelope"></span></div>
          <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}"  />
          @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="input-group mb-3">
          <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
          <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" />
          @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>      
        <div class="input-group mb-3">
          <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
          <input name="password_confirmation" type="password" class="form-control" placeholder="Password Cofirmation" />
        </div>      
           <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
      </form>
      <p class="mb-0 text-center">
        <a href="login.html" class="text-center"> I already have a membership </a>
      </p>
    </div>
    <!-- /.register-card-body -->
  </div>
</div>
@endsection

