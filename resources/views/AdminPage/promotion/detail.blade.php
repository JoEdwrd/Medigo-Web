@extends("AdminPage.Structure.main")

@section('container')
    <div class="d-flex my-4 px-3 align-items-center text-center justify-content-between">
        <h2>Promotion Details</h2>
        <h2><a href="/dashboard/promotions"><i class="bi bi-chevron-left"></i>Back to all promotions</a></h2>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12 mb-4 d-flex flex-column justify-content-center align-items-center text-center" style="background-color: #eeebeb; border-radius:20px;">
                <img src="/image/BannerMain.png" alt="Promotion Banner" class="img-fluid px-5 pt-5 mb-3" style="border-radius:20px;">
                <p class="pb-2">{{ $promotion->name }}</p>
            </div>
            
            <div class="col-md-12 d-flex justify-content-between p-0 mb-4">
                <div class="col-md-6" style="background-color: #eeebeb; border-radius:20px; width:700px;">
                    <div class="container mt-4 d-flex flex-column">
                        <h3>General Information</h3>
                        <br>
                        <h5>Promo ID</h5>
                        <div class="mb-4" style="background-color: #d9d9d9; border-radius:10px;">
                            <div class="m-2 ps-2">
                                {{ $promotion->id }}
                            </div>
                        </div>
                        <h5>Promo Name</h5>
                        <div class="mb-4" style="background-color: #d9d9d9; border-radius:10px;">
                            <div class="m-2 ps-2">
                                {{ $promotion->name }}
                            </div>
                        </div>
                        <h5>Promo Code</h5>
                        <div class="mb-4" style="background-color: #d9d9d9; border-radius:10px;">
                            <div class="m-2 ps-2">
                                {{ $promotion->code }}
                            </div>
                        </div>
                        <h5>Promo Discount</h5>
                        <div class="mb-4" style="background-color: #d9d9d9; border-radius:10px;">
                            <div class="m-2 ps-2">
                                {{ $promotion->discount }}
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-5" style="background-color: #eeebeb; border-radius:20px;">
                    <div class="container mt-4 d-flex flex-column">
                        <h3>Terms</h3>
                        <br>
                        <div id="descbox" class="mb-4 overflow-auto" style="background-color: #d9d9d9; border-radius:10px; max-height: 360px">
                            <div class="m-2 me-3 ps-2">
                                {{ $promotion->terms }}
                                {{ $promotion->terms }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>          
    </div>
@endsection