@extends("dashboard.layout.main")

@section("content")
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Basic form elements</h4>
        <p class="card-description"> Edit Basic form elements </p>
        <form action="{{ route("admin.update",$admin->id)}}" method="post" class="forms-sample">
            @csrf
            @method("PUT")
          <div class="form-group">
            @error('name')
            <p style="color: red">{{ $message }}</p>
            @enderror
            <label for="exampleInputName1">Name</label>
            <input type="text" name="name" value="{{ $admin->name }}" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            @error('email')
            <p style="color: red">{{ $message }}</p>
            @enderror
            <label for="exampleInputEmail3">Email address</label>
            <input type="email" name="email" value="{{ $admin->email }}" class="form-control" id="exampleInputEmail3" placeholder="Email">
          </div>

          <div class="form-group">
            @error('gender')
            <p style="color: red">{{ $message }}</p>
            @enderror
            <label for="exampleSelectGender">Gender</label>
            <select class="form-control" name="gender" id="exampleSelectGender">
              <option @selected($admin->gender=='1') value="1">Male</option>
              <option @selected($admin->gender=='0') value="0">Female</option>
            </select>
          </div>
          <div class="form-group">
            @error('role')
            <p style="color: red">{{ $message }}</p>
            @enderror
            <label for="exampleSelectGender">Role</label>
            <select class="form-control" name="role" id="exampleSelectGender">
              <option @selected(old("role")=='admin') value="admin">Admin</option>
              <option @selected(old("role")=='user') value="user">User</option>
            </select>
          </div>
          @error('permission')
          <p style="color: red">{{ $message }}</p>
          @enderror

          @foreach ( config("per.permission") as $key => $value)
          <div class="form-check">
            <label class="form-check-label">
            <input @checked(in_array($value,$admin["permission"])) type="checkbox" name="permission[]" value="{{ $value }}" class="form-check-input"> {{ $key }} <i class="input-helper"></i></label>
          </div>
          @endforeach

          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
</div>
@endsection
