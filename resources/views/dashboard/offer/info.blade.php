@extends("dashboard.layout.main")

@section("content")




<div class="col-lg-6 grid-margin stretch-card w-100">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover d-flex ">
                <thead>
                    <tr class="d-flex flex-column">
                        <th scope="col">Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Old Price</th>
                        <th scope="col">Count</th>
                        <th scope="col">Cat</th>
                        <th style="padding: 26px">Image</th>
                        <th style="padding: 30px">Edit</th>
                        <th style="padding: 30px">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $pro as $key=>$value )
                    <tr class="d-flex flex-column">
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
                            @if (!empty($value->Offer_image) && is_iterable($value->Offer_image))
                            @foreach ($value->Offer_image as $v)
                            <img src="{{ asset("storage/image_offer/".$v->image) }}" alt="">
                            @endforeach
                            @else
                            <span class="text-muted">No images</span>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('offer.show',$value->id) }}" method="post">
                                @csrf
                                @method("GET")
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('offer.destroy',$value->id) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger">Delete</button>
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


@endsection
