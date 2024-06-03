@extends("AdminPage.Structure.main")

@section('container')
    <div class="my-4">
        <h1 class="h2">All Products</h1>
    </div>

    <hr>

    @if(session()->has("success"))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session("success") }}
      </div>
    @endif
    <div class="table-responsive col-lg-10">
      <a href="/dashboard/products/create" id="addbtn" class="btn mb-4" style="max-width: 250px">Add New Product</a>  
      <table class="table table-md">
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
                    <a href="/dashboard/products/{{ $product->slug }}" class="badge bg-success"><i class="bi bi-eye-fill"></i></a>
                    <a href="/dashboard/products/{{ $product->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                    <form action="/dashboard/products/{{ $product->slug }}" method="post" class="d-inline">
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