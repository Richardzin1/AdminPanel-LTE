<div class="card">
  <form action="{{ route('users.updateProfile', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
<div class="card-header">Profile</div>
<div class="card-body">
  <div class="mb-3">
    <label class="form-label">Type of person</label>
    <select name="type" class="form-control @error('type') is-invalid @enderror">
      <option value="PJ">PJ</option>
      <option value="PF">PF</option>
    </select>
        @error('type')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <div class="mb-3">
      <label  class="form-label">Address</label>
      <input name="address" type="text" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" >
      @error('address')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
  </div>
<div class="card-footer">  
    <button type="submit" class="btn btn-primary">Confirma</button>
</div>
</form>
</div>


    
    
   

