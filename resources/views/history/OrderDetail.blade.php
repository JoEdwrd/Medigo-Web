@extends('Structure.main')
@section('container')

<div class="container mt-5 mb-5">
    <h1 class= "mb-3" id="NavItems" style="color: var(--main2-color)">Order Detail</h1>

    <div class="row align-items-start">
        <div class="col-7" id="left-content">
             <div class="row align-items-start">
                <div class="col">
                    <h5 >Order ID: PSN123</h5>
                </div>

                <div class="col text-end">
                    <h5>3 May 2024 - 21:18 WIB</h5>
                </div>
            </div>

            <div class="order-items mt-4">
                <div class="row align-items-start">
                    <div class="col">
                        <img style="width: 100px; length: 100px" src="{{ asset("image/medicine1.jpeg") }}" alt="Medicine Image">
                    </div>

                    <div class="col-7">
                        <h5>Actifed Plus Expectorant Sirup 60 ml (Hijau)</h5>
                        <small class="text-muted">Per Botol</small><br>
                        <div class="row align-items-start">
                            <div class="col">
                                <small class="text-muted">1x</small><br>
                            </div>

                            <div class="col">
                                <small class="text-muted">@ Rp 69.800</small>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-4">
                        <h5>Rp 69.800</h5>
                    </div>
                </div>
            </div>

            <div class="order-items mt-4">
                <div class="row align-items-start">
                    <div class="col">
                        <img style="width: 100px; length: 100px" src="{{ asset("image/panadolbiru.jpeg") }}" alt="Medicine Image">
                    </div>

                    <div class="col-7">
                        <h5>Panadol 500 mg 10 Kaplet</h5>
                        <small class="text-muted">Per Strip</small><br>
                        <div class="row align-items-start">
                            <div class="col">
                                <small class="text-muted">2x</small><br>
                            </div>

                            <div class="col">
                                <small class="text-muted">@ Rp 14.000</small>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-4">
                        <h5>Rp 28.000</h5>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-1" style="width: 3%">
            <div class="d-flex vr" style="height: 300px;"></div>
        </div>


        <div class="col" id="right-content">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <h5 class ="mb-3" style="font-weight: bold">Metode Pembayaran</h5>
                    <h5 class ="mb-3" style="font-weight: bold">Status Pembayaran</h5>
                </div>
                <div class="col-md-6 text-right">
                    <h5 class ="mb-3 text-end">BCA Virtual Account</h5>
                    <h5 class ="mb-3 text-end"">Berhasil</h5>
                </div>
                <hr>
                <h5 class ="mb-3" style="font-weight: bold">Ringkasan Pembayaran</h5>
                <div class="col-md-6">
                    <p>Subtotal </p>
                    <p>Biaya Pengiriman </p>
                    <p>Diskon</p>
                    <p>Total</p>
                </div>
                <div class="col-md-6 text-right">
                    <p class="text-end">Rp 97.800</p>
                    <p class="text-end">Rp 15.000</p>
                    <p class="text-end">-Rp 15.000</p>
                    <p class="text-end">Rp 97.800</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <h5>Alamat</h5>
            <h6>Rumah Talenta BCA</h6>
            <p>Jl. Pakuan No. 5, Kelurahan Sumur Batu, Kecamatan Babakan Madang, Kamar A328 (Dititipkan ke Satpam) Babakan Madang Kab. Bogor Jawa Barat 16810</p>
        </div>
    </div>










    <div class="row mt-5">
        <h5 class="mb-3">Track Your Order</h5>

        <div class="row align-items-start mt-3">
            <div class="col-3">
                <h6 class="mb-3">3 May 2024 - 21:18 WIB</h6>
            </div>

            <div class="col text-start">
                <h5 class="mb-3">Order Completed</h5>
            </div>
            <hr>
        </div>

        <div class="row align-items-start mt-3">
            <div class="col-3">
                <h6 class="mb-3">3 May 2024 - 20:02 WIB</h6>
            </div>

            <div class="col text-start">
                <h5 class="mb-3">On Its Way</h5>
            </div>
            <hr>
        </div>

        <div class="row align-items-start mt-3">
            <div class="col-3">
                <h6 class="mb-3">3 May 2024 - 20:02 WIB</h6>
            </div>

            <div class="col text-start">
                <h5 class="mb-3">On Process</h5>
            </div>
            <hr>
        </div>

        <div class="row align-items-start mt-3">
            <div class="col-3">
                <h6 class="mb-3">3 May 2024 - 20:01 WIB</h6>
            </div>

            <div class="col text-start">
                <h5 class="mb-3">Already Paid</h5>
            </div>
            <hr>
        </div>

        <div class="row align-items-start mt-3">
            <div class="col-3">
                <h6 class="mb-3">3 May 2024 - 20:00 WIB</h6>
            </div>

            <div class="col text-start">
                <h5 class="mb-3">Waiting for Payment</h5>
            </div>
            <hr>
        </div>

        <div class="row align-items-start mt-3">
            <div class="col-3">
                <h6 class="mb-3">3 May 2024 - 19:50 WIB</h6>
            </div>

            <div class="col text-start">
                <h5 class="mb-3">Waiting for Prescription Confirmation</h5>
            </div>
            <hr>
        </div>





    </div>


</div>



@endsection


