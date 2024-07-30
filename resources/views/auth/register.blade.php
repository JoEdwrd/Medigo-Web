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
            display: none;
        }
    </style>
    <div>
        <div class="background-image-login">
        <form method="POST" action="{{ route('register2') }}" id="card-body-register">
            @csrf
            <div class="border-register" style="align-items: center;">
                <div class="background-form-register" style="align-content: center;">
                    <div>
                        <h1 class="login-title">Sign Up</h1>
                    </div>

                     <div style="font-size: 16px; color:rgb(178,177,177);" id="chopin1">
                            Already have an account yet?  <a href="{{ route('login') }}" style="font-size: 16px; color:rgb(152,199,191)"id="chopin1"> Log in</a>
                    </div>
                    <div>
                        <label for="name" value="{{ __('Name') }}" >
                            <p class="fontlabel" id="chopin1">Name</p>
                            <input id="name" class="input-field ps-2" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" style='font-size: 16px;'/>
                        </label>
                    </div>
                    <div>
                        <label for="email" value="{{ __('Email') }}" >
                            <p class="fontlabel" id="chopin1">Email Address</p>
                            <input id="email" class="input-field ps-2" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" style='font-size: 16px;'/>
                        </label>
                    </div>
                    <div class="error-messages" style="color: red">
                        @if ($errors->has('email'))
                            <p class="m-0">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div>
                        <label for="phone" value="{{ __('Phone') }}" >
                            <p class="fontlabel" id="chopin1">Phone Number</p>
                            <input id="phone" class="input-field ps-2" type="string" name="phone" value="{{ old('phone') }}" required autocomplete="phone" style='font-size: 16px;'/>
                        </label>
                    </div>
                    <div class="error-messages" style="color: red; margin: 0; ">
                        @if ($errors->has('phone'))
                            <p class="m-0">{{ $errors->first('phone') }}</p>
                        @endif
                    </div>
                    <div style="margin-top: 2px">
                        <label for="dob" value="{{ __('Date of Birth') }}">
                            <p class="fontlabel" id="chopin1">Date Of Birth</p>
                            <input id="dob" class="input-field ps-2" type="date" name="dob" value="{{ old('dob') }}" required autocomplete="dob" style='width: 209px; font-size: 16px;' />
                        </label>
                    </div>
                    <div class="error-messages" style="color: red; margin: 0; ">
                        @if ($errors->has('dob'))
                            <p class="m-0">{{ $errors->first('dob') }}</p>
                        @endif
                    </div>
                    <div>
                        <label for="password" value="{{ __('Password') }}" >
                            <p class="fontlabel" id="chopin1">Password</p>
                            <input id="password" class="input-field ps-2" type="password" name="password" required style='font-size: 16px;'/>
                        </label>
                        <div class="row-2 mt-2">
                            <input type="checkbox" onclick="showPass()">
                            <label class="fs-6 opacity-50">Show Password</label>
                        </div>
                    </div>

                    <div class="error-messages" style="color: red; margin-bottom: 0;">
                        @if ($errors->has('password'))
                            <p class="m-0">{{ $errors->first('password') }}</p>
                        @endif
                    </div>

                    <button type="submit" id="registerbtn" style="background-color: rgb(81,159,145); color:white">Sign Up</button>

                </div>

                <div class="col-md-9 col-lg-6 col-xl-5">
                        <img style="width: 500px;" src="..\image\image_login.png">
                </div>
            </div>


        </form>
    </div>
@endsection

