<div class="movie-grid">
    <div class="movie-thumb c-thumb">
        <a href="{{ route('m-detail', $item->id) }}">
            <img src="{{ asset('storage/'.$item->poster) }}" alt="movie">
        </a>
    </div>
    <div class="movie-content bg-one">
        <h5 class="title m-0">
            <a href="movie-details.html">{{ $item->name }}</a>
        </h5>
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
    </div>
</div>
