@extends('layouts/user/layout2')
@section('title', 'Blog Details')
@section('main')
    <!-- ==========Blog-Section========== -->
    <section class="blog-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-lg-8 mb-50 mb-lg-0">
                    <article>
                        <div class="post-item post-details">
                            <div class="post-thumb">
                                <img src="{{ asset('storage/'. $blog->image) }}" alt="blog">
                            </div>
                            <div class="post-content">
                                <div class="post-meta text-center">
                                    <div class="item">
                                        <a href="#0">
                                            <i class="flaticon-conversation"></i>
                                            <span>30</span>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#0">
                                            <i class="flaticon-share-1"></i>
                                            <span>22</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="entry-content p-0">
                                        <div class="left">
                                            <span class="date">{{ $blog->created_at }} BY </span>
                                        </div>
                                    </div>
                                    <div class="post-header">
                                        <h4 class="m-title">
                                            {{ $blog->title }}
                                        </h4>
                                        <blockquote>
                                            {{ $blog->sub_title }}
                                        </blockquote>
                                        <p>
                                            {{ $blog->blog }}
                                        </p>
                                    </div>
                                    <div class="tags-area">
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
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0">
                                                    <i class="fab fa-pinterest"></i>
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
                        </div>
                        <div class="blog-author">
                            <div class="author-thumb">
                                <a href="#0">
                                    <img src="{{ asset('user/assets/images/blog/author.jpg') }}" alt="blog">
                                </a>
                            </div>
                            <div class="author-content">
                                <h5 class="title">
                                    <a href="#">
                                        {{ $blog->user->name }} 
                                    </a>
                                </h5>
                                <p>
                                    {{ $blog->user->desc }}
                                </p>
                            </div>
                        </div>
                        @include('include\user\cards\commit\card2')
                    </article>
                </div>
                <div class="col-lg-4 col-sm-10 col-md-8">
                    <aside>
                        <div class="widget widget-search">
                            <h5 class="title">search</h5>
                            <form class="search-form">
                                <input type="text" placeholder="Enter your Search Content" required>
                                <button type="submit"><i class="flaticon-loupe"></i>Search</button>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========Blog-Section========== -->

@endsection
