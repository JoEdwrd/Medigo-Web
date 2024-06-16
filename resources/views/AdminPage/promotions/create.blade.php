@extends("AdminPage.Structure.main")

@section('container')
    <form method="post" action="/dashboard/promotions" class="p-0" enctype="multipart/form-data">
        @csrf

        <div class="d-flex my-4 px-3 align-items-center text-center justify-content-between">
            <h2>Create New Promotion</h2>
            <div class="d-flex flex-row justify-content-between" style="width: 320px">
                <a href="/dashboard/promotions" id="addbtn" class="btn mb-2" style="width:150px">Cancel</a>
                <button id="btnselect" class="mb-2" type="submit" style="width:150px">Add Promotion</button>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-4 d-flex flex-column justify-content-center align-items-center text-center" style="background-color: #eeebeb; border-radius:20px;">
                    <img src="/image/BannerMain.png" alt="Promotion Banner" class="img-fluid px-5 pt-5 mb-3" style="border-radius:20px;">
                    <p class="pb-2">Yes.jpg</p>
                </div>
            
                <div class="col-md-12 d-flex justify-content-between p-0 mb-4">
                    <div class="col-md-6" style="background-color: #eeebeb; border-radius:20px; width:515px;">
                        <div class="container mt-4 d-flex flex-column">
                            <h3>General Information</h3>

                            <br>

                            <div id="descbox" class="overflow-auto" style="height: 350px">
                                <div class="mb-3 mx-1">
                                    <label for="name">Promotion Name</label>
                                    <input class="mt-2 p-2 form-control @error("name") is-invalid @enderror" style="width:100%;border-radius:5px;border:none" type="text" id="name" name="name"  autofocus required value="{{ old("name") }}">
                                    @error("name")
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
    
                                <div class="mb-3 mx-1">
                                    <label for="slug">Promotion Slug</label>
                                    <input class="mt-2 p-2 form-control @error("slug") is-invalid @enderror" style="width:100%;border-radius:5px;border:none" type="text" id="slug" name="slug"  autofocus required value="{{ old("slug") }}">
                                    @error("slug")
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
    
                                <div class="mb-3 mx-1">
                                    <label for="code">Promotion Code</label>
                                    <input class="mt-2 p-2 form-control @error("code") is-invalid @enderror" style="width:100%;border-radius:5px;border:none" type="text" id="code" name="code"  autofocus required value="{{ old("code") }}">
                                    @error("code")
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3 mx-1">
                                    <label for="discount">Promotion Discount</label>
                                    <input class="mt-2 p-2 form-control @error("discount") is-invalid @enderror" style="width:100%;border-radius:5px;border:none" type="number" step="0.1" id="discount" name="discount"  autofocus required value="{{ old("discount") }}">
                                    @error("discount")
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
    
                                <div class="mb-3 mx-1">
                                    <label for="shortdecs">Promotion Short Description</label>
                                    <input class="mt-2 p-2 form-control @error("shortdecs") is-invalid @enderror" style="width:100%;border-radius:5px;border:none" type="text" id="shortdecs" name="shortdecs"  autofocus required value="{{ old("shortdecs") }}">
                                    @error("shortdecs")
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3 mx-1">
                                    <label for="startdate">Promotion Start Date</label>
                                    <input class="mt-2 p-2 form-control @error("startdate") is-invalid @enderror" style="width:100%;border-radius:5px;border:none" type="text" id="startdate" name="startdate"  autofocus required value="{{ old("startdate") }}">
                                    @error("startdate")
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
    
                                <div class="mb-3 mx-1">
                                    <label for="enddate">Promotion End Date</label>
                                    <input class="mt-2 p-2 form-control @error("enddate") is-invalid @enderror" style="width:100%;border-radius:5px;border:none" type="text" id="enddate" name="enddate"  autofocus required value="{{ old("enddate") }}">
                                    @error("enddate")
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <br>
                        </div>
                    </div>
                    
                    <div class="col-md-5" style="background-color: #eeebeb; border-radius:20px; width:710px;">
                        <div class="container mt-4 d-flex flex-column" style="">
                            <h3><label for="terms" class="form-label">Terms</label></h3>
                            
                            @if ($errors->has('terms'))
                                <p class="text-danger">{{ $errors->first('terms') }}</p>
                            @else
                                <br>
                            @endif

                            <input id="terms" type="hidden" name="terms" value="{{ old("terms") }}">
                            <trix-editor class="overflow-auto mb-4" input="terms" style="background: white; border-radius:10px; height: 305px;"></trix-editor>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
    </form>

    <script>
        document.addEventListener("trix-file-accept", function(event) {
            event.preventDefault();
        });
    </script>
@endsection