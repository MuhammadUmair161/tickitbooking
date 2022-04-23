@extends('layouts/login/layout')
@section('title', 'Login')
@section('main')
    <!-- ==========Sign-In-Section========== -->
    <section class="account-section bg_img" data-background="{{ asset('user/assets/images/account/account-bg.jpg') }}">
        <div class="container">
            <div class="padding-top padding-bottom">
                <div class="account-area">
                    <div class="section-header-3">
                        <a href="{{ route('home') }}"> <span class="cate">hi</span></a>
                        {{-- <h2 class="title">welcome back</h2> --}}
                    </div>
                    <form class="account-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email2">Email<span>*</span></label>
                            <input placeholder="Enter Your Email" id="email" type="email"
                                class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                required autocomplete="email" autofocus>
                            {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="pass3">Password<span>*</span></label>
                            <input placeholder="Password" type="password" class="@error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group checkgroup">
                            {{-- <input type="checkbox" id="bal2" required checked> --}}
                            <input  type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                            <label for="bal2">remember password</label>
                            <a href="{{ route('password.request') }}" class="forget-pass">Forget Password</a>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="log in">
                        </div>
                    </form>
                    <div class="option">
                        Don't have an account? <a href="{{ route('register') }}">sign up now</a>
                    </div>
                    <div class="or"><span>Or</span></div>
                    <ul class="social-icons">
                        <li>
                            <a href="#0">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="active">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Sign-In-Section========== -->
@endsection
