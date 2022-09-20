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

        .btn-primary1 {
            color: #662d91;
            background-color: #fff;
            border-color: #fff;
        }

        .btn-primary1:hover {
            color: #fff;
            background-color: #662d91;
            border-color: #fff;
        }

        .btn-primary:hover {
            color: #662d91;
            background-color: #fff;
            border-color: #662d91;
        }

        .login-panel {
            color: #fff;
            background-color: #4C1B7B;
            /* background: url('/assets/img/bg_welcome_background.jpg') 100% / cover no-repeat; */
            min-height: 600px;
            /* padding-top: 50px; */
        }

        .mt-2,
        .my-2 {
            margin-top: 40px !important;
        }

        .textColor {
            color: #662d91;
        }

        @media (max-width:767px) {
            .hidden-sm-down {
                display: none !important
            }
        }

        @media (min-width:768px) {
            .hidden-md-up {
                display: none !important
            }
        }
    </style>
@endsection

@section('content')
    <!-- CONTENT WRAPPER -->
    <!-- CONTENT WRAPPER -->
    <div class="container">

        <div class="row pt-90">
            <div class="col-lg-6 col-xl-6 login-panel my-lg-9 pt-50">
                {{-- <img src="/assets/img/bg_welcome_background.jpg"> --}}
                <h1 class="pl-3 pb-4 text-capitalize text-center pr-4">customer support</h1>

                <h3 class="pl-3 text-capitalize" style="padding-top: 21px;">Call Support</h3>
                <div class="pl-3 font-size-40"><i class="mdi mdi-cellphone-basic mdi-18px"></i> +91
                    7208845987&nbsp;&nbsp;<strong style="border-left:2px solid #fff;"></strong>&nbsp;&nbsp;Mon - Sat : 10:00
                    AM To 06:00 PM</div>
                <h3 class="pl-3 pt-4 text-capitalize">Email Support</h3>
                <div class="pl-3 font-size-40"><i class="mdi mdi-email-outline mdi-18px"></i>
                    support@novita-global.com&nbsp;&nbsp;<strong
                        style="border-left:2px solid #fff;"></strong>&nbsp;&nbsp;Dedicated Support Team
                </div>
                <h3 class="pl-3 pt-4 text-capitalize">Online Portal</h3>
                <div class="pl-3 font-size-40">Create your account and register your product. Use the portal to generate a
                    ticket against any of your grievances <i class="mdi mdi-arrow-right-bold-outline mdi-18px hidden-sm-down"></i></div>


                <div class="row pl-3 pt-4">
                    {{-- <h3 class="pb-3 text-capitalize">Product Guide</h3> --}}

                    <div class="row">
                        <div class="col-lg-6">
                            {{-- <select name="download" class="form-select1" onChange="download(this.value)">
                                <option>Select Manual</option>
                                <option value="/assets/product/NOVITA-Ultimus-Manual.pdf">Wristio 1</option>
                                <option value="/assets/product/NOVITA-Ultimus-Manual-Wristio.pdf">Wristio 2</option>
                            </select> --}}

                            <div class="dropdown">
                                {{-- <button class="text-white dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false"
                                    style="font-size: 24px; font-weight:500;">
                                    Select Product
                                </button> --}}

                                <button class="text-white dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false"
                                    style="font-size: 24px; font-weight:500;">
                                    Product Guide
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="/assets/product/NOVITA-Ultimus-Manual.pdf"
                                            target="_blank">Wristio 1</a></li>
                                    <li><a class="dropdown-item" href="/assets/product/NOVITA-Ultimus-Manual-Wristio.pdf"
                                            target="_blank">Wristio 2</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 pt-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="{{ route('warrantyAndReplacementPolicy') }}" class="btn btn-primary1">Warranty
                                    Policy</a>
                                <div class="pt-2 pb-2"></div>
                                {{-- <a href="#" target="_blank" class="btn btn-primary1 hidden-sm-down">Terms and
                                    Conditions</a> --}}

                            </div>
                            <div class="col-lg-6 pt-2">
                                {{-- <a href="#" target="_blank" class="btn btn-primary1 hidden-md-up">Terms and
                                    Conditions</a> --}}
                            </div>
                        </div>
                    </div>

                </div>

                <div class="align-content-center justify-content-sm-center text-center pt-50">

                </div>

            </div>

            <div class="col-lg-1 col-xl-1 pt-25" style="padding-left: 80px!important;">
                <div style="border-left:2px solid #662d91;height:700px" class="hidden-sm-down"></div>
            </div>

            <div class="col-lg-5 col-xl-5 my-lg-9">
                @auth
                    {{-- // user logged in --}}

                    <div class=" align-content-center justify-content-sm-center text-center pt-4">
                        <a href="/" title="NOVITA India" class=" text-center">
                            <img class=" m-2" src="{{ asset('assets/img/logo/NOVITA-Logo.png ') }}" style="padding-top: 120px"
                                alt="NOVITA-INDIA" />
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
                            <img class=" m-2" src="{{ asset('assets/img/logo/NOVITA-Logo.png ') }}" style="padding-top: 120px"
                                alt="NOVITA-INDIA" />
                        </a>
                    </div>
                    <h2 class="text-center p-5" style="color:#662d91">Account Login</h2>
                    {{-- <div class=" text-center m-1 font-size-16" style="padding-top: 25px;">Enter your NOVITA Member account
                    and
                    password to log in.</div> --}}
                    <div class="align-content-center justify-content-sm-center text-center p-5">

                        @include('component.alert')

                        <form method="POST" action="{{ route('login') }}">
                            {!! csrf_field() !!}

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
                            <a href="{{ route('register') }}" class="btn btn-primary m-2">Sign Up</a>
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
        </div>
    </div>
    <!-- End Content Wrapper -->
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

    <script type="text/javascript">
        function download(d) {
            if (d == 'Select Manual') return;
            window.location = 'http://127.0.0.1:8000' + d;
        }
    </script>

    <script>
        /* When the user clicks on the button,
                                        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

@endsection
