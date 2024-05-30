@extends('Structure.main')

@section('container')
<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-decoration-none" ><a class="text-decoration-none" href="/products" style="color: #55BC44">Products</a></li>
          <li class="breadcrumb-item active" aria-current="page" style="color: #55BC44">Actifed Plus Expectorant</li>
        </ol>
    </nav>

    <div class="container mt-3 mb-5 mx-auto" style="max-width: 1200px;">
        <div class="row g-4">
            <div class="col-md-4 px-4">
                <img src="{{ asset("image/medicine1.jpeg") }}" alt="Medicine Image" class="img-fluid">
            </div>
            <div class="col-md-8 px-4 mt-5">
                <div class="d-block justify-content-between align-items-center mb-3">
                    <h4 class="text-left mt-3">Actifed Plus Expectorant Sirup 60 ml 2 Botol - Hemat Borongan</h4>
                    <span class="h4 text-danger mt-3">Rp. 30.000</span>
                    <p class="mt-2">per Bottle</p>
                </div>

                <a href="#" id="addbtn" class="btn mb-2">Add to Cart</a>
                <hr class="my-4">

                <div class="mt-3">
                    <div id="description-section">
                        <p><strong>Description<br></strong>Allergy Relief Plus provides 24-hour relief from various allergy symptoms including sneezing, runny nose, itchy eyes, and itchy throat. Formulated with loratadine, a non-drowsy antihistamine, this medication is safe for adults and children 12 years and older. Allergy Relief Plus provides 24-hour relief from various allergy symptoms including sneezing, runny nose, itchy eyes, and itchy throat. Formulated with loratadine, a non-drowsy antihistamine, this medication is safe for adults and children 12 years and older.</p>
                    </div>
                    
                    <div id="more-info" class="collapse">
                        <p><strong>No. BPOM<br></strong>SD031508481</p>
                        <p><strong>Manufacturer<br></strong>PT. Joel Bau Pertama</p>
                        <p><strong>Category<br></strong>Bottle</p>
                        <p><strong>Prescription Type<br></strong>Need Prescription</p>
                        <p><strong>Side Effects<br></strong>SD031508481</p>
                    </div>
                    
                    <button class="custom-btn" type="button" data-bs-toggle="collapse" data-bs-target="#more-info" aria-expanded="false" aria-controls="more-info" id="toggleButton">
                        <strong>See More <i class="bi bi-chevron-down" id="toggleIcon"></i></strong>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="mt-5">
        <h2>Related Products</h2>

        <div class="row text-center d-flex justify-content-between mt-4 mb-5">
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
</div>
@endsection
        