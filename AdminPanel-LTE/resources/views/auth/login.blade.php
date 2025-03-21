@extends('layouts.auth')
@section('body-class', 'login-page')
@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href="{{ route('login') }}"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        @session('status')
        <div class="alert alert-success" role="alert">
          {{ $value }}
        </div>
        @endsession
        <form action="{{ 'login' }}" method="post">
            @csrf
          <div class="input-group mb-3">
              <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" />
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
          <!--begin::Row-->
          <div class="row">
           
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Sign In</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!--end::Row-->
        </form>
        <p class="mb-1 text-center"><a href="forgot-password">I forgot my password</a></p>
        <p class="mb-0 text-center">
          <a href="{{ route('register') }}" class="text-center"> Register a new membership </a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>


@endsection