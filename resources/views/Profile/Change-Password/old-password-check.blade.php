@extends('Structure.main')

@section('container')

<div class="container mt-4">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-decoration-none"><a class="text-decoration-none" href="/" style="color: #55BC44">Home</a></li>
            <li class="breadcrumb-item text-decoration-none"><a class="text-decoration-none" href="/profile" style="color: #55BC44">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page" style="color: #55BC44">Change Password</li>
        </ol>
    </nav>
</div>

<div class="container d-flex flex-row mt-5 justify-content-between">
    @include("Structure.side-nav-profile")
    <div class="w-75">
        <h1 class="mb-4">Change Password</h1>
        <div class="container border border-grey rounded-4 shadow p-4">  
            <form action="/newPass" method="post">
                @csrf
                <div class=" border-0  border-bottom pt-3 pb-3 mb-4">
                    <div class="d-flex justify-content-between mb-4">
                        <label class="fw-bold" for="oldPassword">Old Password</label>
                        <input class="border border-black p-2 rounded-3" type="password" name="old_password" id="oldPassword">
                    </div>
                    {{-- @dd($errors) --}}
                    @if ($errors->any())
                        <div class="alert alert-danger text-center p-2">
                            {{ $errors->first() }}
                        </div>
                    @endif

                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-success" style="width:18%">Confirm</button>
                </div>
                
            </form>
        </div>
    </div>
</div>



<script>
    document.querySelector(".active").classList.remove('active')
    document.querySelector(".chpw").classList.add('active')
</script>

@endsection








