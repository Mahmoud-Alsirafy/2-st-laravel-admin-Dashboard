@extends("dashboard.layout.main")

@section("content")
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Product Basic form elements</h4>
        <p class="card-description"> Product Basic form elements </p>
        <form action="{{ route('offer.update',$pro->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
            @csrf
            @method("PUT")
          <div class="form-group">

            <label for="exampleInputName1">Name</label>
            <input type="text" name="name" value="{{ $pro->name }}" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail3">Price</label>
            <input type="number" name="price" value="{{ $pro->price }}" class="form-control" id="exampleInputEmail3" placeholder="Price">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail3">Old Price</label>
            <input type="number" name="old_price" value="{{ $pro->old_price }}" class="form-control" id="exampleInputEmail3" placeholder="old_price">
          </div>
          <div class="form-group">

            <label for="exampleInputPassword4">count</label>
            <input type="number" name="count" value="{{ $pro->count }}" class="form-control" id="exampleInputPassword4" placeholder="count">
          </div>
          <div class="form-group">

            <label for="validationDefault04" class="form-label">Category</label>
              <select class="form-control" name="cat" id="validationDefault04">
                  @foreach (config('cat.cat') as $value)
                    <option class="form-control" @selected($pro->cat==$value) value="{{ $value }}">{{ $value }}</option>
                  @endforeach
              </select>
            </div>

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
