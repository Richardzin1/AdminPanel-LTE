<div class="card">
  <form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
<div class="card-header">Dados Básicos</div>
<div class="card-body">
  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? $user->name }}">
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <div class="mb-3">
      <label  class="form-label">Email</label>
      <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? $user->email }}" >
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
  </div>
</div>
<div class="card-footer">  
    <button type="submit" class="btn btn-primary">Confirma</button>
</div>
</form>
</div>


    
    
   

