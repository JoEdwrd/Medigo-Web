@extends("AdminPage.Structure.main")

@section('container')
    <div class="my-4 d-flex flex-row justify-content-between">
        <h1 class="h2">User Detail</h1>
        <a href="/dashboard/users" id="addbtn" class="btn mb-2" style="max-width: 250px">Back</a>
    </div>
    {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All user</h1>
    </div> --}}
    @if(session()->has("success"))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session("success") }}
      </div>
    @endif
    <div class="d-flex flex-row justify-content-between mb-5">
        <div class="d-flex flex-column  p-5" style="width: 62%;background:#EEEBEB;border-radius:20px">
            <h3>General Information</h3>
            <br>
            <label">User ID</label>
            <div class="mt-2" style="background: #D9D9D9;width:100%;border-radius:5px">
                <label class="p-2">{{ $user->id }}</label>
            </div>
            <br>
            <label>User Name</label>
            <div id="descbox" class="mt-2" style="background: #D9D9D9;width:100%;border-radius:5px;">
                <article class="p-2">
                    {!! $user->name !!}
                </article>
            </div>
            <br>
            <label>Email</label>
            <div id="descbox" class="mt-2" style="background: #D9D9D9;width:100%;border-radius:5px;">
                <article class="p-2">
                    {!! $user->email !!}
                </article>
            </div>
            <br>
            <label>Date of Birth</label>
            <div id="descbox" class="mt-2" style="background: #D9D9D9;width:100%;border-radius:5px;">
                <article class="p-2">
                    {!! $user->dob !!}
                </article>
            </div>
            <br>
            <label>Phone Number</label>
            <div id="descbox" class="mt-2" style="background: #D9D9D9;width:100%;border-radius:5px;">
                <article class="p-2">
                    {!! $user->phone !!}
                </article>
            </div>
            <br>
            <label>Gender</label>
            <div id="descbox" class="mt-2" style="background: #D9D9D9;width:100%;border-radius:5px;">
                <article class="p-2">
                    {!! $user->gender !!}
                </article>
            </div>
        </div>
        <br>
        <div style="width: 36%">
            <div class="d-flex justify-content-center align-item-center mb-3 p-4" style="background:#EEEBEB;border-radius:20px">
                <img src="{{ asset('storage/'.$user->profile_picture) }}" style="width:375px;height:375px;overflow:hidden;border-radius:20px">
            </div>
            <div class="d-flex flex-column p-4" style="background:#EEEBEB;border-radius:20px">
                <label>Address</label>
                <br>
                <div class="" style="background: #D9D9D9;width:100%;border-radius:5px;height:200px">
                    <label class="p-3">{{ $user->address }}</label>
                </div>
            </div>
        </div>
    </div>

@endsection
