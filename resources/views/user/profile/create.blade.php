@extends('layouts/login/layout')
@section('title', 'Login')
@section('main')
    <!-- ==========Sign-In-Section========== -->
    <section class="account-section bg_img" data-background="{{ asset('user/assets/images/account/account-bg.jpg') }}">
        <div class="container p-5">
            <div class="row justify-content-between">
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <div class="section-header-3 left-style">
                        <span class="cate">profile</span>
                        <h2 class="title">create your profile</h2>
                    </div>
                    <form class="contact-form" method="post" enctype="multipart/form-data" action="{{ route('profile-save') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Enter Your Frist Name" name="fname" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Enter Your Frist Name" name="lname" required="">
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" required="">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="next">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- ==========Sign-In-Section========== -->
@endsection
