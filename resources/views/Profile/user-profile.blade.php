@extends('Structure.main')

@section('container')

@include('Profile.modal-edit-profile')

<div class="container mt-4">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-decoration-none"><a class="text-decoration-none" href="/" style="color: #55BC44">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page" style="color: #55BC44">Profile</li>
        </ol>
    </nav>
</div>

<div class="container d-flex flex-row mt-5 justify-content-between">


    @include("Structure.side-nav-profile")
    <div class="w-75">
       <h1 class="mb-4">My Profile</h1>
       <div class="container border border-grey rounded-4 shadow p-4">
            <ul class="list-unstyled">
                <li class="d-flex flex-row justify-content-between mb-2 align-items-center ">
                    <div class="d-flex flex-row justify-content-between align-items-center mb-3" style="width:25.5%">
                        <div>
                            <img src="{{isset($user->profile_picture) ? asset("storage/".$user->profile_picture) : '/image/userTemp.png'}}" alt="" class="rounded-circle border border-black" style="min-width: 100px; max-width:100px; min-height:100px;object-fit:cover;max-height:100px">
                            {{-- <img src="{{'/image/userTemp.png'}}" alt="" class="rounded-circle border border-black" style="min-width: 60px; max-width:100px; min-height:100px;object-fit:cover;"> --}}
                        </div>
                        <div>
                            <ul class="list-unstyled">
                                <li class="mb-2 h4"><strong>{{$user->name}}</strong></li>
                                <li>{{$user->phone}}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="right-0">
                        {{-- <button type="button" class="btn btn-primary">Edit Profile</button> --}}
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Edit Profile
                        </button>
                    </div>
                </li>
                <li class="border-bottom pt-3 pb-3">
                    <div class="d-flex justify-content-between">
                        <div class="fw-bold">Date of Birth</div>
                        <div>{{$user->dob}}</div>
                    </div>
                </li>
                <li class="border-bottom pt-3 pb-3">
                    <div class="d-flex justify-content-between">
                        <div class="fw-bold">Email</div>
                        <div>{{$user->email}}</div>
                    </div>
                </li>
                <li class="border-bottom pt-3 pb-3">
                    <div class="d-flex justify-content-between">
                        <div class="fw-bold">Address</div>
                        <div class="w-50" style="text-align: end">{{$user->address}}</div>
                    </div>
                </li>
                <li class="pt-3 pb-3">
                    <div class="d-flex justify-content-between">
                        <div class="fw-bold">Gender</div>
                        <div>{{$user->gender}}</div>
                    </div>
                </li>
            </ul>
       </div>
    </div>
</div>
<script>
    document.querySelector(".active").classList.remove('active')
    document.querySelector(".prof").classList.add('active')
</script>

@endsection
