@extends("AdminPage.Structure.main")

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All user</h1>
    </div>
    {{-- @if(session()->has("success"))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session("success") }}
      </div>
    @endif --}}
    <div class="table-responsive col-lg-10">
      <a href="/" class="btn btn-success mb-3">Add New user</a>
        <table class="table table-md">
          <thead>
            <tr>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">User ID</th>
              <th scope="col" class="col-2 " style="background: var(--main1-color);">Name</th>
              <th scope="col" class="col-2 " style="background: var(--main1-color);">Date of Birth</th>
              <th scope="col" class="col-2 " style="background: var(--main1-color);">Email</th>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Phone Number</th>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Action</th>
            </tr>
          </thead>
          <tbody>
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
                    <form action="/dashboard/users/{{$user->id}}/delete" method="post" class="d-inline">
                      @method("delete")
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><i class="bi bi-trash-fill"></i></button>
                    </form>
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection