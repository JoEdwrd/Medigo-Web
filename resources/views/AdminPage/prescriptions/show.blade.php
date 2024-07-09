@extends("AdminPage.Structure.main")

@section('container')
    <div class="d-flex my-4 px-3 align-items-center text-center justify-content-between">
        <h2>Prescription Details</h2>
        <a href="/dashboard/prescriptions" id="addbtn" class="btn mb-2" style="width:170px">Back</a>
    </div>

    <div class="container">
        <div class="col-md-12 d-flex justify-content-between p-0 mb-4">
            <div class="d-flex flex-wrap justify-content-center align-items-stretch" style="background-color: #eeebeb; border-radius:20px; padding: 20px; width: 100%">
                <div class="col-md-7 d-flex flex-column justify-content-center align-items-center text-center mb-4" style="background-color: #eeebeb; border-radius:20px;">
                    <img src="{{asset('storage/'.$prescriptions->image)}}" alt="Prescription Image" class="img-fluid px-5 pt-5 mb-3" style="border-radius:20px; max-width: 100%; height: auto; max-height: 500px;">
                </div>

                <div class="col-md-4 d-flex flex-column justify-content-center align-items-center text-center mb-8" style="background-color: #eeebeb; border-radius:20px;">
                    <div class="w-100" style="background-color: #eeebeb; border-radius:20px;">
                        <div class="container d-flex flex-column">
                            <h3>General Information</h3>
                            <br>
                            <div id="descbox" class="overflow-auto" style="height: 380px">
                                <h5>Transaction ID</h5>
                                <div class="mb-4" style="background-color: #d9d9d9; border-radius:10px;">
                                    <div class="m-2 ps-2 py-2">
                                        {{ $prescriptions->transaction_id }}
                                    </div>
                                </div>

                                <h5>Prescription ID</h5>
                                <div class="mb-4" style="background-color: #d9d9d9; border-radius:10px;">
                                    <div class="m-2 ps-2 py-2">
                                        {{ $prescriptions->id }}
                                    </div>
                                </div>
                                <h5>Status</h5>
                                <div class="mb-4" style="background-color: #d9d9d9; border-radius:10px;">
                                    <div class="m-2 ps-2 py-2">
                                        {{ $prescriptions->status }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
