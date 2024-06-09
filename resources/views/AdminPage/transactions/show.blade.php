@extends("AdminPage.Structure.main")

@section('container')
    {{-- @dd($transaction) --}}
    <div class="my-4 d-flex flex-row justify-content-between">
        <h1 class="h2">Transaction Detail</h1>
        <a href="/dashboard/transactions" id="addbtn" class="btn mb-2" style="max-width: 250px">Back</a>
    </div>
    {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All transaction</h1>
    </div> --}}
    {{-- @if(session()->has("success"))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session("success") }}
      </div>
    @endif --}}
    <div class="d-flex flex-row justify-content-between mb-5">
        <div class="d-flex flex-column  p-5" style="width: 62%;background:#EEEBEB;border-radius:20px">
            <h3>General Information</h3>
            <br>
            <label">Transaction ID</label>
            <div class="mt-2" style="background: #D9D9D9;width:100%;border-radius:5px">
                <label class="p-2">{{ $transaction[0]->id }}</label>
            </div>
            <br>
            <label>User ID</label>
            <div id="descbox" class="mt-2" style="background: #D9D9D9;width:100%;border-radius:5px;">
                <article class="p-2">
                    {!! $transaction[0]->user_id !!}
                </article>
            </div>
            <br>
            <label>Promo ID</label>
            <div id="descbox" class="mt-2" style="background: #D9D9D9;width:100%;border-radius:5px;">
                <article class="p-2">
                    {!! $transaction[0]->promo_id !!}
                </article>
            </div>
            <br>
            <label>Payment Method</label>
            <div id="descbox" class="mt-2" style="background: #D9D9D9;width:100%;border-radius:5px;">
                <article class="p-2">
                    {!! $transaction[0]->payment_method !!}
                </article>
            </div>
            <br>
            <label>Transaction Date</label>
            <div id="descbox" class="mt-2" style="background: #D9D9D9;width:100%;border-radius:5px;">
                <article class="p-2">
                    {!! $transaction[0]->transaction_date !!}
                </article>
            </div>
            <br>
        </div>
        <br>    
        <div style="width: 36%">
            <div class="d-flex flex-column  p-5" style="background:#EEEBEB;border-radius:20px">
                <h3>Products</h3>
                @php
                    $i = 1
                @endphp
                @foreach ($transaction as $trans)
                    <br>
                    <label">Product {{$i}}</label>
                    <div class="ps-2 pe-2 mt-2 d-flex justify-content-between" style="background: #D9D9D9;width:100%;border-radius:5px">
                        <label class="p-2">{{ $trans->name }}</label>
                        <label class="p-2">X{{ $trans->quantity }}</label>
                    </div>
                    @php
                        $i++
                    @endphp
                @endforeach
            </div>
            <br>
            <div class="d-flex flex-column p-5" style="background:#EEEBEB;border-radius:20px">
                <h3>Status</h3>
                <br>
                <label>Payment Status</label>
                <div class="mt-2" style="background: #D9D9D9;width:100%;border-radius:5px;">
                    <label class="p-2">{{ $trans->status }}</label>
                </div>
            </div>
        </div>
    </div>

@endsection