@extends('Structure.main')
@section('container')

<div class="container mt-5">
    <h1 class= "mb-3" id="NavItems" style="color: var(--main2-color)">Order Detail</h1>

    <div class="row align-items-start">
        <div class="col-7" id="left-content">
             <div class="row align-items-start">
                <div class="col">
                    <h5 >Order ID: {{$orderDetail->id}}</h5>
                </div>

                <div class="col text-end">
                    <h5>{{$orderDetail->created_at}}</h5>
                </div>
            </div>

            @php
                $subTotal = 0;
            @endphp
            @foreach ($orderDetail->order_details as $order)
             <div class="order-items mt-4" style="cursor: pointer;" onclick="window.location='{{ route('product.show', $order->product->slug) }}';">
                <div class="row align-items-start">
                    <div class="col">
                        <img style="width: 100px; length: 100px" src="{{ asset("image/medicine1.jpeg") }}" alt="Medicine Image">
                    </div>

                    <div class="col-7">
                        <h5>{{$order->product->name}}</h5>
                        <small class="text-muted">{{$order->product->shortdesc}}</small><br>
                        <div class="row align-items-start">
                            <div class="col">
                                <small class="text-muted">{{$order->quantity}}</small><br>
                            </div>

                            <div class="col">
                                <small class="text-muted">@ Rp {{ number_format($order->product->price, 0, ',', '.') }}</small>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-4">
                        <h5>{{number_format($order->quantity * $order->product->price, 0, ',', '.') }}</h5>
                        @php
                            $subTotal += ($order->quantity * $order->product->price);
                        @endphp
                    </div>
                </div>
            </div>

            @endforeach

        </div>

        <div class="col-1" style="width: 3%">
            <div class="d-flex vr" style="height: 300px;"></div>
        </div>


        <div class="col" id="right-content">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <h5 class ="mb-3" style="font-weight: bold">Payment Method</h5>
                    <h5 class ="mb-3" style="font-weight: bold">Payment Status</h5>
                </div>
                <div class="col-md-6 text-right">
                    <h5 class ="mb-3 text-end">{{$orderDetail->payment_method}}</h5>
                    <h5 class ="mb-3 text-end"> {{$orderDetail->status}}</h5>
                </div>
                <hr>
                <h5 class ="mb-3" style="font-weight: bold">Detail</h5>
                <div class="col-md-6">
                    <p>Subtotal </p>
                    <p>Diskon</p>
                    <p>Total</p>
                </div>

                <div class="col-md-6 text-right">
                    <p class="text-end">{{ number_format($subTotal, 0, ',', '.') }}</p>

                    @if (isset($orderDetail->promotion) && $orderDetail->promotion != '')
                        <p class="text-end">{{ number_format($subTotal * $orderDetail->promotion->discount, 0, ',', '.') }}</p>
                        <p class="text-end">{{ number_format($subTotal - ($subTotal * $orderDetail->promotion->discount), 0, ',', '.') }}</p>
                    @else
                        <p class="text-end">{{ number_format($subTotal * 0, 0, ',', '.') }}</p>
                        <p class="text-end">{{ number_format($subTotal, 0, ',', '.') }}</p>

                    @endif

                </div>
            </div>
        </div>

    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <h5>Address</h5>
            <h6>{{$orderDetail->user->address}}</h6>
        </div>
    </div>

    <div class="row mt-5">
        <h5 class="mb-3">Track Your Order</h5>

        @if ($orderDetail->tracking_order->completed != "")
            <div class="row align-items-start mt-3">
                <div class="col-md-1 d-flex justify-content-center">
                    <div class="d-flex flex-column align-items-center">
                        <div class="rounded-circle" style="width: 20px; height: 20px; background-color: var(--main2-color);"></div>
                        <div class="flex-grow-1" style="width: 2px; height: 50px; background-color: var(--main2-color);"></div>
                    </div>
                </div>

                <div class="col-2">
                    <h6 class="mb-3 text-muted" style="margin-top: 3px;">{{$orderDetail->tracking_order->completed}}</h6>
                </div>

                <div class="col text-start">
                    <h5 class="mb-3">Order Completed</h5>
                </div>
            </div>

        @endif

        @if ($orderDetail->tracking_order->canceled != "")
            <div class="row align-items-start mt-3">
                <div class="col-md-1 d-flex justify-content-center">
                    <div class="d-flex flex-column align-items-center">
                        <div class="rounded-circle" style="width: 20px; height: 20px; background-color: var(--main2-color);"></div>
                        <div class="flex-grow-1" style="width: 2px; height: 50px; background-color: var(--main2-color);"></div>
                    </div>
                </div>

                <div class="col-2">
                    <h6 class="mb-3 text-muted" style="margin-top: 3px;">{{$orderDetail->tracking_order->canceled}}</h6>
                </div>

                <div class="col text-start">
                    <h5 class="mb-3">Order Canceled</h5>
                </div>
            </div>

        @endif

        @if ($orderDetail->tracking_order->in_progress != "")
            <div class="row align-items-start">
                <div class="col-md-1 d-flex justify-content-center">
                    <div class="d-flex flex-column align-items-center">
                        <div class="rounded-circle" style="width: 20px; height: 20px; background-color: var(--main2-color);"></div>
                        <div class="flex-grow-1" style="width: 2px; height: 50px; background-color: var(--main2-color);"></div>
                    </div>
                </div>

                <div class="col-2">
                    <h6 class="mb-3 text-muted" style="margin-top: 3px;">{{$orderDetail->tracking_order->in_progress}}</h6>
                </div>

                <div class="col text-start">
                    <h5 class="mb-3">In Progress</h5>
                </div>
            </div>
        @endif


        @if ($orderDetail->tracking_order->waiting_for_payment != "")
            <div class="row align-items-start">
                <div class="col-md-1 d-flex justify-content-center">
                    <div class="d-flex flex-column align-items-center">
                        <div class="rounded-circle" style="width: 20px; height: 20px; background-color: var(--main2-color);"></div>
                        <div class="flex-grow-1" style="width: 2px; height: 50px; background-color: var(--main2-color);"></div>
                    </div>
                </div>

                <div class="col-2">
                    <h6 class="mb-3 text-muted" style="margin-top: 3px;">{{$orderDetail->tracking_order->waiting_for_payment}}</h6>
                </div>

                <div class="col text-start">
                    <h5 class="mb-3">Waiting for Payment</h5>
                </div>
            </div>
        @endif


          @if ($orderDetail->tracking_order->waiting_for_verification != "")
            <div class="row align-items-start">
                <div class="col-md-1 d-flex justify-content-center">
                    <div class="d-flex flex-column align-items-center">
                        <div class="rounded-circle" style="width: 20px; height: 20px; background-color: var(--main2-color);"></div>
                    </div>
                </div>

                <div class="col-2">
                    <h6 class="mb-3 text-muted" style="margin-top: 3px;">{{$orderDetail->tracking_order->waiting_for_verification}}</h6>
                </div>

                <div class="col text-start">
                    <h5 class="mb-3">Waiting for Prescription Confirmation</h5>
                </div>
            </div>
        @endif







        {{-- <div class="row align-items-start">
            <div class="col-md-1 d-flex justify-content-center">
                <div class="d-flex flex-column align-items-center">
                    <div class="rounded-circle" style="width: 20px; height: 20px; background-color: var(--main2-color);"></div>
                    <div class="flex-grow-1" style="width: 2px; height: 50px; background-color: var(--main2-color);"></div>
                </div>
            </div>
            <div class="col-2">
                <h6 class="mb-3 text-muted" style="margin-top: 3px;">3 May 2024 - 20:00 WIB</h6>
            </div>

            <div class="col text-start">
                <h5 class="mb-3">Waiting for Payment</h5>
            </div>
        </div> --}}


    </div>
</div>



@endsection

