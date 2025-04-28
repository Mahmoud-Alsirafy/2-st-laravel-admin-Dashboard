@extends("dashboard.layout.main")

@section("content")



<div class="col-lg-6 grid-margin stretch-card w-100">
    <div class="card">
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Number</th>
              <th>Name</th>
              <th>Email</th>
              <th>Gender</th>
              <th>More Info</th>
            </tr>
          </thead>
          <tbody>
            @forelse ( $admin as $key=>$value )
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $value->name}}</td>
                <td>{{ $value->email}}</td>
                <td>{{ $value->gender==1?"male":"female"}}</td>
                {{-- <td class="col" class="w-25">
                    @foreach ($value["permission"] as $v )
                        {{ $v }}
                    @endforeach
                </td> --}}

                <td>
                    <form action="{{ route('admin.edit',$value->id) }}" method="post">
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



<a href="{{ route("admin.create") }}" class="btn btn-primary ">Add Admin</a>


@endsection

