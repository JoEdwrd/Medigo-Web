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
    <div >
        <div class="background-image-login">
        <form method="POST" action="{{ route('register2') }}" id="card-body-register">
            @csrf
            <div class="border-register" style="align-items: center; margin-top: 50px">
                <div class="background-form-register " style="align-content: center;">
                    <div>
                        <h1 class="login-title">Sign Up</h1>
                    </div>
                    <div>
                        <label for="name" value="{{ __('Name') }}" >
                            <p class="fontlabel" id="chopin1">Name</p>
                            <input id="name" class="input-field" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </label>
                    </div>

                    <div>
                        <label for="email" value="{{ __('Email') }}" >
                            <p class="fontlabel" id="chopin1">Email Address</p>
                            <input id="email" class="input-field" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        </label>
                    </div>

                    <div class="error-messages" style="color: red">
                        @if ($errors->has('email'))
                            <p>{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div>
                    <label for="phone" value="{{ __('Phone') }}" >
                        <p class="fontlabel" id="chopin1">Phone Number</p>
                        <input id="phone" class="input-field" type="number" name="phone" :value="old('phone')" required autocomplete="phone" />
                    </label>
                    </div>

                    <div class="error-messages" style="color: red">
                        @if ($errors->has('phone'))
                            <p>{{ __('The phone number has already been taken.') }}</p>
                        @endif
                    </div>

                    <div>
                        <label for="dob" value="{{ __('Date of Birth') }}" >
                            <p class="fontlabel" id="chopin1">Date Of Birth</p>
                            <input id="dob" class="input-field" type="date" name="dob" required autocomplete="dob" />
                        </label>
                    </div>

                    <div class="error-messages" style="color: red">
                        @if ($errors->has('dob'))
                            <p>{{ __('You must be at least 17 years old') }}</p>
                        @endif
                    </div>

                    <div>
                        <label for="password" value="{{ __('Password') }}" >
                            <p class="fontlabel" id="chopin1">Password</p>
                            <input id="password" class="input-field" type="password" name="password" required />
                        </label>
                    </div>

                    <div class="error-messages" style="color: red">
                        @if ($errors->has('password'))
                            <p>{{ $errors->first('password') }}</p>
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

