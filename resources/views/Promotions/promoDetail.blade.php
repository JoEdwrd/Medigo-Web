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
            </div>
            <hr>
            <ul class="list-unstyled">
                <li><i class="bi bi-calendar"></i>Promo Period:  {{ Carbon::parse($promotion->startdate)->format('F j, Y') }} - {{ Carbon::parse($promotion->enddate)->format('F j, Y') }}</li>
                <li><i class="bi bi-receipt"></i> {{$promotion->shortdecs}}</li>
            </ul>
            <hr>
            {!! $promotion->terms !!}
            <div class="d-flex justify-content-between align-items-center mt-3">
            </div>
            @if(isset($cart->cart_details[0]))
                <form action="{{route('cart.promo.add')}}" method="POST" class="d-inline">
                    @csrf
                    <input type="text" name="promotionName" value="{{$promotion->code}}" class="hidden">
                    <button class="btn" style="background-color: var(--main2-color); color: white;">Apply offers</button>
                </form>
            @else
                <button class="btn disabled" style="background-color: var(--main2-color); color: white;">Apply offers</button>
                <span class="text-danger d-block">Please add products to your cart to use this promo!</span>
            @endif
        </div>
    </div>
</div>
















@endsection
