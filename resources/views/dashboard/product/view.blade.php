@extends("dashboard.layout.main")

@section("content")



<div class="col-lg-6 grid-margin stretch-card w-100">
    <div class="card">
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <tr>
                <th scope="col">Number</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Old Price</th>
                <th scope="col">Count</th>
                <th scope="col">Cat</th>
                <th>More Info</th>
            </tr>
          </thead>
          <tbody>
            @forelse ( $product as $key=>$value )
            <tr>
                <td scope="col">{{ ++$key }}</td>
                <td scope="col">{{ $value->name }}</td>
                <td scope="col">{{ $value->price }}</td>
                @if($value->old_price==null)
                <td scope="col">-</td>
                @else
                <td scope="col">{{ $value->old_price }}</td>
                @endif
                <td scope="col">{{ $value->count }}</td>
                <td scope="col">{{ $value->cat }}</td>


                <td>
                    <form action="{{ route('product.edit',$value->id) }}" method="post">
                        @csrf
                        @method("GET")
                        <button type="submit" class="btn btn-success">MoreInfo </button>
                      </form>
                </td>



              </tr>
            @empty

            @endforelse


          </tbody>
        </table>
      </div>
    </div>
</div>



<a href="{{ route("product.create") }}" class="btn btn-primary ">Add product</a>


@endsection

