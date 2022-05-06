<div class="post-item">
    <div class="post-thumb">
        <a href="blog-details.html">
            <img src="{{ asset('storage/'. $item->image) }}" alt="blog">
        </a>
    </div>
    <div class="post-content">
        <div class="post-header">
            <h4 class="title">
                <a href="blog-details.html">
                    {{ $item->title }}
                </a>
            </h4>
            <div class="meta-post">
                <a href="#0" class="mr-4"><i class="flaticon-conversation"></i>20 Comments</a>
                <a href="#0"><i class="flaticon-view"></i>466 View</a>
            </div>
            <p>
                {{ $item->sub_title }}
            </p>
        </div>
        <div class="entry-content">
            <div class="left">
                <span class="date">Dece 15, 2020 BY </span>
                <div class="authors">
                    <div class="thumb">
                        <a href="#0"><img src="{{ asset('user/assets/images/blog/author.jpg') }}" alt="#0"></a>
                    </div>
                    <h6 class="title"><a href="#0">{{ $item->user->name }}</a></h6>
                </div>
            </div>
            <a href="#0" class="buttons">Read More <i class="flaticon-right"></i></a>
        </div>
    </div>
</div>
