@extends('layouts.app')

@section('title')
    @lang('title.welcome')
@stop

@section('css')
    <style>
        .btn-primary {
            color: #fff;
            background-color: #662d91;
            border-color: #662d91;
        }

        .btn-primary:hover {
            color: #662d91;
            background-color: #fff;
            border-color: #662d91;
        }

        .login-panel {
            color: #fff;
            background: url('/assets/img/bg_welcome_background.jpg') 100% / cover no-repeat;
            min-height: 600px;
            /* padding-top: 50px; */
        }

        .mt-2,
        .my-2 {
            margin-top: 40px !important;
        }
    </style>
@endsection

@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="container">

        <div class="row ">
            <div class="col-lg-12 col-xl-3 col-md-2 "></div>
            <div class="col-lg-12 col-xl-6 col-md-8 ">
                @auth
                    {{-- // user logged in --}}

                    <div class=" align-content-center justify-content-sm-center text-center pt-2">
                        <a href="/" title="NOVITA India" class=" text-center">
                            <img class=" m-2" src="{{ asset('assets/img/logo/NOVITA-Logo.png ') }}"
                                style="padding-top: 200px" alt="NOVITA-INDIA" />
                        </a>
                    </div>
                    <h2 class=" my-2 text-center text-capitalize p-3" style="color:#662d91">Member Already Logged-In</h2>
                    <div class=" text-center m-1 font-size-16 pb-3" style="padding-top: 25px;">Back to redirect NOVITA Member
                        Dashboard.</div>
                    <div class="align-content-center justify-content-sm-center text-center p-lg-9">

                        @if (Auth::user()->role == 1)
                            <a href="{{ route('admin.home') }}" class="btn btn-primary">Admin Dashboard</a>
                        @elseif (Auth::user()->role == 2)
                            <a href="{{ route('seller.home') }}" class="btn btn-primary">Seller Dashboard</a>
                        @else
                            <a href="{{ route('profile') }}" class="btn btn-primary">Customer
                                Dashboard</a>
                        @endif

                    </div>
                @else
                    {{-- // not logged in --}}
                    <div class=" align-content-center justify-content-sm-center text-center pt-2">
                        <a href="/" title="NOVITA India" class=" text-center">
                            <img class=" m-2" src="{{ asset('assets/img/logo/NOVITA-Logo.png ') }}"
                                style="padding-top: 200px" alt="NOVITA-INDIA" />
                        </a>
                    </div>
                    <h2 class="text-center p-5" style="color:#662d91">Account Login</h2>
                    {{-- <div class=" text-center m-1 font-size-16" style="padding-top: 25px;">Enter your NOVITA Member account
                        and
                        password to log in.</div> --}}
                    <div class="align-content-center justify-content-sm-center text-center p-5">

                        @include('component.alert')

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <input type="email" class="form-select1 @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}" autocomplete="email" autofocus
                                        placeholder="Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12 ">
                                    <input type="password" class="form-select1 @error('password') is-invalid @enderror"
                                        id="exampleInputPassword1" name="password" autocomplete="current-password"
                                        placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <div class="col-md-12">
                                    <div class="d-flex  justify-content-between">
                                        <div class="d-inline-block mr-3">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            Remember me
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label text-muted">
                                                <input type="checkbox" class="form-check-input" onclick="myFunction()">
                                                Show Password
                                            </label>
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary m-2">Log In</button>
                            <a href="{{ route('register') }}" class="btn btn-primary m-2">Sign In</a>
                            <p class=" text-center pt-3">
                                @if (Route::has('password.request'))
                                    <a class="text-blue text-center" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </p>
                        </form>
                    </div>
                @endauth

            </div>
            <div class="col-lg-12 col-xl-3 col-md-2 "></div>
        </div>
    </div>
    <!-- End CONTENT WRAPPER -->
@endsection

@section('js')
    <script>
        function myFunction() {
            var x = document.getElementById("exampleInputPassword1");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
@endsection
