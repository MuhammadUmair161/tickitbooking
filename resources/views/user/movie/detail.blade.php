@extends('layouts\user\movie\detail')

@section('title', 'Movie Details')
@section('main')
    <!-- ==========Banner-Section========== -->
    <section class="details-banner bg_img" data-background="{{ asset('storage/' . $movies->poster) }}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-thumb">
                    <img src="{{ asset('storage/' . $movies->poster) }}" alt="movie">
                    <a href="{{ $movies->trailer }}" class="video-popup">
                        <img src="{{ asset('user/assets/images/movie/video-button.png') }}" alt="movie">
                    </a>
                </div>
                <div class="details-banner-content offset-lg-3">
                    <h3 class="title">{{ $movies->name }}</h3>
                    <div class="tags">
                        <a>English</a>
                        <a>Hindi</a>
                        <a>Telegu</a>
                        <a>Tamil</a>
                    </div>
                    <a href="#" class="button">{{ $movies->genre }}</a>
                    <div class="social-and-duration">
                        <div class="duration-area">
                            <div class="item">
                                <i class="fas fa-calendar-alt"></i><span>{{ $movies->released_at }}</span>
                            </div>
                            <div class="item">
                                <i class="far fa-clock"></i><span>2 hrs 50 mins</span>
                            </div>
                        </div>
                        <ul class="social-share">
                            <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#0"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Book-Section========== -->
    <section class="book-section bg-one">
        <div class="container">
            <div class="book-wrapper offset-lg-3">
                <div class="left-side">
                    <div class="item">
                        <div class="item-header">
                            <div class="thumb">
                                <img src="{{ asset('user/assets/images/movie/tomato2.png') }}" alt="movie">
                            </div>
                            <div class="counter-area">
                                <span class="counter-item odometer" data-odometer-final="88">0</span>
                            </div>
                        </div>
                        <p>tomatometer</p>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="thumb">
                                <img src="{{ asset('user/assets/images/movie/cake2.png') }}" alt="movie">
                            </div>
                            <div class="counter-area">
                                <span class="counter-item odometer" data-odometer-final="88">0</span>
                            </div>
                        </div>
                        <p>audience Score</p>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <h5 class="title">4.5</h5>
                            <div class="rated">
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                        <p>Users Rating</p>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="rated rate-it">
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                            </div>
                            <h5 class="title">0.0</h5>
                        </div>
                        <p><a href="#0">Rate It</a></p>
                    </div>
                </div>
                <a href="{{ route('m-ticketPlan', $movies->id) }}" class="custom-button">book tickets</a>
            </div>
        </div>
    </section>
    <!-- ==========Book-Section========== -->

    <!-- ==========Movie-Section========== -->
    <section class="movie-details-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center flex-wrap-reverse mb--50">
                <div class="col-lg-3 col-sm-10 col-md-6 mb-50">
                    <div class="widget-1 widget-tags">
                        <ul>
                            <li>
                                <a href="#0">2D</a>
                            </li>
                            <li>
                                <a href="#0">imax 2D</a>
                            </li>
                            <li>
                                <a href="#0">4DX</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-1 widget-offer">
                        <h3 class="title">Applicable offer</h3>
                        <div class="offer-body">
                            <div class="offer-item">
                                <div class="thumb">
                                    <img src="{{ asset('user/assets/images/sidebar/offer01.png') }}" alt="sidebar">
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="#">Amazon Pay Cashback Offer</a>
                                    </h6>
                                    <p>Win Cashback Upto Rs 300*</p>
                                </div>
                            </div>
                            <div class="offer-item">
                                <div class="thumb">
                                    <img src="{{ asset('user/assets/images/sidebar/offer02.png') }}" alt="sidebar">
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="#">PayPal Offer</a>
                                    </h6>
                                    <p>Transact first time with Paypal and
                                        get 100% cashback up to Rs. 500</p>
                                </div>
                            </div>
                            <div class="offer-item">
                                <div class="thumb">
                                    <img src="{{ asset('user/assets/images/sidebar/offer03.png') }}" alt="sidebar">
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="#0">HDFC Bank Offer</a>
                                    </h6>
                                    <p>Get 15% discount up to INR 100*
                                        and INR 50* off on F&B T&C apply</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mb-50">
                    <div class="movie-details">
                        <h3 class="title">photos</h3>
                        <div class="details-photos owl-carousel">
                            <div class="thumb">
                                <a href="assets/images/movie/movie-details01.jpg') }}" class="img-pop">
                                    <img src="{{ asset('user/assets/images/movie/movie-details01.jpg') }}" alt="movie">
                                </a>
                            </div>
                            <div class="thumb">
                                <a href="assets/images/movie/movie-details02.jpg') }}" class="img-pop">
                                    <img src="{{ asset('user/assets/images/movie/movie-details02.jpg') }}" alt="movie">
                                </a>
                            </div>
                            <div class="thumb">
                                <a href="assets/images/movie/movie-details03.jpg') }}" class="img-pop">
                                    <img src="{{ asset('user/assets/images/movie/movie-details03.jpg') }}" alt="movie">
                                </a>
                            </div>
                            <div class="thumb">
                                <a href="assets/images/movie/movie-details01.jpg') }}" class="img-pop">
                                    <img src="{{ asset('user/assets/images/movie/movie-details01.jpg') }}" alt="movie">
                                </a>
                            </div>
                            <div class="thumb">
                                <a href="assets/images/movie/movie-details02.jpg') }}" class="img-pop">
                                    <img src="{{ asset('user/assets/images/movie/movie-details02.jpg') }}" alt="movie">
                                </a>
                            </div>
                            <div class="thumb">
                                <a href="assets/images/movie/movie-details03.jpg') }}" class="img-pop">
                                    <img src="{{ asset('user/assets/images/movie/movie-details03.jpg') }}" alt="movie">
                                </a>
                            </div>
                        </div>
                        <div class="tab summery-review">
                            <ul class="tab-menu">
                                <li class="active">
                                    summery
                                </li>
                                <li>
                                    user review <span>147</span>
                                </li>
                            </ul>
                            <div class="tab-area">
                                <div class="tab-item active">
                                    <div class="item">
                                        {{-- <h5 class="sub-title">Synopsis</h5> --}}
                                        <p>{{ $movies->desc }}</p>
                                    </div>
                                    <div class="item">
                                        <div class="header">
                                            <h5 class="sub-title">cast</h5>
                                            <div class="navigation">
                                                <div class="cast-prev"><i
                                                        class="flaticon-double-right-arrows-angles"></i></div>
                                                <div class="cast-next"><i
                                                        class="flaticon-double-right-arrows-angles"></i></div>
                                            </div>
                                        </div>
                                        <div class="casting-slider owl-carousel">
                                            @include('include\user\cards\cast\card')
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-item">
                                    @include('include\user\cards\commit\card')
                                    <div class="load-more text-center">
                                        <a href="#0" class="custom-button transparent">load more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Movie-Section========== -->

@endsection
