@extends("AdminPage.Structure.main")

@section('container')
    <div class="my-4 d-flex flex-row justify-content-between">
        <h1 class="h2">Product Detail</h1>
        <a href="/dashboard/products" id="addbtn" class="btn mb-4" style="max-width: 250px">Back</a>
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
                <label">Product Name</label>
                <div class="mt-2" style="background: #D9D9D9;width:100%;border-radius:5px">
                    <label class="p-2">{{ $product->name }}</label>
                </div>
                <br>
                <label>Description Product</label>
                <div id="descbox" class="mt-2" style="background: #D9D9D9;width:100%;border-radius:5px;height:200px;overflow:scroll">
                    <article class="p-2">
                        {!! $product->description !!}
                    </article>
                </div>
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
                        <label>Product Price</label>
                        <div class="mt-2" style="background: #D9D9D9;width:90%;border-radius:5px">
                            <label class="p-2">Rp. {{ $product->price }}</label>
                        </div>
                    </div>
                    <div class="d-flex flex-column" style="width:50%">
                        <label>Product Stock</label>
                        <div class="mt-2" style="background: #D9D9D9;width:90%;border-radius:5px">
                            <label class="p-2">{{ $product->stock }}</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column  p-5" style="width: 35%;background:#EEEBEB;border-radius:20px">
                <h3>Category and Type</h3>
                <br>
                <div class="d-flex flex-row justify-content-between" style="width: 100%">
                    <div class="d-flex flex-column" style="width:50%">
                        <label>Product Category</label>
                        <div class="mt-2" style="background: #D9D9D9;width:90%;border-radius:5px">
                            <label class="p-2">{{ $product->category->name }}</label>
                        </div>
                    </div>
                    <div class="d-flex flex-column" style="width:50%">
                        <label>Product Type</label>
                        <div class="mt-2" style="background: #D9D9D9;width:90%;border-radius:5px">
                            @if ($product->patent == 1)
                                <label class="p-2">Obat Keras</label>
                            @else
                                <label class="p-2">Obat Bebas</label>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

@endsection