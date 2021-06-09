@csrf
<div class="col-5">
    <label for="inputAddress" class="form-label">Name</label>
    <input type="text" name="name"  value="{{ $user->name ?? old('name') }} "class="form-control @error('name') is-invalid @enderror" id="inputAddress" placeholder="Enter Full Name...">
    @error('name')<div class="text-danger">{{ $message }}</div>@enderror
  </div>
<div class="col-md-5">
  <label for="inputEmail4" class="form-label">Email</label>
  <input type="email" name="email"  value="{{$user->email ?? old('email') }} "class="form-control @error('email') is-invalid @enderror" id="inputEmail4" placeholder="Enter Email...">
  @error('email')<div class="text-danger">{{ $message }}</div>@enderror
</div>
<div class="col-md-5">
  <label for="inputPassword4" class="form-label">Password</label>
  <input type="password" name="password"  value="{{$user->password ?? old('password') }}" class="form-control @error('password') is-invalid @enderror" id="inputPassword4">
  @error('password')<div class="text-danger">{{ $message }}</div>@enderror
</div>
<input type="hidden" name="id" value="{{$user->id ?? ''}}">
<div class="col-md-5">
    <label for="inputGroupFile02" class="form-label">Image</label>
    <input type="file" name="image"  value="{{$user->image ?? old('image') }}" class="form-control @error('image') is-invalid @enderror" id="inputGroupFile02">
    @error('image')<div class="text-danger">{{ $message }}</div>@enderror
  </div>
 <br>
<div class="row">
  <div class="col"><button type="submit" class="btn btn-primary add-user-btn" style="width: 150px;">submit</button></div>
  <div class="col"><button type="reset"class="btn btn-primary add-user-btn" style="width: 150px;">Cancel</button></div>
</div>