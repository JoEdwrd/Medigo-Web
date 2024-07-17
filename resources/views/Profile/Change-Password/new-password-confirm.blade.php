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
            <form action="/changePassword" method="POST">
                @csrf
                <ul class="ps-0">
                    <li class="d-flex border-0 justify-content-between border-bottom pt-3 pb-3">
                        <label for="newPassword">New Password</label>
                        <input type="password" name="new_password" id="newPassword" class="border border-black p-2 rounded-3">
                    </li>
                    <li class="d-flex border-0 justify-content-between border-bottom pt-3 pb-3 mb-4">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirmPassword" class="border border-black p-2 rounded-3">
                    </li>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <li class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-outline-success" id="custombtn" style="width:18%">Confirm</button>
                    </li>
                </ul>
            </form>

        </div>
    </div>
</div>
<script>
    document.querySelector(".active").classList.remove('active')
    document.querySelector(".chpw").classList.add('active')
</script>
@endsection
