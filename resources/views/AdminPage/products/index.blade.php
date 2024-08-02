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
    @if(session()->has("error"))
    <div class="alert alert-danger col-lg-6" role="alert">
        {{ session('error') }}
    </div>
  @endif
    <div class="table-responsive col-lg-10">
      <div class="d-flex justify-content-between">
        <a href="/dashboard/products/create" id="addbtn" class="btn mb-4" style="max-width: 250px">Add New Product</a>
        <form action="{{ url('/dashboard/products') }}" method="GET" class="d-flex col-4 mt-2" style="height: 40px; width: 37%">
            <input type="text" name="search" class="form-control" placeholder="Search products by name" value="{{ request('search') }}" style="border-top-right-radius: 0%; border-bottom-right-radius: 0%">
            {{-- <button type="submit" class="btn btn-primary ml-2 col-2" style="display: none">Search</button> --}}
            <button class="btn" style="background-color: var(--main2-color);border-top-left-radius: 0%; border-bottom-left-radius: 0%" type="submit">
                <i style="color: var(--main1-color)" class="bi bi-search"></i>
            </button>
        </form>
    </div>
      <table class="table table-md">
          <thead>
            <tr>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Product ID</th>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Category</th>
              <th scope="col" class="col-2 " style="background: var(--main1-color);">Name</th>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Price</th>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Stock</th>
              <th scope="col" class="col-2 " style="background: var(--main1-color);">Patent</th>
              <th scope="col" class="col-1 " style="background: var(--main1-color);">Action</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($products[0]))
            @foreach ($products as $product)
                <tr>
                <td class="">{{ $product->id }}</td>
                <td class="">{{ $product->category->name }}</td>
                <td class="">{{ $product->name }}</td>
                <td class="">{{ $product->price }}</td>
                <td class="">{{ $product->stock }}</td>
                @if($product->patent == 1)
                <td class="">Prescription Medicine</td>
                @else
                <td class="">Over-the-Counter Medicine</td>
                @endif
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
            @else
            <div class="p-2 mx-3 alert alert-danger d-flex justify-content-center">
              <h5 class="p-0 m-0 text-center">Product not found</h5>
            </div>
            @endif
          </tbody>
        </table>
      </div>
@endsection
