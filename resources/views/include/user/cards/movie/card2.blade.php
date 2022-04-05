<div class="movie-list">
    <div class="movie-thumb c-thumb">
        <a href="{{ route('m-detail', $item->id) }}" class="w-100 bg_img h-100"
        data-background="{{ asset('storage/'.$item->poster) }}">
        <img class="d-sm-none" src="{{ asset('storage/'.$item->poster) }}" alt="movie">
    </a>
    </div>
    <div class="movie-content bg-one">
        <h5 class="title">
            <a href="movie-details.html">{{ $item->name }}</a>
        </h5>
        <p class="duration">2hrs 50 min</p>
        <div class="movie-tags">
            <a href="#0">action</a>
            <a href="#0">adventure</a>
            <a href="#0">fantasy</a>
        </div>
        <div class="release">
            <span>Release Date : </span> <a href="#0">{{ $item->released_at }}</a>
        </div>
        <ul class="movie-rating-percent">
            <li>
                <div class="thumb">
                    <img src="{{ asset('user/assets/images/movie/tomato.png') }}" alt="movie">
                </div>
                <span class="content">88%</span>
            </li>
            <li>
                <div class="thumb">
                    <img src="{{ asset('user/assets/images/movie/cake.png') }}" alt="movie">
                </div>
                <span class="content">88%</span>
            </li>
        </ul>
        <div class="book-area">
            <div class="book-ticket">
                <div class="react-item">
                    <a href="#0">
                        <div class="thumb">
                            <img src="{{ asset('user/assets/images/icons/heart.png') }}" alt="icons">
                        </div>
                    </a>
                </div>
                <div class="react-item mr-auto">
                    <a href="#0">
                        <div class="thumb">
                            <img src="{{ asset('user/assets/images/icons/book.png') }}" alt="icons">
                        </div>
                        <span>book ticket</span>
                    </a>
                </div>
                <div class="react-item">
                    <a href="{{ $item->trailer }}" class="video-popup">
                        <div class="thumb">
                            <img src="{{ asset('user/assets/images/icons/play-button.png') }}" alt="icons">
                        </div>
                        <span>watch trailer</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

