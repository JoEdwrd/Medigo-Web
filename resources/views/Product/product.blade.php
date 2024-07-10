@push('scripts')
    <script src="/js/product.js"></script>
@endpush

@extends('Structure.main')

@section('container')
<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-decoration-none" ><a class="text-decoration-none" href="/products" style="color: #55BC44">Products</a></li>
          <li class="breadcrumb-item active" aria-current="page" style="color: #55BC44">{{$product->name}}</li>
        </ol>
    </nav>

    <div class="container mt-3 mb-5 mx-auto" style="max-width: 1200px;">
        <div class="row g-4">
            <div class="col-md-4 px-4">
                <img src="{{ asset("storage/".$product->image) }}" alt="Medicine Image" class="img-fluid">
            </div>
            <div class="col-md-8 px-4 mt-5">
                <div class="d-block justify-content-between align-items-center mb-3">
                    <h4 class="text-left mt-3">{{ $product->name }}</h4>
                    <span class="h4 text-danger mt-3">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                    <p class="mt-2"> {{ $product->shortdesc }} </p>
                </div>

                <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn mb-2" id="addbtn">Add to cart</button>
                </form>

                <hr class="my-4">

                <div class="mt-3">
                    <h5 class="mb-0">[Masukkan text disini]</h5>
                    <div id="more-info" class=collapse>
                        {!! $product->description !!}
                    </div>

                    <br>

                    <button class="custom-btn" type="button" data-bs-toggle="collapse" data-bs-target="#more-info" aria-expanded="false" aria-controls="more-info" id="toggleButton">
                        <strong>See More <i class="bi bi-chevron-down" id="toggleIcon"></i></strong>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="mt-5">
        <h2>Related Products</h2>
        <div class="row text-center d-flex justify-content-center m-0" style="width: 100%">
            @foreach ($products as $product)
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
    </div>
</div>
@endsection
