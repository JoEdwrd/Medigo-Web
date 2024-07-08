@extends("AdminPage.Structure.main")

@section('container')
    <div class="d-flex my-4 px-3 align-items-center text-center justify-content-between">
        <h2>Promotion Details</h2>
        <a href="/dashboard/promotions" id="addbtn" class="btn mb-2" style="width:170px">Back</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="p-5 col-md-12 mb-4 d-flex flex-column justify-content-center align-items-center text-center" style="background-color: #eeebeb; border-radius:20px;">
                <h3>Promo Image</h3>
                <br>
                <img src="{{ asset('storage/'.$promotion->image) }}" alt="Promotion Banner" class="img-fluid px-5 pt-5 mb-3" style="border-radius:20px;">
                {{-- <p class="pb-2">{{ $promotion->name }}</p> --}}
            </div>
            
            <div class="col-md-12 d-flex justify-content-between p-0 mb-4">
                <div class="col-md-6 " style="background-color: #eeebeb; border-radius:20px; width:700px;">
                    <div class="container mt-4 d-flex flex-column">
                        <h3>General Information</h3>
                        <br>
                        <div id="descbox" class="overflow-auto" style="height: 380px">
                            <h5>Promo ID</h5>
                            <div class="mb-4" style="background-color: #d9d9d9; border-radius:10px;">
                                <div class="m-2 ps-2 py-2">
                                    {{ $promotion->id }}
                                </div>
                            </div>
                            <h5>Promo Name</h5>
                            <div class="mb-4" style="background-color: #d9d9d9; border-radius:10px;">
                                <div class="m-2 ps-2 py-2">
                                    {{ $promotion->name }}
                                </div>
                            </div>
                            <h5>Promo Code</h5>
                            <div class="mb-4" style="background-color: #d9d9d9; border-radius:10px;">
                                <div class="m-2 ps-2 py-2">
                                    {{ $promotion->code }}
                                </div>
                            </div>
                            <h5>Promo Discount</h5>
                            <div class="mb-4" style="background-color: #d9d9d9; border-radius:10px;">
                                <div class="m-2 ps-2 py-2">
                                    {{ $promotion->discount }}
                                </div>
                            </div>
                            <h5>Promo Short Description</h5>
                            <div class="mb-4" style="background-color: #d9d9d9; border-radius:10px;">
                                <div class="m-2 ps-2 py-2">
                                    {{ $promotion->shortdecs }}
                                </div>
                            </div>
                            <h5>Promo Start Date</h5>
                            <div class="mb-4" style="background-color: #d9d9d9; border-radius:10px;">
                                <div class="m-2 ps-2 py-2">
                                    {{ $promotion->startdate }}
                                </div>
                            </div>
                            <h5>Promo End Date</h5>
                            <div class="mb-4" style="background-color: #d9d9d9; border-radius:10px;">
                                <div class="m-2 ps-2 py-2">
                                    {{ $promotion->enddate }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-5" style="background-color: #eeebeb; border-radius:20px;">
                    <div class="container mt-4 d-flex flex-column">
                        <h3>Terms</h3>
                        <br>
                        <div id="descbox" class="mb-4 overflow-auto" style="background-color: #d9d9d9; border-radius:10px; height: 360px">
                            <div class="m-2 me-3 ps-2">
                                {!! $promotion->terms !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>          
    </div>
@endsection