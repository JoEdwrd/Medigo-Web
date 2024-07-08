@extends("AdminPage.Structure.main")
@section("container")
    <form method="post" action="/dashboard/categories/{{ $category->slug }}" class="mb-5" enctype="multipart/form-data">
    @csrf   
    @method("put")
    <div class="my-4 d-flex flex-row justify-content-between">
        <h1 class="h2">Edit Category</h1>
        <div class="d-flex flex-row justify-content-around" style="width: 30%">
            <a href="/dashboard/categories" id="addbtn" class="btn mb-4" style="max-width: 250px;width:40%">Cancel</a>
            <button id="btnselect" class="mb-4" type="submit" style="max-width: 250px;width:45%">Update Category</button>
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
                <label for="name">Category Name</label>
                <input class="mt-2 p-2 form-control @error("name") is-invalid @enderror" style="width:100%;border-radius:5px;border:none" type="text" id="name" name="name"  autofocus required value="{{ old("name",$category->name) }}">
                @error("name")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <br>
                <label for="slug">Category Slug</label>
                <input class="mt-2 p-2 form-control @error("slug") is-invalid @enderror" style="width:100%;border-radius:5px;border:none" type="text" id="slug" name="slug"  required value="{{ old("slug",$category->slug) }}">
                @error("slug")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <br>
                <label for="description" class="form-label">Description Category</label>
                @error("description")
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="description" type="hidden" name="description" value="{{ old("description",$category->description) }}">
                <trix-editor input="description" style="background: white;width:100%;border-radius:5px;height:200px;border:none;overflow:scroll"></trix-editor>
            </div>
            <div class="p-5" style="width: 35%;background:#EEEBEB;border-radius:20px">
                <h3>Category Image</h3>
                <br>
                <input type="hidden" name="oldImage" value="{{ $category->image }}">
                <img src="{{ asset('storage/'.$category->image) }}" class="img-preview img-fluid mb-3 col-sm-12" style="border-radius: 20px">
                <input class="form-control @error("image") is-invalid @enderror" style="width: 100%" type="file" id="image" name="image" onchange="previewImage()">
                @error("image")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <br>    
      </div>
      </form>
      <script>
        document.addEventListener("trix-file-accept", function(event) {
            event.preventDefault();
        });
      </script>
@endsection