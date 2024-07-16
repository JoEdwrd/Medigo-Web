@extends('Structure.main')
@section('container')

@php
use Carbon\Carbon;
@endphp
<div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-decoration-none"><a class="text-decoration-none" href="/promotions" style="color: #55BC44">Promotions</a></li>
            <li class="breadcrumb-item active" aria-current="page" style="color: #55BC44;font-weight:bold;">{{$promotion->name}}</li>
        </ol>
    </nav>
    <br>
    <div class="card">
        <img src="{{ asset('storage/'.$promotion->image) }}" style="height: 400px; width: 100%; object-fit: cover;" class="card-img-top" alt="Voucher Image">


        <div class="card-body">
            <div class="d-flex justif   y-content-between align-items-center">
                <h4 class="card-title">{{$promotion->name}}</h4>
                {{-- <span class="badge bg-warning text-dark">50% off</span> --}}
            </div>
            <hr>
            <ul class="list-unstyled">
                <li><i class="bi bi-calendar"></i>Promo Period:  {{ Carbon::parse($promotion->startdate)->format('F j, Y') }} - {{ Carbon::parse($promotion->enddate)->format('F j, Y') }}</li>
                <li><i class="bi bi-receipt"></i> {{$promotion->shortdecs}}</li>
            </ul>
            <hr>
            {!! $promotion->terms !!}

            {{-- <p><strong>Offer Description: </strong>Enjoy a 50% discount on all allergy relief medications during our special promotion.</p>

            <p><strong>How to Redeem:</strong> Enter promo code ALLERGY50 at checkout to apply the discount on eligible allergy relief medications.</p>

            <p><strong>Exclusions and Limitations:</strong></p>
            <ul>
                <li>Offer excludes prescription medications, over-the-counter supplements, and items already discounted.</li>
                <li>Limited to one use per customer.</li>
                <li>Not valid on bulk purchases exceeding three units of the same product.</li>
            </ul>

            <p><strong>Terms and Conditions:</strong></p>
            <ul>
                <li>The discount applies only to eligible allergy relief medications.</li>
                <li>This offer cannot be combined with any other promotions, discounts, or loyalty points.</li>
                <li>Standard return policy applies.</li>
                <li>The promotion is subject to availability and may be withdrawn or modified at any time without prior notice.</li>
                <li>Customers must adhere to the recommended dosage and guidelines for all medications.</li>
            </ul>

            <p><strong>Important Note:</strong> Always read the label and use only as directed. Consult your healthcare professional if symptoms persist.</p>
            <p><strong>Contact Information:</strong> For more details or assistance, please contact our customer service team at <a href="mailto:support@pharmahealth.com">support@medigo.com</a> or call (800) 123-4567.</p> --}}

            <div class="d-flex justify-content-between align-items-center mt-3">
                
            </div>

            @if(isset($cart->cart_details[0]))
                <form action="{{route('cart.promo.add')}}" method="POST" class="d-inline">
                    @csrf
                    <input type="text" name="promotionName" value="{{$promotion->code}}" class="hidden">
                    <button class="btn" style="background-color: var(--main2-color); color: white;"">Apply offers</button>
                </form>
            @else
                <button class="btn disabled" style="background-color: var(--main2-color); color: white;"">Apply offers</button>
                <span class="text-danger d-block">Please add products to your cart to use this promo!</span>
            @endif
        </div>
    </div>
</div>
















@endsection
