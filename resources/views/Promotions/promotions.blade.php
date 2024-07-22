@extends('Structure.main')
@section('container')


<div class="container mt-5">
    <div class="mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-decoration-none"><a class="text-decoration-none" href="/" style="color: #55BC44">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #55BC44; font-weight:bold;">Promotions</li>
            </ol>
        </nav>
    </div>
    <h1 class= "mb-3" id="NavItems" style="color: var(--main2-color)">Promo</h1>
    @php
    use Carbon\Carbon;
    @endphp
    @forelse ($promotions as $index => $promo)
    @if ($index % 3 == 0)
        <div class="row mt-4 mb-4">
    @endif

    <div class="col-md-4">
        <div class="card">
            <div class="d-flex justify-content-center align-items-center px-3 pt-3" style="height: 100%; overflow: hidden;">
                <img src="{{ asset("storage/".$promo->image) }}" style="border-radius:10px;object-fit: cover;" class="img-fluid" alt="Promo 1">
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $promo->name }}</h5>
                <label class="card-text">{{ $promo->shortdecs }}</label>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <label class="card-text text-muted">Promo period:</label>
                    </div>
                    <div class="col text-end">
                        {{ Carbon::parse($promo->startdate)->format('j M Y') }} - {{ Carbon::parse($promo->enddate)->format('j M Y') }}
                    </div>
                </div>
                <a href="/promotions/{{$promo->slug}}" id="addbtn" class="btn">SEE DETAIL</a>
            </div>
        </div>
    </div>

    @if (($index + 1) % 3 == 0 || $loop->last)
        </div> <!-- close the row -->
    @endif
@empty
    <div class="text-center" style="min-height: 320px">
        <h1 class="text-center">No Promotions Available</h1>
        <p class="text-center" >Please wait for our upcoming promo</p>
    </div>
@endforelse

</div>

@endsection
