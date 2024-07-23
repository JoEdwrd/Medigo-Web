@extends("AdminPage.Structure.main")

@section('container')
    <div class="my-4">
        <h1 class="h2">All Users</h1>
    </div>

    <hr>

    @if(session()->has("success"))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session("success") }}
      </div>
    @endif
    <div class="table-responsive col-lg-10">
      <div class="d-flex justify-content-end mb-4">
        <form action="{{ url('/dashboard/users') }}" method="GET" class="d-flex col-5 mt-2 position-relative">
            <input type="text" name="search" class="form-control col-2" placeholder="Search users by name..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary ml-2 col-2 position-absolute end-0" style="border-start-start-radius: 0px; border-end-start-radius: 0px">Search</button>
        </form>
      </div>
      {{-- <a href="/" class="btn btn-success mb-3">Add New user</a> --}}
        <table class="table table-md rounded-5">
          <thead>
            <tr>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">User ID</th>
              <th scope="col" class="col-2 " style="background: var(--main1-color);">Name</th>
              <th scope="col" class="col-2 " style="background: var(--main1-color);">Date of Birth</th>
              <th scope="col" class="col-2 " style="background: var(--main1-color);">Email</th>
              <th scope="col" class="col-2 " style="background: var(--main1-color);">Phone Number</th>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Action</th>
            </tr>
          </thead>
          <tbody>
            @if (isset($users[0]))
              @foreach ($users as $user)
                  <tr>
                  <td class="">{{ $user->id }}</td>
                  <td class="">{{ $user->name }}</td>
                  <td class="">{{ $user->dob }}</td>
                  <td class="">{{ $user->email }}</td>
                  <td class="">{{ $user->phone }}</td>
                  <td class="">
                    {{-- @dd($users) --}}
                      <a href="/dashboard/users/{{ $user->id }}" class="badge bg-success"><i class="bi bi-eye-fill"></i></a>
                      <form action="/dashboard/users/{{$user->id}}" method="post" class="d-inline">
                        @method("delete")
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><i class="bi bi-trash-fill"></i></button>
                      </form>
                  </td>
                  </tr>
              @endforeach
            @else
                  <div class="p-2 me-3 ms-3 alert alert-danger">
                    <h5 class="text-center">User not Found</h5>
                  </div>
            @endif
          </tbody>
        </table>
      </div>
@endsection