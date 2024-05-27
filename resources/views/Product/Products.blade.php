@extends('Structure.main')
@section('container')

<div class="mb-5">
    <div class="mt-4" style="margin-left: 90px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-decoration-none" ><a class="text-decoration-none" href="/" style="color: #55BC44">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #55BC44">Products</li>
            </ol>
        </nav>
    </div>


    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col">
                <div class="input-group">

                    <input type="text" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="button" style="background-color:var(--main2-color)">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 " style="width: 100%">
            <div class="col-10" style="margin-left:90px">
                <h2>Headache</h2>
            </div>
            <div class="col mt-2">
                <a href="#" class="text-secondary h3" style="text-decoration: none;"">See all</a>
            </div>
    </div>

    <div class="row text-center d-flex justify-content-center m-0" style="width: 100%">
        <div class="card col-md-1" id="card_product">
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
        </div>
    </div>




    <div class="row mt-5 " style="width: 100%">
            <div class="col-10" style="margin-left:90px">
                <h2>Supplements</h2>
            </div>
            <div class="col mt-2">
                <a href="#" class="text-secondary h3" style="text-decoration: none;"">See all</a>
            </div>
    </div>
   <div class="row text-center d-flex justify-content-center m-0" style="width: 100%">
        <div class="card col-md-1" id="card_product">
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
        </div>
    </div>

    <div class="row mt-5 " style="width: 100%">
            <div class="col-10" style="margin-left:90px">
                <h2>Ingestion</h2>
            </div>
            <div class="col mt-2">
                <a href="#" class="text-secondary h3" style="text-decoration: none;"">See all</a>
            </div>
    </div>
    <div class="row text-center d-flex justify-content-center m-0" style="width: 100%">
        <div class="card col-md-1" id="card_product">
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
        </div>
    </div>


    <div class="row mt-5 " style="width: 100%">
        <div class="col-10" style="margin-left:90px">
            <h2>Allergy</h2>
        </div>
        <div class="col mt-2">
            <a href="#" class="text-secondary h3" style="text-decoration: none;"">See all</a>
        </div>
    </div>
    <div class="row text-center d-flex justify-content-center m-0" style="width: 100%">
        <div class="card col-md-1" id="card_product">
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
        </div>
    </div>



    <div class="row mt-5 " style="width: 100%">
            <div class="col-10" style="margin-left:90px">
                <h2>Neck Pain</h2>
            </div>
            <div class="col mt-2">
                <a href="#" class="text-secondary h3" style="text-decoration: none;"">See all</a>
            </div>
    </div>
    <div class="row text-center d-flex justify-content-center m-0" style="width: 100%">
        <div class="card col-md-1" id="card_product">
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
        </div>
    </div>




    <div class="row mt-5 " style="width: 100%">
        <div class="col-10" style="margin-left:90px">
            <h2>Liver</h2>
        </div>
        <div class="col mt-2">
            <a href="#" class="text-secondary h3" style="text-decoration: none;"">See all</a>
        </div>
    </div>
    <div class="row text-center d-flex justify-content-center m-0" style="width: 100%">
        <div class="card col-md-1" id="card_product">
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
        </div>
    </div>

</div>
@endsection
