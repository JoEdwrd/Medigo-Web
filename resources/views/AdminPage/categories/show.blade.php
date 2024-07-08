@extends("AdminPage.Structure.main")

@section('container')
    <div class="my-4 d-flex flex-row justify-content-between">
        <h1 class="h2">Category Detail</h1>
        <a href="/dashboard/categories" id="addbtn" class="btn mb-4" style="max-width: 250px">Back</a>
    </div>
    {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All Product</h1>
    </div> --}}
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
                <label">Category Name</label>
                <div class="mt-2" style="background: #D9D9D9;width:100%;border-radius:5px">
                    <label class="p-2">{{ $category->name }}</label>
                </div>
                <br>
                <label>Category Description</label>
                <div id="descbox" class="mt-2" style="background: #D9D9D9;width:100%;border-radius:5px;height:200px;overflow:scroll">
                    <article class="p-2">
                        {!! $category->description !!}
                    </article>
                </div>
            </div>
            <div class="p-5" style="width: 35%;background:#EEEBEB;border-radius:20px">
                <h3>Category Image</h3>
                <br>
                {{-- <img src="{{ asset('storage/'.$product->image) }}" style="width:375px;height:375px;overflow:hidden;border-radius:20px"> --}}
                <img src="{{ asset('storage/'.$category ->image) }}" class="img-preview img-fluid mb-3 col-sm-12" style="border-radius: 20px">
            </div>
        </div>
        <br>    
      </div>

@endsection