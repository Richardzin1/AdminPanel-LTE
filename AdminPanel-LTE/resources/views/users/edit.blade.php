@extends('layouts.default')
@section('page-title', 'Adicionar Usuário' )
@section('content')
@session('status')
  <div class="alert alert-success">
    {{ $value }}
  </div>
@endsession
 @include('users.parts.basic-details')
 <br>
 @include('users.parts.profile-details')
  @endsection