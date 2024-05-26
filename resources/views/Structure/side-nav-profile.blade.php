{{-- @extends('Structure.main') --}}

{{-- @section('container') --}}

<div class="" style="width: 20%">
    
    <nav class="">
        <ul class="nav nav-underline flex-column flex-column border border-grey shadow p-4 rounded-4">
            <li class="nav-item border-bottom">
              <a class="nav-link d-block pt-3 pb-3 prof" href="/profile">My Profile</a>
            </li>
            <li class="nav-item border-bottom">
              <a class="nav-link pb-3 pt-3 chpw" href="/changePassOld">Change Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pb-3 pt-3 logout" href="/logout">Log Out</a>
            </li>
        </ul>
    </nav>
</div>

{{-- @endsection --}}
