@extends("dashboard.layout.main")

@section("content")




<div class="col-lg-6 grid-margin stretch-card w-100">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover d-flex ">
                <thead>
                    <tr class="d-flex flex-column">
                        <th>Number</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>permission</th>
                        <th>Role</th>
                        {{-- <th>Permission</th> --}}
                        <th style="padding: 30px">Edit</th>
                        <th style="padding: 30px">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $user as $key=>$value )
                    <tr class="d-flex flex-column">
                        <td>{{ ++$key }}</td>
                        <td>{{ $value->name}}</td>
                        <td>{{ $value->email}}</td>
                        <td>{{ $value->gender==1?"male":"female"}}</td>
                        @if($value->role =='user')
                        <td class="col" class="w-25 d-flex flex-column">
                            @foreach ($value["permission"] as $v )
                            {{ $v }}
                            @endforeach

                        </td>
                        @else
                        <td class="col" class="w-25 d-flex flex-column">
                            @foreach ($value["permission"] as $v )
                            {{ $v }}
                            @endforeach
                            {{-- No permission --}}
                        </td>
                        @endif

                        <td>{{ $value->role}}</td>

                        <td>
                            <form action="{{ route('admin.show',$value->id) }}" method="post">
                                @csrf
                                @method("GET")
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('admin.destroy',$value->id) }}" method="post">
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
