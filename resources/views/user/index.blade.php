@extends('layouts/user/layout')
@section('title','Home')
@section('main')
    <!-- ==========Movie-Section========== -->
    <section class="movie-section padding-top padding-bottom">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="left">
                        <h2 class="title">movies</h2>
                        <p>Be sure not to miss these Movies today.</p>
                    </div>
                    <ul class="tab-menu">
                        <li class="active">
                            now showing
                        </li>
                        <li>
                            coming soon
                        </li>
                        <li>
                            exclusive
                        </li>
                    </ul>
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/movie/movie02.jpg" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">mars</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="user/assets/images/movie/tomato.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="user/assets/images/movie/cake.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="item">
                                    <div class="movie-grid">
                                        <div class="movie-thumb c-thumb">
                                            <a href="#0">
                                                <img src="user/assets/images/movie/movie03.jpg" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title m-0">
                                                <a href="#0">venus</a>
                                            </h5>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="user/assets/images/movie/tomato.png" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="user/assets/images/movie/cake.png" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> 
                                </div>
                                <div class="item">
                                    <div class="movie-grid">
                                        <div class="movie-thumb c-thumb">
                                            <a href="#0">
                                                <img src="user/assets/images/movie/movie04.jpg" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title m-0">
                                                <a href="#0">horror night</a>
                                            </h5>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="user/assets/images/movie/tomato.png" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="user/assets/images/movie/cake.png" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> 
                                </div> --}}
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="owl-carousel owl-theme tab-slider">
                            {{-- <div class="item">
                                    <div class="movie-grid">
                                        <div class="movie-thumb c-thumb">
                                            <a href="#0">
                                                <img src="user/assets/images/movie/movie01.jpg" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title m-0">
                                                <a href="#0">alone</a>
                                            </h5>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="user/assets/images/movie/tomato.png" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="user/assets/images/movie/cake.png" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> 
                                </div>
                                <div class="item">
                                    <div class="movie-grid">
                                        <div class="movie-thumb c-thumb">
                                            <a href="#0">
                                                <img src="user/assets/images/movie/movie02.jpg" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title m-0">
                                                <a href="#0">mars</a>
                                            </h5>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="user/assets/images/movie/tomato.png" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="user/assets/images/movie/cake.png" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> 
                                </div> --}}
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/movie/movie03.jpg" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">venus</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="user/assets/images/movie/tomato.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="user/assets/images/movie/cake.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/movie/movie04.jpg" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">horror night</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="user/assets/images/movie/tomato.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="user/assets/images/movie/cake.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="owl-carousel owl-theme tab-slider">
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/movie/movie01.jpg" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">alone</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="user/assets/images/movie/tomato.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="user/assets/images/movie/cake.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/movie/movie02.jpg" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">mars</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="user/assets/images/movie/tomato.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="user/assets/images/movie/cake.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/movie/movie03.jpg" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">venus</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="user/assets/images/movie/tomato.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="user/assets/images/movie/cake.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/movie/movie04.jpg" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">horror night</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="user/assets/images/movie/tomato.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="user/assets/images/movie/cake.png" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
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

    <!-- ==========Event-Section========== -->
    <section class="event-section padding-top padding-bottom bg-four">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="left">
                        <h2 class="title">events</h2>
                        <p>Be sure not to miss these Event today.</p>
                    </div>
                    <ul class="tab-menu">
                        <li class="active">
                            now showing
                        </li>
                        <li>
                            coming soon
                        </li>
                        <li>
                            exclusive
                        </li>
                    </ul>
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/event/event01.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">Digital Economy Conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/event/event02.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">web design conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/event/event03.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">digital thinkers meetup</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/event/event04.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">world digital conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="owl-carousel owl-theme tab-slider">
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/event/event01.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">Digital Economy Conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/event/event02.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">web design conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/event/event03.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">digital thinkers meetup</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/event/event04.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">world digital conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="owl-carousel owl-theme tab-slider">
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/event/event01.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">Digital Economy Conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/event/event02.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">web design conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/event/event03.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">digital thinkers meetup</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="user/assets/images/event/event04.jpg" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="#0">world digital conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Event-Section========== -->
@endsection
