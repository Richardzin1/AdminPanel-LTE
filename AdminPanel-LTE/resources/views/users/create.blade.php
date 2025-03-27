@extends('layouts.default')
@section('page-title', 'Editar Usuário' )
@section('content')
<form action="" method="POST">
    @csrf
    
    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
      <label  class="form-label">Email</label>
      <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" >
      @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label  class="form-label">Password</label>
      <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" >
      @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
  </form>
@endsection