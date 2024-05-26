@extends('Structure.main')

@section('container')
<div class="container">
<div class="py-4">
    <div class="row gx-5">
        <div class="col-md-8">
            <h2 class="mb-3">Your Cart</h2>
            <div class="overflow-auto" style="max-height: 570px">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="card mb-3">
                        <div class="card-header"># {{ $i }}</div>
                        <div class="card-body d-flex align-items-center gap-3">
                            <div class="card-img" style="max-width: 100px;">
                                <img src="image/medicine1.jpeg" alt="Medicine Image" class="img-fluid">
                            </div>
                            <div class="card-text d-flex flex-grow-1 justify-content-between align-items-center">
                                <div>
                                    <h5 class="card-title">Obat Batuk</h5>
                                    <p class="card-text">Rp. 30.000</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="btn btn-primary btn-sm me-2 quantity-btn">-</a>
                                    <span>1</span>
                                    <a href="#" class="btn btn-primary btn-sm ms-2 quantity-btn">+</a>
                                </div>
                            </div>
                        </div>
                    </div>             
                @endfor 
            </div>
        </div>

        <div class="col-md-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text" style="color: var(--main2-color);">Total Items</span>
                <span class="badge rounded-pill" style="background-color: var(--main2-color);">3</span>
            </h4>
            <ul class="list-group mb-3">
                @for ($i = 0; $i < 4; $i++)
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Second product</h6>
                            <small class="text-body-secondary">Brief description</small>
                        </div>
                        <span class="text-body-secondary">$8 x 3</span>
                    </li>
                @endfor
                <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                    <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                        <small>EXAMPLECODE</small>
                    </div>
                    <span class="text-success">-$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>$20</strong>
                </li>
            </ul>

            <form class="card p-2">
                <div class="input-group">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Promo code"
                />
                <button type="submit" class="btn btn-secondary">Redeem</button>
                </div>
            </form>

            <hr class="mb-4">

            <div class="address">
                <h4>Billing Address</h4>
                <p>Jl. Perum Sari Boga No.6, Kec. Sukasari, Kab. Bandung Barat, Bandung 44465</p>
            </div>

            {{-- <button class="w-100 btn btn-primary btn-md" type="submit">
                Checkout
            </button> --}}
            <a href="#" id="addbtn" class="btn mb-2">Add to Order</a>
        </div>
    </div>
</div>
</div>
@endsection