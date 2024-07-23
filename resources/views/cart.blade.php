@extends('Structure.main')

@section('container')
{{$check = null}}

<div class="container">
    <div class="py-4">
        <div class="row gx-5">
            <div class="col-md-8">
                <div class="d-flex justify-content-between">
                    <h2 class="mb-3">Your Cart</h2>
                    @if (isset($cart->cart_details[0])) 
                        <form action="{{route('cart.removeAll')}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-success" type="submit" id="custombtn"> <i class="bi bi-eraser"></i> Clear all Items</button>
                        </form>
                    @endif
                </div>

                @if(isset($cart->cart_details[0]))
                <div class="overflow-auto" style="max-height: 557px">
                    @for ($i = 0; $i < count($cart->cart_details); $i++)
                        <div class="card {{ $i < count($cart->cart_details) ? 'mb-3' : '' }}">
                            <div class="card-header"># {{ $i+1 }}</div>
                            <div class="card-body d-flex align-items-center gap-3">
                                <div class="card-img" style="max-width: 100px;">
                                    <img src={{ asset("storage/".$cart->cart_details[$i]->product->image) }} alt="Medicine Image" class="img-fluid">
                                </div>
                                <div class="card-text d-flex flex-grow-1 justify-content-between align-items-center">
                                    <div>
                                        <h5 class="card-title">{{$cart->cart_details[$i]->product->name}}</h5>
                                        <p class="card-text">Rp{{number_format(isset($cart->cart_details[$i]->product->discprice) ? $cart->cart_details[$i]->product->discprice : $cart->cart_details[$i]->product->price, 0, ',', '.')}}&nbsp;<i>per obat</i></p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-around" style="width: 40%">



                                        <form style="display: inline;" method="POST" action="{{ route('cart.changeQty' , ['productId' => $cart->cart_details[$i]->product->id]) }}">
                                            @csrf
                                            <input type="number" min="0" max="{{$cart->cart_details[$i]->product->stock}}" name="quantity" class="form-control input-number w-100" value="{{$cart->cart_details[$i]->quantity}}" onchange="this.form.submit()">
                                        </form>

                                        <a href="{{route('cart.remove', $cart->cart_details[$i]->product->id)}}" onclick="event.preventDefault();
                                        document.getElementById('delete-form-{{ $cart->cart_details[$i]->product->id }}').submit();" class="text-decoration-none" style="color: var(--main2-color)"> <i class="bi bi-trash3-fill"></i> Delete Item</a>

                                        <form id="delete-form-{{$cart->cart_details[$i]->product->id}}" action="{{route('cart.remove', $cart->cart_details[$i]->product->id)}}" method="POST" class="d-none">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </div>

                                </div>
                            </div>
                            @if ($errors->has('quantity_error_' . $cart->cart_details[$i]->product->id))
                                <div class="alert alert-danger text-center p-2 me-3 ms-3">
                                    {{ $errors->first('quantity_error_' . $cart->cart_details[$i]->product->id) }}
                                </div>
                            @endif
                        </div>
                        @if($cart->cart_details[$i]->product->patent  == 1)
                            @php
                                $check = true
                            @endphp
                        @endif
                    @endfor
                </div>
                @else
                    <div class="d-flex justify-content-center flex-column">
                        <span class="text-center w-100 d-block fs-5 mt-5 mb-4" style="color: var(--main2-color)">No items currently in your cart...</span>
                        <a class="d-inline-block btn s-25 m-auto" id="custombtn" style="width: 200px" href="/products">Search for Products</a>
                    </div>
                @endif
            </div>

            @php
                $total = 0;
            @endphp

            <div class="col-md-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text" style="color: var(--main2-color);">Total Items</span>
                    <span class="badge rounded-pill" style="background-color: var(--main2-color);">{{isset($cart->cart_details) ? count($cart->cart_details) : 0 }}</span>
                </h4>
                <ul class="list-group mb-3">
                    @if(isset($cart->cart_details[0]))
                        <div class="overflow-auto" style="max-height: 169px;">
                            @for ($i = 0; $i < count($cart->cart_details); $i++)
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">{{$cart->cart_details[$i]->product->name}}</h6>
                                        {{-- <small class="text-body-secondary">Brief description</small> --}}
                                    </di>
                                    <span class="text-body-secondary">{{'Rp '.(number_format(isset($cart->cart_details[$i]->product->discprice) ? $cart->cart_details[$i]->product->discprice : $cart->cart_details[$i]->product->price, 0, ',', '.')).' x '.$cart->cart_details[$i]->quantity}}</span>

                                </li>
                                @php
                                    $total += (isset($cart->cart_details[$i]->product->discprice) ? $cart->cart_details[$i]->product->discprice : $cart->cart_details[$i]->product->price) * $cart->cart_details[$i]->quantity;
                                @endphp
                            @endfor
                        </div>
                    @endif
                    @if(isset($cart->promotion))
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Subtotal (IDR)</span>
                            {{-- <strong>{{'Rp '.$total}}</strong> --}}
                            <span class="text-body-secondary">{{'Rp ' .number_format($total, 0, ',', '.')}}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>{{$cart->promotion->code}}</small>
                            </div>
                            <div class="d-flex justify-content-around" style="width: 30%">
                                <span class="text-success">{{'- Rp '.number_format($cart->promotion->discount * $total, 0, ',', '.')}}</span>
                                <i role="button" onclick="document.getElementById('formRemovePromo').submit()" class="bi bi-x-lg"></i>
                            </div>
                        </li>
                    @endif
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (IDR)</span>
                        <strong>{{ isset($cart->promotion->discount) ? 'Rp '.number_format($total - $cart->promotion->discount * $total, 0, ',', '.') : 'Rp '.number_format($total, 0, ',', '.')}}</strong>
                    </li>
                </ul>
                @if (isset($cart->cart_details[0]))
                    <form class="card p-2" action="{{route('cart.promo.add')}}" method="POST">
                        @csrf
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Promo code"
                                name="promotionName"
                            >
                            <button type="submit" class="btn btn-success" style="background-color: var(--main2-color)">Redeem</button>
                        </div>
                    </form>
                @endif

                @if ($errors->has('promo_error'))
                    <div class="alert alert-danger text-center p-2 mt-3">
                        {{ $errors->first('promo_error') }}
                    </div>
                @elseif(session('success'))
                    <div class="alert alert-success text-center p-2 mt-3">
                        {{ session('success') }}
                    </div>
                @endif

                <form class="hidden" id="formRemovePromo" action="{{route('cart.promo.remove')}}" method="POST">
                    @csrf
                </form>

                <hr class="mb-4">

                <div class="address">
                    <h4>Billing Address</h4>
                    @if(isset($user->address) && $user->address != '')
                        <p>{{$user->address}}</p>
                    @else
                        <p class="text-danger fs-6">You haven't input your address yet, please input your address to order!</p>
                        <a href="/profile">
                        <button class="btn btn-outline-success" id="custombtn">Go to profile</button></a>
                    @endif
                </div>

                {{-- <button class="w-100 btn btn-primary btn-md" type="submit">
                    Checkout
                </button> --}}
                {{-- <a href="" id="addbtn" class="btn mb-2">Add to Order</a> --}}

                @if ($errors->has('order_error'))
                    <div class="alert alert-danger text-center p-2 mt-4">
                        {{ $errors->first('order_error') }}
                    </div>
                @endif

                @if (isset($cart->cart_details[0]) && isset($user->address) && $user->address != '')
                    @if($check)
                        <button type="button" id="addbtn" class="btn mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add to Order
                        </button>
                    @else
                        {{-- <a href="/addTransaction/{{$cart->id}}"> --}}
                        <a href="/addTransaction/{{$user->id}}">
                            <button type="submit" id="addbtn" class="btn mb-2">
                                Add to Order
                            </button>
                        </a>
                    @endif
                @endif



                    <div class="body-modal">
                        <form action="{{route('upload.prescription')}}" method="POST" enctype="multipart/form-data">
                            {!! csrf_field()    !!}
                        <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h3 class="chopin">Upload Prescription</h3>
                                            <p class="chopin">One of your medications is a prescription drug , Please upload a prescription to continue check out!</p>

                                                {{-- <div class="drag-area"  id="drag-area"> --}}
                                                    {{-- <div class="icon">
                                                        <i class="fas fa-images"></i>
                                                    </div> --}}
                                                    {{-- <span class="header" style="color:  rgba(81, 159, 145, 1)">Drag & Drop or Choose File Here</span> --}}
                                                    {{-- <input type="file" name="prescription_image" class="form-control" id="prescription_image" hidden /> --}}

                                            <img class="img-preview img-fluid mb-3 col-sm-12" style="border-radius: 20px">
                                            <input class="form-control @error("image") is-invalid @enderror" style="width: 100%" type="file" id="image" name="image" onchange="previewImage()">
                                                @error("image")
                                                    <div class="invalid-feedback">

                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                            <div class="modal-footer">
                                                <a href="/cart">
                                                    <button type="button" class="button-modal-cancel">Cancel</button>
                                                </a>
                                                <button type="submit" value="Save" class="button-modal">Save changes</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>



            </div>
    </div>
</div>

<script>
    const dropArea = document.querySelector(".drag-area");
    const dragText = document.querySelector(".header");

    let button = dropArea.querySelector(".button");
    let input = dropArea.querySelector("input");

    let file;

    button.onclick = () => {
        input.click();
    };

    // when browse
    input.addEventListener("change", function () {
        file = this.files[0];
        dropArea.classList.add("active");
        displayFile();
    });

    // when file is inside drag area
    dropArea.addEventListener("dragover", (event) => {
        event.preventDefault();
        dropArea.classList.add("active");
        dragText.textContent = "Release to Upload";
        // console.log('File is inside the drag area');
    });

    // when file leave the drag area
    dropArea.addEventListener("dragleave", () => {
        dropArea.classList.remove("active");
        // console.log('File left the drag area');
        dragText.textContent = "Drag & Drop";
    });

    // // when file is dropped
    // dropArea.addEventListener("drop", (event) => {
    //     event.preventDefault();
    //     // console.log('File is dropped in drag area');

    //     file = event.dataTransfer.files[0]; // grab single file even of user selects multiple files
    //     // console.log(file);
    //     displayFile();
    // });

    // function displayFile() {
    //     let fileType = file.type;
    //     // console.log(fileType);
    //     let validExtensions = ["image/jpeg", "image/jpg", "image/png"];
    //     if (validExtensions.includes(fileType)) {
    //         // console.log('This is an image file');
    //         let fileReader = new FileReader();
    //         fileReader.onload = () => {
    //         let fileURL = fileReader.result;
    //         // console.log(fileURL);
    //         let imgTag = `<img src="${fileURL}" alt="">`;
    //         dropArea.innerHTML = imgTag;
    //         };
    //         fileReader.readAsDataURL(file);
    //     } else {
    //         alert("This is not an Image File");
    //         dropArea.classList.remove("active");
    //     }
    // }
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
