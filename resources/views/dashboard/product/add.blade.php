@extends("dashboard.layout.main")

@section("content")
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Product Basic form elements</h4>
        <p class="card-description"> Product Basic form elements </p>
        <form action="{{ route("product.store")  }}" method="POST" class="forms-sample" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            @error('name')
           <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            <label for="exampleInputName1">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            @error('price')
           <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            <label for="exampleInputEmail3">Price</label>
            <input type="number" name="price" value="{{ old('price') }}" class="form-control" id="exampleInputEmail3" placeholder="Price">
          </div>
          <div class="form-group">
            @error('old_price')
           <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            <label for="exampleInputEmail3">Old Price</label>
            <input type="number" name="old_price" value="{{ old('old_price') }}" class="form-control" value="-" id="exampleInputEmail3" placeholder="old_price">
          </div>
          <div class="form-group">
            @error('count')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            <label for="exampleInputPassword4">count</label>
            <input type="number" name="count" value="{{ old('count') }}"  class="form-control" id="exampleInputPassword4" placeholder="count">
          </div>
          <div class="form-group">
            @error('cat')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            <label for="validationDefault04" class="form-label">Category</label>
              <select class="form-control" name="cat" id="validationDefault04">
                  @foreach (config('cat.cat') as $value)
                    <option class="form-control" value="{{ $value }}">{{ $value }}</option>
                  @endforeach
              </select>
            </div>
            @error('image')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            <div class="input-group col-xs-12 mt-4 mb-4">
            <input type="file" multiple name="image[]" class="form-control file-upload-info"  >

          </div>
          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
</div>
@endsection
