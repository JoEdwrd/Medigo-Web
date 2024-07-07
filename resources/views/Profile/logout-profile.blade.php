@extends('Structure.main')

@section('container')

<div class="container mt-4">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item">Profile</li>
          <li class="breadcrumb-item">Logout</li>
        </ol>
    </nav>
</div>

<div class="container d-flex flex-row mt-5 justify-content-between">
    @include("Structure.side-nav-profile")
    <div class="w-75">
        <h1 class="mb-4">Log Out</h1>
        <div class="container border border-grey rounded-4 shadow p-4">
            <h3 class="text-center mb-5">Are you sure you want to log out?</h3>
            <div class="d-flex justify-content-around w-50 mx-auto p-2">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-dark" style="width:100px">Yes</button>
                </form>

                <button type="submit" class="btn btn-outline-dark" style="width:100px">No</button>
            </div>
        </div>
    </div>
</div>


<script>
    document.querySelector(".active").classList.remove('active')
    document.querySelector(".logout").classList.add('active')
</script>

@endsection
