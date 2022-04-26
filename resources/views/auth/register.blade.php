@extends('layouts.app')

@section('title')
    @lang('title.register')
@stop

@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="container d-flex align-items-center justify-content-center form-height pt-24px pb-24px">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-10">
                {{-- <div class="card"> --}}
                <div class="">
                    <div class="">
                        <div class="ec-brand">
                            <a href="/" title="AVITA India">
                                <img class="ec-brand-icon " src="{{ asset('assets/img/logo/AVITA-logo.png ') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5">
                        <h4 class="text-dark mb-5">Register</h4>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <input type="text" class="form-select1 @error('name') is-invalid @enderror" id="name"
                                        name="name" placeholder="Name" value="{{ old('name') }}" required
                                        autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="text" class="form-select1 @error('last_name') is-invalid @enderror" id="last_name"
                                        name="last_name" placeholder="Last name" value="{{ old('last_name') }}" required
                                        autocomplete="last_name" autofocus>
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="email" class="form-select1 @error('email') is-invalid @enderror" id="email"
                                        name="email" placeholder="Username" value="{{ old('email') }}" required
                                        autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12 ">
                                    <input type="password" class="form-select1 @error('password') is-invalid @enderror"
                                        id="password" placeholder="Password" name="password" required
                                        autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input" onclick="myFunction()">
                                            Show Password
                                        </label>
                                    </div>
                                </div>


                                <div class="form-group col-md-12 ">
                                    <input id="password_confirmation" type="password" class="form-select1"
                                        name="password_confirmation" placeholder="Confirm Password" required
                                        autocomplete="new-password">
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input" onclick="myFunction1()">
                                            Show Password
                                        </label>
                                    </div>
                                    <div class="d-inline-block mr-3">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        I Agree the terms and conditions
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block mb-4 mt-4">Register</button>

                                    <p class="sign-upp">Already have an account?
                                        <a class="text-blue" href="{{ route('login') }}">Log In</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End CONTENT WRAPPER -->
@endsection

@section('js')
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function myFunction1() {
            var x = document.getElementById("password_confirmation");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
@endsection
