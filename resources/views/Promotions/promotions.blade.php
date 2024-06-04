@extends('Structure.main')
@section('container')


<div class="container mt-5">
    <h1 class= "mb-3" id="NavItems" style="color: var(--main2-color)">Promo</h1>

    <div class="row mt-4 mb-4">
        <div class="col-md-4">
            <div class="card">
                <div class="d-flex justify-content-center align-items-center px-3 pt-3" style="height: 250px;">
                        <img src="{{ asset("/image/Promo1.png") }}" style="height: 100%"; width="100%" class="img-fluid" alt="Promo 1">
                </div>

                <div class="card-body">
                    <h5 class="card-title">Discount 50% s/d 15RB</h5>
                    <label class="card-text">For minimal spend Rp 50.000</label>
                    <hr>

                    <div class="row">
                        <div class="col-4">
                            <label class ="card-text text-muted">Promo period:</label>
                        </div>
                        <div class="col text-end">
                            <p class =""card-text text-end">1 Mei - 1 Juli 2024</p>
                        </div>
                    </div>
                    <a href="/promoDetail" id="addbtn" class="btn">SEE DETAIL</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="d-flex justify-content-center align-items-center px-3 pt-3" style="height: 250px;">
                        <img src="{{ asset("/image/Promo2.png") }}" style="height: 100%"; width="100%" class="img-fluid" alt="Promo 1">
                </div>

                <div class="card-body">
                    <h5 class="card-title">Buy 1 Get 1</h5>
                    <label class="card-text">For new user only</label>
                    <hr>

                    <div class="row">
                        <div class="col-4">
                            <label class ="card-text text-muted">Promo period:</label>
                        </div>
                        <div class="col text-end">
                            <p class =""card-text text-end">1 Januari - 1 Juli 2024</p>
                        </div>
                    </div>
                    <a href="#" id="addbtn" class="btn">SEE DETAIL</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="d-flex justify-content-center align-items-center px-3 pt-3" style="height: 250px;">
                        <img src="{{ asset("/image/Promo3.png") }}" style="height: 100%"; width="100%" class="img-fluid" alt="Promo 1">
                </div>

                 <div class="card-body">
                    <h5 class="card-title">Free Delivery</h5>
                    <label class="card-text">Only for Jabodetabek User</label>
                    <hr>

                    <div class="row">
                        <div class="col-4">
                            <label class ="card-text text-muted">Promo period:</label>
                        </div>
                        <div class="col text-end">
                            <p class =""card-text text-end">26 Mei - 26 November 2024</p>
                        </div>
                    </div>
                    <a href="#" id="addbtn" class="btn">SEE DETAIL</a>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-4 mb-3">
        <div class="col-md-4">
            <div class="card">
                <div class="d-flex justify-content-center align-items-center px-3 pt-3" style="height: 250px;">
                        <img src="{{ asset("/image/Promo2.png") }}" style="height: 100%"; width="100%" class="img-fluid" alt="Promo 1">
                </div>

                <div class="card-body">
                    <h5 class="card-title">Buy 1 Get 1</h5>
                    <label class="card-text">For new user only</label>
                    <hr>

                    <div class="row">
                        <div class="col-4">
                            <label class ="card-text text-muted">Promo period:</label>
                        </div>
                        <div class="col text-end">
                            <p class =""card-text text-end">1 Januari - 1 Juli 2024</p>
                        </div>
                    </div>
                    <a href="#" id="addbtn" class="btn">SEE DETAIL</a>
                </div>
            </div>
        </div>
    </div>



</div>











@endsection
