@push('scripts')
    <script src="/js/transaction_history.js"></script>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endpush

@extends('Structure.main')

@section('title', $title)
@section('container')
    <div class="container">
        <br>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-decoration-none"><a class="text-decoration-none" href="/" style="color: #55BC44">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #55BC44;font-weight:bold;">History</li>
            </ol>
        </nav>
        <h1 id="NavItems" style="color: var(--main2-color)">Transaction History</h1>
        <br>
        
        <!-- Loop through all statuses -->
        @foreach (['waitForVerification' => 'Waiting for verification', 'waitForPayment' => 'Waiting for payment', 'inProgress' => 'In progress', 'completed' => 'Completed', 'canceled' => 'Canceled'] as $status => $title)
            <div>
                <div class="d-flex justify-content-between">
                    <h3>{{ $title }}</h3>
                    <!-- Only add toggle button for 'completed' and 'canceled' statuses -->
                    @if (in_array($status, ['completed', 'canceled']))
                        <button class="custom-btn toggleButton" type="button" data-bs-toggle="collapse" data-bs-target="#order-info-{{ $status }}" aria-expanded="false" aria-controls="order-info-{{ $status }}">
                            <i class="bi bi-chevron-down toggleIcon" style="font-size: 2em;"></i>
                        </button>
                    @endif
                </div>
                <hr style="border: 1px solid black;">
                <div id="order-info-{{ $status }}" class="{{ in_array($status, ['completed', 'canceled']) ? 'collapse' : '' }}">
                    @foreach($$status as $transaction)
                        <div style="border: 2px solid rgba(0,0,0,0.3);padding:20px;border-radius:10px;margin-top:20px">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <div class="d-flex flex-row justify-content-between">
                                    <img class="" src="\image\Drug.png" style="width:70px;height:70px;border-radius:5px;background:#F2F2F2" alt="">
                                    <div class="d-flex flex-column justify-content-between" style="margin-left: 20px">
                                        <label style="font-family: 'Chopin-Trial';font-weight: 400;">Order ID: {{ $transaction->id }}</label>
                                        <label style="font-family: 'Chopin-Trial';font-weight: bold; font-size:20px;">
                                            {{ $transaction->order_details->first()->product->name }}
                                        </label>
                                        <label style="font-family: 'Chopin-Trial';font-weight: 400;">
                                            Number of products: {{ $transaction->order_details->count() }}
                                        </label>
                                    </div>
                                </div>
                                <label class="align-self-baseline">{{ $transaction->created_at }} WIB</label>
                            </div>
                            <div class="d-flex flex-row justify-content-between mt-3">
                                @if ($transaction->status == 'Completed')
                                    <div style="border: 2px solid var(--main2-color);border-radius:5px; width:180px;height:40px;display:flex;text-align:center; align-items: center;justify-content: center;color:var(--main2-color);font-family: 'Chopin-Trial';font-weight: 600;">
                                        {{ strtoupper($transaction->status) }}
                                    </div> 
                                @elseif ($transaction->status == 'Canceled')
                                    <div style="border: 2px solid red;border-radius:5px; width:180px;height:40px;display:flex;text-align:center; align-items: center;justify-content: center;color:red;font-family: 'Chopin-Trial';font-weight: 600;">
                                        {{ strtoupper($transaction->status) }}
                                    </div>
                                @elseif ($transaction->status == 'In progress')
                                    <div style="border: 2px solid #165CA2;border-radius:5px; width:250px;height:40px;display:flex;text-align:center; align-items: center;justify-content: center;color:#165CA2;font-family: 'Chopin-Trial';font-weight: 600;">
                                        {{ strtoupper($transaction->status) }}
                                    </div>
                                    <a href="" class="trackbutton">TRACK</a>
                                @elseif ($transaction->status == 'Waiting for payment')
                                    <div style="border: 2px solid #165CA2;border-radius:5px; width:250px;height:40px;display:flex;text-align:center; align-items: center;justify-content: center;color:#165CA2;font-family: 'Chopin-Trial';font-weight: 600;">
                                        {{ strtoupper($transaction->status) }}
                                    </div>
                                    <form action="" method="GET" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                        @foreach ($transaction->order_details as $index => $orderDetail)
                                            <input type="hidden" name="products[{{ $index }}][id]" value="{{ $orderDetail->product->id }}">
                                            <input type="hidden" name="products[{{ $index }}][name]" value="{{ $orderDetail->product->name }}">
                                            <input type="hidden" name="products[{{ $index }}][price]" value="{{ $orderDetail->product->price }}">
                                            <input type="hidden" name="products[{{ $index }}][quantity]" value="{{ $orderDetail->quantity }}">
                                        @endforeach
                                        <input type="hidden" name="transaction_date" value="{{ $transaction->created_at }}">
                                        <button type="submit" class="trackbutton" id="checkoutButton">PAY</button>
                                    </form>
                                @else
                                    <div style="border: 2px solid #165CA2;border-radius:5px; width:250px;height:40px;display:flex;text-align:center; align-items: center;justify-content: center;color:#165CA2;font-family: 'Chopin-Trial';font-weight: 600;">
                                        {{ strtoupper($transaction->status) }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <br><br>
        @endforeach
    </div>
@endsection
