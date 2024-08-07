@extends("AdminPage.Structure.main")
@section("container")
    <form method="post" action="/dashboard/products/{{ $product->slug }}" class="mb-5" enctype="multipart/form-data">
    @csrf
    @method("put")
    <div class="my-4 d-flex flex-row justify-content-between">
        <h1 class="h2">Edit Product</h1>
        <div class="d-flex flex-row justify-content-around" style="width: 30%">
            <a href="/dashboard/products" id="addbtn" class="btn mb-4" style="max-width: 250px;width:40%">Cancel</a>
            <button id="btnselect" class="mb-4" type="submit" style="max-width: 250px;width:40%">Update Product</button>
        </div>
    </div>
    @if(session()->has("success"))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session("success") }}
      </div>
    @endif

      <div class="d-flex flex-column justify-content-between">
        <div class="d-flex flex-row justify-content-evenly">
            <div class="d-flex flex-column  p-5" style="width: 55%;background:#EEEBEB;border-radius:20px">
                <h3>General Information</h3>
                <br>
                <label for="name">Product Name</label>
                <input class="mt-2 p-2 form-control @error("name") is-invalid @enderror" style="width:100%;border-radius:5px;border:none" type="text" id="name" name="name"  autofocus required value="{{ old("name",$product->name) }}">
                @error("name")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <br>
                <label for="slug">Product Slug</label>
                <input class="mt-2 p-2 form-control @error("slug") is-invalid @enderror" style="width:100%;border-radius:5px;border:none" type="text" id="slug" name="slug"  required value="{{ old("slug",$product->slug) }}">
                @error("slug")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <br>
                <label for="minimizedesc" class="form-label">Shown Description Product</label>
                @error("minimizedesc")
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="minimizedesc" type="hidden" name="minimizedesc" value="{{ old("minimizedesc",$product->minimizedesc) }}">
                <trix-editor input="minimizedesc" style="background: white;width:100%;border-radius:5px;height:200px;border:none;overflow:scroll"></trix-editor>
                <br>
                <label for="description" class="form-label">Hide Description Product</label>
                @error("description")
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="description" type="hidden" name="description" value="{{ old("description",$product->description) }}">
                <trix-editor input="description" style="background: white;width:100%;border-radius:5px;height:200px;border:none;overflow:scroll"></trix-editor>
                <br>
                <label for="slug">Package Type</label>
                <input class="mt-2 p-2 form-control @error("shortdesc") is-invalid @enderror" style="width:100%;border-radius:5px;border:none" type="text" id="shortdesc" name="shortdesc"  required value="{{ old("shortdesc",$product->shortdesc) }}">
                @error("shortdesc")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="p-5" style="width: 35%;background:#EEEBEB;border-radius:20px">
                <h3>Product Image</h3>
                <br>
                <input type="hidden" name="oldImage" value="{{ $product->image }}">
                <img src="{{ asset('storage/'.$product->image) }}" class="img-preview img-fluid mb-3 col-sm-12" style="border-radius: 20px">
                <input class="form-control @error("image") is-invalid @enderror" style="width: 100%" type="file" id="image" name="image" onchange="previewImage()">
                @error("image")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <br>
        <div class="d-flex flex-row justify-content-evenly">
            <div class="d-flex flex-column  p-5" style="width: 55%;background:#EEEBEB;border-radius:20px">
                <h3>Price and Stock</h3>
                <br>
                <div class="d-flex flex-row justify-content-between" style="width: 100%">
                    <div class="d-flex flex-column" style="width:50%">
                        <label for="price">Product Price</label>
                        <input class="mt-2 p-2 form-control @error("price") is-invalid @enderror" style="width:90%;border-radius:5px;border:none" type="text" id="price" name="price" required value="{{ old("price",$product->price) }}">
                        @error("price")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column" style="width:50%">
                        <label for="stock">Product Stock</label>
                        <input class="mt-2 p-2 form-control @error("stock") is-invalid @enderror" style="width:90%;border-radius:5px;border:none" type="text" id="stock" name="stock" required value="{{ old("stock",$product->stock) }}">
                        @error("stock")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="d-flex flex-column" style="width:100%">
                        <label for="discprice">Discount Price</label>
                        <input class="mt-2 p-2 form-control @error("discprice") is-invalid @enderror" style="width:90%;border-radius:5px;border:none" type="text" id="discprice" name="discprice" value="{{ old("discprice",$product->discprice) }}">
                        @error("discprice")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            </div>
            <div class="d-flex flex-column  p-5" style="width: 35%;background:#EEEBEB;border-radius:20px">
                <h3>Category and Type</h3>
                <br>
                <div class="d-flex flex-row justify-content-between" style="width: 100%">
                    <div class="d-flex flex-column" style="width:%">
                        <label for="category" class="form-label">Product Category</label>
                        <select class="form-select" name="category_id">
                            @foreach($categories as $category)
                                @if(old("category_id",$product->category_id)==$category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    @php
                    $type=[0,1];
                    @endphp
                   <div class="d-flex flex-column" style="width:40%">
                        <label for="patent" class="form-label">Product Type</label>
                        <select class="form-select" name="patent">
                            @foreach($type as $t)
                                @if(old("type",$product->patent)==$t)
                                    <option value="{{ $t }}" selected>{{ $t }}</option>
                                @else
                                    <option value="{{ $t }}">{{ $t }}</option>
                                @endif
                            @endforeach
                        </select>
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
        function previewImage(){
            const image=document.querySelector("#image");
            const imgPreview=document.querySelector(".img-preview");
            imgPreview.style.display="block";

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src=oFREvent.target.result;
            }
        }
      </script>
@endsection