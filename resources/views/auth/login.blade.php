@push('scripts')
    <script src="/js/auth.js"></script>
@endpush
@extends('Structure.main')
@section('container')

    <style>
        .navbar{
            display: none
        }

        .footer{
            display: none
        }
    </style>

    <div class="login-container">
        <div class="background-image-login">


        <form method="POST" action="{{ route('check') }}" class="card-body p-md-5 mx-md-4;">
            @csrf
            <div class="border-login">
                <div class="background-form" >
                    <div>
                        <h1 class="login-title">Login</h1>
                    </div>

                    <div style="font-size: 16px; color:rgb(178,177,177);" id="chopin1">
                            Don't have an account yet?  <a href="{{ route('register') }}" style="font-size: 16px; color:rgb(152,199,191)"id="chopin1"> Sign up</a>
                    </div>

                    <div>
                        <label for="email" value="{{ __('Email') }}" >
                            <p class="fontlabel" id="chopin1">Email Address</p>
                            <input id="email" class="input-field ps-2" type="email" name="email" :value="old('email')"
                            required autofocus autocomplete="email" style='font-size: 16px;'/>
                        </label>
                    </div>

                    <div>
                        <label for="password" value="{{ __('Password') }}" >
                            <p class="fontlabel" id="chopin1">Password</p>
                            <input id="password" class="input-field ps-2" type="password" name="password" required
                                autocomplete="current-password" style='font-size: 16px;'/>
                        </label>
                        <div class="row-2">
                            <input type="checkbox" onclick="showPass()">
                            <label class="fs-6 opacity-50">Show Password</label>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="error-messages" style="color: red">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <button type="submit" id="login-btn" style="background-color: rgb(81,159,145); color:white">Login</button>

                    <div>
                        <a href=""  style="font-size: 16px; color:rgb(178,177,177);">Forgot Password</a>
                    </div>

                </div>

                <div class="col-md-9 col-lg-6 col-xl-5">
                        <img style="width: 500px;" src="..\image\image_login.png">
                </div>
            </div>

        </form>
    </div>
@endsection

