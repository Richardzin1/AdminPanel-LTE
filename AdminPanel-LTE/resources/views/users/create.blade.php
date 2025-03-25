@extends('layouts.default')

@section('page-title', 'Adicionar Usuários')
@section('content')
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nome:</label>
      <input type="text" name="name" class="form-control">

    </div>
    <div class="mb-3">
      <label  class="form-label">Email</label>
      <input type="email" name="email" class="form-control">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
@endsection
