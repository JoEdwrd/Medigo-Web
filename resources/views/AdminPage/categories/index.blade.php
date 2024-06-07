@extends("AdminPage.Structure.main")

@section('container')
    <div class="my-4">
        <h1 class="h2">All Categories</h1>
    </div>

    <hr>

    @if(session()->has("success"))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session("success") }}
      </div>
    @endif
    @if(session()->has("error"))
    <div class="alert alert-danger col-lg-6" role="alert">
        {{ session('error') }}
    </div>
  @endif
    <div class="table-responsive col-lg-10">
      <a href="/dashboard/categories/create" id="addbtn" class="btn mb-4" style="max-width: 250px">Add New Categories</a>  
      <table class="table table-md">
          <thead>
            <tr>  
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Category ID</th>
              <th scope="col" class="col-3 " style="background: var(--main1-color);">Name</th>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
                <tr>
                <td class="">{{ $category->id }}</td>
                <td class="">{{ $category->name }}</td>
                <td class="">
                    <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-success"><i class="bi bi-eye-fill"></i></a>
                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                    <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
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