@extends('layouts/login/layout')
@section('title', 'profile')
@section('main')
    <!-- ==========Profile-Section========== -->
    <section class="account-section bg_img" data-background="{{ asset('user/assets/images/account/account-bg.jpg') }}">
        <div class="container p-5">
            <div class="row justify-content-between">
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <div class="section-header-3 left-style">
                        <span class="cate">profile</span>
                        <h2 class="title">update your profile</h2>
                    </div>
                    <form class="contact-form"action="{{ route('profile-edit', $profile->user_id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Enter Your Frist Name" value="{{ $profile->fName }}" name="fname" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Enter Your Frist Name" value="{{ $profile->lName }}" name="lname">
                        </div>
                        <div class="form-group">
                            <input type="file" value="{{ $profile->image }}" name="image">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="update">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- ==========Profile-Section========== -->

@endsection
