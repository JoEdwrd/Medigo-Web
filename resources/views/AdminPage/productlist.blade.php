@extends("AdminPage.main")

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All Product</h1>
    </div>
    {{-- @if(session()->has("success"))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session("success") }}
      </div>
    @endif --}}
    <div class="table-responsive col-lg-10">
      <a href="/" class="btn btn-success mb-3">Add New Product</a>
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Product ID</th>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Category</th>
              <th scope="col" class="col-3 " style="background: var(--main1-color);">Name</th>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Price</th>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Stock</th>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
                <tr>
                <td class="">{{ $product->id }}</td>
                <td class="">{{ $product->category->name }}</td>
                <td class="">{{ $product->name }}</td>
                <td class="">{{ $product->price }}</td>
                <td class="">{{ $product->stock }}</td>
                <td class="">
                    <a href="/" class="badge bg-success"><i class="bi bi-eye-fill"></i></a>
                    <a href="/" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                    <form action="/" method="post" class="d-inline">
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