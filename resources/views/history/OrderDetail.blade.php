@push('scripts')
    <script src="/js/transaction_history.js"></script>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endpush
@extends('Structure.main')
@section('container')
<div class="mb-5">
    <div class="mt-4" style="margin-left: 90px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-decoration-none" ><a class="text-decoration-none" href="/history" style="color: #55BC44">History</a></li>
            <li class="breadcrumb-item active" aria-current="page" style="color: #55BC44; font-weight:bold;">order {{$transaction->id}}</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-5">
        <h1 class= "mb-3" id="NavItems" style="color: var(--main2-color)">Order Detail</h1>
        <div class="row align-items-start">
            <div class="col-7" id="left-content">
                <div class="row align-items-start">
                    <div class="col">
                        <h5 >Order ID: {{$transaction->id}}</h5>
                    </div>

                    <div class="col text-end">
                        <h5>{{$transaction->created_at}}</h5>
                    </div>
                </div>
                @php
                    $subTotal = 0;
                @endphp
                @foreach ($transaction->order_details as $order)
                <div class="order-items mt-4" style="cursor: pointer;" onclick="window.location='{{ route('product.show', $order->product->slug) }}';">
                    <div class="row align-items-start">
                        <div class="col">
                            <img style="width: 100px; length: 100px" src="{{ asset("storage/".$order->product->image) }}" alt="Medicine Image">
                        </div>
                        <div class="col-7">
                            <h5>{{$order->product->name}}</h5>
                            <small class="text-muted">{{$order->product->shortdesc}}</small><br>
                            <div class="row align-items-start">
                                <div class="col">
                                    <small class="text-muted">{{$order->quantity}}</small><br>
                                </div>
                                <div class="col">
                                    <small class="text-muted">@ Rp. {{ number_format($order->product->price, 0, ',', '.') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-4">
                            <h5>Rp. {{number_format($order->quantity * $order->product->price, 0, ',', '.') }}</h5>
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
                        <h5 class="mb-3" style="font-weight: bold">Payment Method</h5>
                        <h5 class="mb-3" style="font-weight: bold">Payment Status</h5>
                    </div>
                    <div class="col-md-6 text-right">
                        <h5 class="mb-3 text-end">{{ $transaction->payment_method }}</h5>
                        <h5 class="mb-3 text-end">{{ $transaction->status }}</h5>
                    </div>
                    <hr>
                    <h5 class="mb-3" style="font-weight: bold">Detail</h5>
                    <div class="col-md-6">
                        <p>Subtotal </p>
                        <p>Diskon</p>
                        <p>Total</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p class="text-end">Rp. {{ number_format($subTotal, 0, ',', '.') }}</p>

                        @if (isset($transaction->promotion) && $transaction->promotion != '')
                            <p class="text-end">Rp. {{ number_format($subTotal * $transaction->promotion->discount, 0, ',', '.') }}</p>
                            <p class="text-end">Rp. {{ number_format($subTotal - ($subTotal * $transaction->promotion->discount), 0, ',', '.') }}</p>
                        @else
                            <p class="text-end">Rp. {{ number_format($subTotal * 0, 0, ',', '.') }}</p>
                            <p class="text-end">Rp. {{ number_format($subTotal, 0, ',', '.') }}</p>
                        @endif
                    </div>
                </div>
                @if ($transaction->status == 'Waiting for verification' || $transaction->status == 'Waiting for payment')
                    <div class="d-flex justify-content-between gap-3 mt-3">
                        <button class="cancelbutton" id="checkoutButton" data-bs-toggle="modal" data-bs-target="#cancelModal">CANCEL</button>

                        @if ($transaction->status == 'Waiting for payment')
                            <form action="" method="GET">
                                @csrf
                                <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                @foreach ($transaction->order_details as $index => $orderDetail)
                                    <input type="hidden" name="products[{{ $index }}][id]" value="{{ $orderDetail->product->id }}">
                                    <input type="hidden" name="products[{{ $index }}][name]" value="{{ $orderDetail->product->name }}">
                                    @if ($orderDetail->product->discprice)
                                        <input type="hidden" name="products[{{ $index }}][price]" value="{{ $orderDetail->product->discprice }}">
                                    @else
                                        <input type="hidden" name="products[{{ $index }}][price]" value="{{ $orderDetail->product->price }}">
                                    @endif
                                    <input type="hidden" name="products[{{ $index }}][quantity]" value="{{ $orderDetail->quantity }}">
                                @endforeach
                                <input type="hidden" name="transaction_date" value="{{ $transaction->created_at }}">
                                <button type="submit" class="trackbutton" id="checkoutButton">PAY</button>
                            </form>
                        @endif
                    </div>
                @endif
            </div>
            <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content container border border-grey rounded-4 shadow p-4">
                        <h3 class="text-center mb-4">Are you sure you want to cancel?</h3>
                        <div class="d-flex justify-content-around w-50 mx-auto p-2">
                            <form action="{{ route('order.cancel', $transaction->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger" style="width:100px">Confirm</button>
                            </form>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="width:100px">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <h5>Address</h5>
                <h6>{{$transaction->user->address}}</h6>
            </div>
        </div>
        <div class="row mt-5">
            @if (isset($transaction->tracking_order) && $transaction->tracking_order != "")
                <h5 class="mb-3">Track Your Order</h5>
            @endif
            @if ($transaction->tracking_order->completed != "")
                <div class="row align-items-start mt-3">
                    <div class="col-md-1 d-flex justify-content-center">
                        <div class="d-flex flex-column align-items-center">
                            <div class="rounded-circle" style="width: 20px; height: 20px; background-color: var(--main2-color);"></div>
                            <div class="flex-grow-1" style="width: 2px; height: 50px; background-color: var(--main2-color);"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <h6 class="mb-3 text-muted" style="margin-top: 3px;">{{$transaction->tracking_order->completed}}</h6>
                    </div>
                    <div class="col text-start">
                        <h5 class="mb-3">Order Completed</h5>
                    </div>
                </div>
            @endif
            @if ($transaction->tracking_order->canceled != "")
                <div class="row align-items-start mt-3">
                    <div class="col-md-1 d-flex justify-content-center">
                        <div class="d-flex flex-column align-items-center">
                            <div class="rounded-circle" style="width: 20px; height: 20px; background-color: var(--main2-color);"></div>
                            <div class="flex-grow-1" style="width: 2px; height: 50px; background-color: var(--main2-color);"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <h6 class="mb-3 text-muted" style="margin-top: 3px;">{{$transaction->tracking_order->canceled}}</h6>
                    </div>
                    <div class="col text-start">
                        <h5 class="mb-3">Order Canceled</h5>
                    </div>
                </div>
            @endif
            @if ($transaction->tracking_order->in_progress != "")
                <div class="row align-items-start">
                    <div class="col-md-1 d-flex justify-content-center">
                        <div class="d-flex flex-column align-items-center">
                            <div class="rounded-circle" style="width: 20px; height: 20px; background-color: var(--main2-color);"></div>
                            <div class="flex-grow-1" style="width: 2px; height: 50px; background-color: var(--main2-color);"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <h6 class="mb-3 text-muted" style="margin-top: 3px;">{{$transaction->tracking_order->in_progress}}</h6>
                    </div>
                    <div class="col text-start">
                        <h5 class="mb-3">In Progress</h5>
                    </div>
                </div>
            @endif
            @if ($transaction->tracking_order->waiting_for_payment != "")
                <div class="row align-items-start">
                    <div class="col-md-1 d-flex justify-content-center">
                        <div class="d-flex flex-column align-items-center">
                            <div class="rounded-circle" style="width: 20px; height: 20px; background-color: var(--main2-color);"></div>
                            <div class="flex-grow-1" style="width: 2px; height: 50px; background-color: var(--main2-color);"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <h6 class="mb-3 text-muted" style="margin-top: 3px;">{{$transaction->tracking_order->waiting_for_payment}}</h6>
                    </div>
                    <div class="col text-start">
                        <h5 class="mb-3">Waiting for Payment</h5>
                    </div>
                </div>
            @endif
            @if ($transaction->tracking_order->waiting_for_verification != "")
                <div class="row align-items-start">
                    <div class="col-md-1 d-flex justify-content-center">
                        <div class="d-flex flex-column align-items-center">
                            <div class="rounded-circle" style="width: 20px; height: 20px; background-color: var(--main2-color);"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <h6 class="mb-3 text-muted" style="margin-top: 3px;">{{$transaction->tracking_order->waiting_for_verification}}</h6>
                    </div>
                    <div class="col text-start">
                        <h5 class="mb-3">Waiting for Prescription Confirmation</h5>
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>
@endsection

