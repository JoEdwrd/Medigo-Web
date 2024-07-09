@extends('Structure.main')
@section('container')

<div style="min-height: 300px">

    <div class="mb-5">
        <div class="mt-4" style="margin-left: 90px">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-decoration-none"><a class="text-decoration-none" href="/" style="color: #55BC44">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: #55BC44">{{ $category->name }}</li>
                </ol>
            </nav>
        </div>

       <div class="container mt-5">
            <div class="row mb-4">
                <div class="col">
                    <form class="input-group" action="/products" method="GET">
                        <input type="text" class="form-control" placeholder="Search..." name="search">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit" style="background-color:var(--main2-color)">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @if ($products->count() > 0)
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Products in {{ $category->name }}</h2>
                </div>
            </div>

            <div class="row text-center d-flex justify-content-center m-0" style="width: 100%">
                @foreach ($products as $product)
                <div class="card col-md-1" id="card_product" style="cursor: pointer;" onclick="window.location='{{ route('product.show', $product->slug) }}';">
                    <img src="{{ asset("storage/".$product->image) }}" class="crd-img" alt="{{ $product->name }}">
                    <div class="card-body" id="card-body">
                        <h5 class="card-title" id="card-title">{{ $product->name }}</h5>
                        <label class="card-desc" id="card-desc">{{ $product->shortdesc }}</label>
                        <h5 class="card-title" id="card-title">Rp {{ number_format($product->price, 0, ',', '.') }}</h5>
                        <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn mb-2" id="addbtn">Add to cart</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>No products available in this category</h4>
                </div>
            </div>
        </div>

        @endif

    </div>
</div>

@endsection
