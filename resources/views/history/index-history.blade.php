@extends('Structure.main')
@section('container')
<div class="container">
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item text-decoration-none" ><a class="text-decoration-none" href="/" style="color: #55BC44">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page" style="color: #55BC44">History</li>
        </ol>
    </nav>
    <h1 id="NavItems" style="color: var(--main2-color)">Transaction History</h1>
    <div>
        <h3>In Progress</h3>
        <hr style="border: 1px solid black;">
        @for($i=0;$i<1;$i++)
            <div style="border: 2px solid rgba(0,0,0,0.3);padding:20px;border-radius:10px;margin-top:20px" >
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <div class="d-flex flex-row justify-content-between">
                        <img    class="" src="\image\Drug.png" style="width:70px;height:70px;border-radius:5px;background:#F2F2F2" alt="">
                        <div class="d-flex flex-column justify-content-between" style="margin-left: 20px">
                            <label style="font-family: 'Chopin-Trial';font-weight: 400;">Order ID:271104</label>
                            <label style="font-family: 'Chopin-Trial';font-weight: bold; font-size:20px;">Obat Ajaib Mujarab Paling Manjur</label>
                            <label style="font-family: 'Chopin-Trial';font-weight: 400;">+2 product</label>
                        </div>
                    </div>
                    <label class="align-self-baseline">20 Mei 2024 - 13:00 WIB</label>
                </div>
                <div class="d-flex flex-row justify-content-between mt-3">
                    <div style="border: 2px solid #165CA2;border-radius:5px; width:180px;height:40px;display:flex;text-align:center; align-items: center;justify-content: center;color:#165CA2;font-family: 'Chopin-Trial';font-weight: 600;">
                        IN PROGRESS 
                    </div>
                    <button id="trackbutton">
                        TRACK
                    </button>
                </div>
            </div>
        @endfor 
    </div>
    <br>
    <br>
    <div>
        <h3>Past Order</h3>
        <hr style="border: 1px solid black;">
        @for($i=0;$i<3;$i++)
            <div style="border: 2px solid rgba(0,0,0,0.3);padding:20px;border-radius:10px;margin-top:20px" >
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <div class="d-flex flex-row justify-content-between">
                        <img    class="" src="\image\Drug.png" style="width:70px;height:70px;border-radius:5px;background:#F2F2F2" alt="">
                        <div class="d-flex flex-column justify-content-between" style="margin-left: 20px">
                            <label style="font-family: 'Chopin-Trial';font-weight: 400;">Order ID:271104</label>
                            <label style="font-family: 'Chopin-Trial';font-weight: bold; font-size:20px;">Obat Ajaib Mujarab Paling Manjur</label>
                            <label style="font-family: 'Chopin-Trial';font-weight: 400;">+2 product</label>
                        </div>
                    </div>
                    <label class="align-self-baseline">20 Mei 2024 - 13:00 WIB</label>
                </div>
                <div class="d-flex flex-row justify-content-between mt-3">
                    @if($i%2==0)
                        <div style="border: 2px solid var(--main2-color);border-radius:5px; width:180px;height:40px;display:flex;text-align:center; align-items: center;justify-content: center;color:var(--main2-color);font-family: 'Chopin-Trial';font-weight: 600;">
                            COMPLETED 
                        </div>
                    @else
                        <div style="border: 2px solid red;border-radius:5px; width:180px;height:40px;display:flex;text-align:center; align-items: center;justify-content: center;color:red;font-family: 'Chopin-Trial';font-weight: 600;">
                            CANCELED
                        </div>
                    @endif
                    <button id="trackbutton">
                        TRACK
                    </button>
                </div>
            </div>
        @endfor         
    </div>
    <br>
    <br>
    <br>    
</div>
@endsection
