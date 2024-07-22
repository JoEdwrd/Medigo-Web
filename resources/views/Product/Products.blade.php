@extends('Structure.main')
@section('container')

<div class="mb-5">
    <div class="mt-4" style="margin-left: 90px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-decoration-none"><a class="text-decoration-none" href="/" style="color: #55BC44">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #55BC44; font-weight:bold;">Products</li>
            </ol>
        </nav>
    </div>

    @if(session()->has("success"))
        <div id="success-alert" class="alert alert-success col m-5" role="alert">
            {{ session("success") }}
        </div>
    @endif

    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col">
                <form class="input-group" action="/products" method="GET">
                    <input type="text" class="form-control" placeholder="Search for products here..." name="search" style="min-height: 50px;">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit" style="background-color:var(--main2-color); min-height: 50px; border-radius: 0%; width: 110px;border-radius: 0% 6% 6% 0%"><i style="color: var(--main1-color)" class="bi bi-search fs-4"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if ($products->count() > 0)
        @if ($searchTerm)
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4>Search Results for "{{ $searchTerm }}"</h4>
                    </div>
                </div>
            </div>

            <div class="row text-center d-flex justify-content-center m-0" style="width: 100%">
                @foreach ($products->where('stock', '>', 0) as $product)
                    <div class="card col-md-1" id="card_product" style="cursor: pointer;" onclick="window.location='{{ route('product.show', $product->slug) }}';">
                        <img src="{{ asset("storage/".$product->image) }}" class="crd-img" alt="{{ $product->name }}">
                        <div class="card-body" id="card-body">
                            <h5 class="card-title text-start" id="card-title">{{$product->name}}</h5>
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
        @else
        <!-- Show all products if no search query -->
            @foreach ($categories as $category)
                <div class="row mt-5" style="width: 100%">
                    <div class="col-10" style="margin-left:90px">
                        <h2>{{ $category->name }}</h2>
                    </div>
                    <div class="col mt-2">
                        <a href="{{ route('category.show', $category->slug) }}" class="text-secondary h3" style="text-decoration: none;">See all</a>
                    </div>
                </div>

                <div class="row text-center d-flex justify-content-center m-0" style="width: 100%">
                    @foreach ($category->products->where('stock', '>', 0)->take(5) as $product)
                        <div class="card col-md-1" id="card_product" style="cursor: pointer;" onclick="window.location='{{ route('product.show', $product->slug) }}';">
                            <img src="{{ asset("storage/".$product->image) }}" class="crd-img" alt="{{ $product->name }}">
                            <div class="card-body" id="card-body">
                                <h5 class="card-title text-start" id="card-title">{{ $product->name }}</h5>
                                <label class="card-desc" id="card-desc">{{ $product->shortdesc }}</label>
                                <h5 class="card-title" id="card-title">Rp {{ number_format($product->price, 0, ',', '.') }}</h5>
                                <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn mb-2" id="addbtn">Add to cart</button>
                                </form>
                                {{-- <a href="{{ route('cart.add', ['productId' => $product->id]) }}" id="addbtn" class="btn">ADD</a> --}}
                            </div>
                    </div>
                    @endforeach
                </div>
            @endforeach
        @endif

    @else
    <div class="container">
        <div class="row">
            <div class="col" style="min-height: 320px">
                @if ($searchTerm)
                <h4>No products found for "{{ $searchTerm }}"</h4>
                @else
                <h4>No products available</h4>
                @endif
            </div>
        </div>
    </div>
    @endif

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var alert = document.getElementById('success-alert');
        if (alert) {
            setTimeout(function() {
                alert.style.display = 'none';
            }, 3000); // 3 seconds timeout
        }
    });
</script>

@endsection
