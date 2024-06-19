@extends('Structure.main')

@section('container')
{{$check = null}}
{{-- @dd($cart[0]) --}}
<div class="container">
    <div class="py-4">
        <div class="row gx-5">
            <div class="col-md-8">
                <h2 class="mb-3">Your Cart</h2>
                <div class="overflow-auto" style="max-height: 557px">
                    @for ($i = 0; $i < count($cart[0]->cart_details); $i++)
                        <div class="card {{ $i < count($cart[0]->cart_details) ? 'mb-3' : '' }}">
                            <div class="card-header"># {{ $i+1 }}</div>
                            <div class="card-body d-flex align-items-center gap-3">
                                <div class="card-img" style="max-width: 100px;">
                                    <img src="image/medicine1.jpeg" alt="Medicine Image" class="img-fluid">
                                </div>
                                <div class="card-text d-flex flex-grow-1 justify-content-between align-items-center">
                                    <div>
                                        <h5 class="card-title">{{$cart[0]->cart_details[$i]->product->name}}</h5>
                                        <p class="card-text">{{$cart[0]->cart_details[$i]->product->price}}</p>
                                    </div>
                                    <div class="d-flex align-items-center">

                                        <form action="{{ route('cart.remove', ['productId' => $cart[0]->cart_details[$i]->product->id]) }}" method="POST" style="display:inline;">
                                            @method("delete")
                                            @csrf
                                            <button type="submit" class="btn btn-primary btn-sm me-2 quantity-btn">-</button>
                                        </form>

                                        <span>{{$cart[0]->cart_details[$i]->quantity}}</span>

                                        <form action="{{ route('cart.add', ['productId' => $cart[0]->cart_details[$i]->product->id]) }}" method="POST" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-primary btn-sm ms-2 quantity-btn">+</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($cart[0]->cart_details[$i]->product->patent == 1)
                            @php
                                $check = true
                            @endphp
                        @endif
                    @endfor
                </div>
            </div>

            @php
                $total = 0;
            @endphp

            <div class="col-md-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text" style="color: var(--main2-color);">Total Items</span>
                    <span class="badge rounded-pill" style="background-color: var(--main2-color);">{{count($cart[0]->cart_details)}}</span>
                </h4>
                <ul class="list-group mb-3">
                    <div class="overflow-auto" style="max-height: 169px;">
                        @for ($i = 0; $i < count($cart[0]->cart_details); $i++)
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">{{$cart[0]->cart_details[$i]->product->name}}</h6>
                                    {{-- <small class="text-body-secondary">Brief description</small> --}}
                                </div>
                                <span class="text-body-secondary">{{'Rp '.$cart[0]->cart_details[$i]->product->price.' x '.$cart[0]->cart_details[$i]->quantity}}</span>

                            </li>
                            @php
                                $total += $cart[0]->cart_details[$i]->product->price * $cart[0]->cart_details[$i]->quantity;
                            @endphp
                        @endfor


                    </div>
                    @if(isset($cart[0]->promotion))
                        <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>{{$cart[0]->promotion->code}}</small>
                            </div>
                            <span class="text-success">{{'- Rp '.$cart[0]->promotion->discount * $total}}</span>
                        </li>
                    @endif
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (IDR)</span>
                        <strong>{{'Rp '.$total - $cart[0]->promotion->discount * $total}}</strong>
                    </li>
                </ul>

                <form class="card p-2" action="{{route('cart.promo.add')}}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Promo code"
                            name="promotionName"
                        >
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </form>

                <hr class="mb-4">

                <div class="address">
                    <h4>Billing Address</h4>
                    <p>Jl. Perum Sari Boga No.6, Kec. Sukasari, Kab. Bandung Barat, Bandung 44465</p>
                </div>

                {{-- <button class="w-100 btn btn-primary btn-md" type="submit">
                    Checkout
                </button> --}}
                {{-- <a href="" id="addbtn" class="btn mb-2">Add to Order</a> --}}

                @if($check)
                    <button type="button" id="addbtn" class="btn mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add to Order
                    </button>
                @else
                    <a href="/history">
                        <button type="submit" id="addbtn" class="btn mb-2">
                            Add to Order
                        </button>
                    </a>
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
                                            <div class="container-modal">
                                                <div class="drag-area"  id="drag-area">
                                                    <div class="icon">
                                                        <i class="fas fa-images"></i>
                                                    </div>
                                                    <span class="header">Drag & Drop or <span class="button">Choose File</span> <span>Here</span></span>
                                                    {{-- <input type="file" name="prescription_image" class="form-control" id="prescription_image" hidden /> --}}
                                                    <input type="file" name="prescription_image" class="form-control" id="prescription_image" />
                                                    <span class="support">Supports: JPEG, JPG, PNG</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="/cart">
                                                <button type="button" class="button-modal-cancel">Cancel</button>
                                            </a>
                                                <button type="submit" value="Save" class="button-modal">Save changes</button>

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

</script>

@endsection
