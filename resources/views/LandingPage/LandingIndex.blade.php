@extends('Structure.main')

@section('container')

<div>
    <img src="{{ asset("image\BannerMain.svg") }}" style="width:100%;height:auto;"alt="">
    <div style="margin-top: 150px; width:100%">
        <h1 class="text-center" style="font-size: 40px;font-weight:600;" id="chopin">Categories</h1>
        <section class="mt-10" style="margin-top: 100px">
            <div class="col" style=" width:100%" >
                @php
                    $counter = 0;
                @endphp
                @foreach ($categories as $category)
                    @if ($counter % 5 == 0)
                        <div class="row text-center d-flex justify-content-center m-0" style="width: 100%; margin-top: 100px">
                    @endif
                    <div class="col-md-2 mb-3 mt-0" style="cursor: pointer;" onclick="window.location='{{ route('category.show', $category->slug) }}';">
                        <img id="cateimg" src="image\Headache.png" alt="">
                        <h6 class="font-weight-bold" id="NavItems" style="margin-top: 10px">
                            <a class="text-black text-decoration-none">{{ $category->name }}</a>
                        </h6>
                    </div>
                    @php
                        $counter++;
                    @endphp

                    @if ($counter % 5 == 0 || $loop->last)
                        </div>
                    @endif
                @endforeach
                {{-- <div class="row text-center d-flex justify-content-center m-0 " style="width: 100%;margin-top:100px">
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="image\Headache.png" alt="">
                        <h6 class="font-weight-bold" id="NavItems" style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">Headache</a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="image\Vitamin.png" alt="">
                        <h6 class="font-weight-bold" id="NavItems" style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">Vitamin</a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="image\Ingestion.png" alt="">
                        <h6 class="font-weight-bold" id="NavItems" style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">Ingestion</a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="image\Allergy.png" alt="">
                        <h6 class="font-weight-bold" id="NavItems" style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">Allergy</a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="image\NeckPain.png" alt="">
                        <h6 class="font-weight-bold" id="NavItems" style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">Neck Pain</a>
                        </h6>
                    </div>
                </div>

                <div class="row text-center d-flex justify-content-center m-0" style="margin-top: 100px;width:100%">
                    <div id="mg" class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="image\Liver.png" alt="">
                        <h6 class="font-weight-bold" id="NavItems"  style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">Liver</a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="image\Hearing.png" alt="">
                        <h6 class="font-weight-bold" id="NavItems"  style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">Hearing</a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="image\Dental.png" alt="">
                        <h6 class="font-weight-bold" id="NavItems"  style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">Dental</a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="image\Flu.png" alt="">
                        <h6 class="font-weight-bold" id="NavItems"  style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">Flu</a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3 mt-0">
                        <img id="cateimg" src="image\Eyesight.png" alt="">
                        <h6 class="font-weight-bold" id="NavItems" style="margin-top: 10px">
                        <a href="/" class="text-black text-decoration-none">Eyesight</a>
                        </h6>
                    </div>
                </div> --}}
            </div>
        </section>
    </div>

    <div style="margin-top:150px; width:100%">
        <h1 class="text-center" style="font-size: 40px;font-weight:600;" id="chopin">Promotions</h1>
        <br>
        <br>

        <div class="row text-center d-flex justify-content-evenly m-0" style="margin-top: 50px;width:100%">
            @forelse ($promotions as $promo)
                        <div id="PromoBanner" style="cursor: pointer;background-image: url('/image/Promo1.png');" onclick="window.location='/promotions/{{$promo->slug}}';" class="col-md-2 mb-3 mt-0">
                            <div style="height: 100%;display: flex; align-items: flex-end; justify-content:center;">
                                <div style="margin-bottom: 20px">
                                    <h5 class="font-weight-bold" id="NavItems" style="margin-bottom: 0px">
                                    <a  class="text-light text-decoration-none">{{$promo->name}}</a>
                                    </h5>
                                    <h6 class="text-light" style="font-weight:400; margin-bottom: 0px">{{$promo->shortdecs}}</h6>
                                </div>
                            </div>
                        </div>
            @empty
            <div id="PromoBanner" class="col-md-2 mb-3 mt-0" style="background-image: url('/image/Promo1.png');">
                <div style="height: 100%;display: flex; align-items: flex-end; justify-content:center;">
                    <div style="margin-bottom: 20px">
                        <h5 class="font-weight-bold" id="NavItems" style="margin-bottom: 0px">
                        <a href="/" class="text-light text-decoration-none">Coming Soon</a>
                        </h5>
                        <h6 class="text-light" style="font-weight:400; margin-bottom: 0px">Wait for our newest promo</h6>
                    </div>
                </div>
            </div>
            <div id="PromoBanner" class="col-md-2 mb-3 mt-0" style="background-image: url('/image/Promo2.png');">
                <div style="height: 100%;display: flex; align-items: flex-end; justify-content:center;">
                    <div style="margin-bottom: 20px">
                        <h5 class="font-weight-bold" id="NavItems" style="margin-bottom: 0px">
                        <a href="/" class="text-light text-decoration-none">Coming Soon</a>
                        </h5>
                        <h6 class="text-light" style="font-weight:400; margin-bottom: 0px">Wait for our newest promo</h6>
                    </div>
                </div>
            </div>
            <div id="PromoBanner" class="col-md-2 mb-3 mt-0" style="background-image: url('/image/Promo3.png');">
                <div style="height: 100%;display: flex; align-items: flex-end; justify-content:center;">
                    <div style="margin-bottom: 20px">
                        <h5 class="font-weight-bold" id="NavItems" style="margin-bottom: 0px">
                        <a href="/" class="text-light text-decoration-none">Coming Soon</a>
                        </h5>
                        <h6 class="text-light" style="font-weight:400; margin-bottom: 0px">Wait for our newest promo</h6>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>

    <div class="tabs" style="width: 100%;margin-top:100px;margin-bottom:100px">
        <input type="radio" class="tabs__radio" name="tabs-div" id="Best_Seller" checked>
        <label for="Best_Seller" class="tabs__label">Best</label>
        <div class="tabs__content" style="width:100%">
              <div class="row text-center d-flex justify-content-center m-0" style="width: 100%">
                    @forelse($bestseller as $best)
                    <div class="card col-md-1" id="card_product">
                        <img src="{{ asset("image/BannerMain.png") }}" class="crd-img" alt="...">
                        <div class="card-body" id="card-body">
                            <h5 class="card-title" id="card-title">{{$best->name}}</h5>
                            <label class="card-desc" id="card-desc">{{$best->shortdesc}}</label>
                            <h5 class="card-title" id="card-title">Rp {{ number_format($best->price, 0, ',', '.') }}</h5>
                            <form action="{{ route('cart.add', ['productId' => $best->id]) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn mb-2" id="addbtn">Add to cart</button>
                            </form>
                            {{-- <a href="#" id="addbtn" class="btn">ADD</a> --}}
                        </div>
                    </div>
                    @empty
                        <h1>There is no transactions yet</h1>
                    @endforelse
                    {{-- <div class="card col-md-1" id="card_product">
                        <img src="{{ asset("image/BannerMain.png") }}" class="crd-img" alt="...">
                        <div class="card-body" id="card-body">
                            <h5 class="card-title" id="card-title">Card title</h5>
                            <label class="card-desc" id="card-desc">Per Strip</label>
                            <h5 class="card-title" id="card-title">Rp 70.000</h5>
                            <a href="#" id="addbtn" class="btn">ADD</a>
                        </div>
                    </div>
                    <div class="card col-md-1" id="card_product">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body" id="card-body">
                            <h5 class="card-title" id="card-title">Card title</h5>
                            <label class="card-desc" id="card-desc">Per Strip</label>
                            <h5 class="card-title" id="card-title">Rp 70.000</h5>
                            <a href="#" id="addbtn" class="btn">ADD</a>
                        </div>
                    </div>
                    <div class="card col-md-1" id="card_product">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body" id="card-body">
                            <h5 class="card-title" id="card-title">Card title</h5>
                            <label class="card-desc" id="card-desc">Per Strip</label>
                            <h5 class="card-title" id="card-title">Rp 70.000</h5>
                            <a href="#" id="addbtn" class="btn">ADD</a>
                        </div>
                    </div>
                    <div class="card col-md-1" id="card_product">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body" id="card-body">
                            <h5 class="card-title" id="card-title">Card title</h5>
                            <label class="card-desc" id="card-desc">Per Strip</label>
                            <h5 class="card-title" id="card-title">Rp 70.000</h5>
                            <a href="#" id="addbtn" class="btn">ADD</a>
                        </div>
                    </div>
                    <div class="card col-md-1" id="card_product">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body" id="card-body">
                            <h5 class="card-title" id="card-title">Card title</h5>
                            <label class="card-desc" id="card-desc">Per Strip</label>
                            <h5 class="card-title" id="card-title">Rp 70.000</h5>
                            <a href="#" id="addbtn" class="btn">ADD</a>
                        </div>
                    </div> --}}
                </div>
        </div>
        <input type="radio" class="tabs__radio" name="tabs-div" id="sale">
        <label for="sale" class="tabs__label">Sale</label>
        <div class="tabs__content">
            <div class="row text-center d-flex justify-content-center m-0" style="width: 100%">
                @foreach($discounts as $disc)
                    <div class="card col-md-1" id="card_product" style="width: 420px">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body" id="card-body">
                            <h5 class="card-title" id="card-title">{{$disc->name}}</h5>
                            <label class="card-desc" id="card-desc">{{$disc->shortdesc}}</label>
                            <h5 class="card-title" id="card-title" style="color: red">Rp {{ number_format($disc->discprice, 0, ',', '.') }}</h5>
                            <label class="card-desc" id="card-desc" style="text-decoration-line:line-through;">Rp {{ number_format($disc->price, 0, ',', '.') }}</label>
                            
                            <form action="{{ route('cart.add', ['productId' => $disc->id]) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn mb-2" id="addbtn">Add to cart</button>
                            </form>
                        </div>
                    </div>
                @endforeach
                     {{-- @for ($i = 0; $i < 3; $i++)
                        <div class="card col-md-1" id="card_product" style="width: 420px">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body" id="card-body">
                            <h5 class="card-title" id="card-title">{{ $products[$i]->name }}</h5>
                            <label class="card-desc" id="card-desc">Per Strip</label>
                            <h5 class="card-title" id="card-title" style="color: red">Rp 70.000</h5>
                            <label class="card-desc" id="card-desc" style="text-decoration-line:line-through;">Rp 100.000</label>
                            <a href="#" id="addbtn" style="margin-top: 20px" class="btn">ADD</a>
                        </div>
                    </div>
                     @endfor --}}
                    {{-- <div class="card col-md-1" id="card_product" style="width: 420px">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body" id="card-body">
                            <h5 class="card-title" id="card-title">Botak</h5>
                            <label class="card-desc" id="card-desc">Per Strip</label>
                            <h5 class="card-title" id="card-title" style="color: red">Rp 70.000</h5>
                            <label class="card-desc" id="card-desc" style="text-decoration-line:line-through;">Rp 100.000</label>
                            <a href="#" id="addbtn" style="margin-top: 20px" class="btn">ADD</a>
                        </div>
                    </div>
                    <div class="card col-md-1" id="card_product" style="width: 420px">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body" id="card-body">
                            <h5 class="card-title" id="card-title">Botak</h5>
                            <label class="card-desc" id="card-desc">Per Strip</label>
                            <h5 class="card-title" id="card-title" style="color: red">Rp 70.000</h5>
                            <label class="card-desc" id="card-desc" style="text-decoration-line:line-through;">Rp 100.000</label>
                            <a href="#" id="addbtn" style="margin-top: 20px" class="btn">ADD</a>
                        </div>
                    </div>
                    <div class="card col-md-1" id="card_product" style="width: 420px">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body" id="card-body">
                            <h5 class="card-title" id="card-title">Botak</h5>
                            <label class="card-desc" id="card-desc">Per Strip</label>
                            <h5 class="card-title" id="card-title" style="color: red">Rp 70.000</h5>
                            <label class="card-desc" id="card-desc" style="text-decoration-line:line-through;">Rp 100.000</label>
                            <a href="#" id="addbtn" style="margin-top: 20px" class="btn">ADD</a>
                        </div>
                    </div>
                    <div class="card col-md-1" id="card_product" style="width: 420px">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body" id="card-body">
                            <h5 class="card-title" id="card-title">Botak</h5>
                            <label class="card-desc" id="card-desc">Per Strip</label>
                            <h5 class="card-title" id="card-title" style="color: red">Rp 70.000</h5>
                            <label class="card-desc" id="card-desc" style="text-decoration-line:line-through;">Rp 100.000</label>
                            <a href="#" id="addbtn" style="margin-top: 20px" class="btn">ADD</a>
                        </div>
                    </div>
                    <div class="card col-md-1" id="card_product" style="width: 420px">
                        <img src="{{ asset("image/Drug.png") }}" class="crd-img" alt="...">
                        <div class="card-body" id="card-body">
                            <h5 class="card-title" id="card-title">Botak</h5>
                            <label class="card-desc" id="card-desc">Per Strip</label>
                            <h5 class="card-title" id="card-title" style="color: red">Rp 70.000</h5>
                            <label class="card-desc" id="card-desc" style="text-decoration-line:line-through;">Rp 100.000</label>
                            <a href="#" id="addbtn" style="margin-top: 20px" class="btn">ADD</a>
                        </div>
                    </div> --}}
                </div>

        </div>
    </div>
</div>
@endsection

