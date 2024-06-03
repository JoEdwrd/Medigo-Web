@extends("AdminPage.Structure.main")
@section("container")
    <form method="post" action="/dashboard/products" class="mb-5">
    @csrf   
    <div class="my-4 d-flex flex-row justify-content-between">
        <h1 class="h2">Add New Product</h1>
        <div class="d-flex flex-row justify-content-around" style="width: 30%">
            <a href="/dashboard/products" id="addbtn" class="btn mb-4" style="max-width: 250px;width:40%">Cancel</a>
            <button id="btnselect" class="mb-4" type="submit" style="max-width: 250px;width:40%">Add Product</button>
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
                <input class="mt-2 p-2 form-control @error("title") is-invalid @enderror" style="width:100%;border-radius:5px;border:none" type="text" id="name" name="name"  autofocus required value="{{ old("name") }}">
                @error("title")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <br>
                <label for="slug">Product Slug</label>
                <input class="mt-2 p-2 form-control @error("slug") is-invalid @enderror" style="width:100%;border-radius:5px;border:none" type="text" id="slug" name="slug"  required value="{{ old("slug") }}">
                @error("slug")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <br>
                <label for="description" class="form-label">Description Product</label>
                @error("description")
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="description" type="hidden" name="description" value="{{ old("description") }}">
                <trix-editor input="description" style="background: white;width:100%;border-radius:5px;height:200px;border:none;overflow:scroll"></trix-editor>
            </div>
            <div class="d-flex justify-content-center align-item-center p-5" style="width: 35%;background:#EEEBEB;border-radius:20px">
                <img src="\image\medicine1.jpeg" style="width:375px;height:375px;overflow:hidden;border-radius:20px">
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
                        <input class="mt-2 p-2 form-control @error("price") is-invalid @enderror" style="width:90%;border-radius:5px;border:none" type="text" id="price" name="price" required value="{{ old("price") }}">
                        @error("price")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column" style="width:50%">
                        <label for="stock">Product Stock</label>
                        <input class="mt-2 p-2 form-control @error("stock") is-invalid @enderror" style="width:90%;border-radius:5px;border:none" type="text" id="stock" name="stock" required value="{{ old("stock") }}">
                        @error("stock")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
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
                                @if(old("category_id")==$category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else 
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="d-flex flex-column" style="width:40%">
                        <label for="patent" class="form-label">Product Type</label>
                        <select class="form-select" name="patent">
                            @for($i=0;$i<2;$i++)
                                @if(old("type")==$i)
                                    <option value="{{ $i }}" selected>{{ $i }}</option>
                                @else 
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endif
                            @endfor
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
      </script>
@endsection