<x-guest-layout>
    <div class="main-banner header-text">
        <div class="container-fluid">
            <div class="owl-banner owl-carousel">
                @forelse ($bannerPosts as $bannerPost)
                    <div class="item">
                        <img src="{{asset('/postBanner/'.$bannerPost->banner?->banner_image)}}" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="meta-category">
                                    <span>{{ $bannerPost->category->name }}</span>
                                </div>

                                <a href="{{ route('guest.post', $bannerPost->slug) }}"><h4>{{ $bannerPost->title }}</h4></a>

                                <ul class="post-info">
                                    <li>{{ \Carbon\Carbon::parse($bannerPost->created_at)->format('M d, Y') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>

    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            @forelse ($posts as $post)
                                <div class="col-lg-12">
                                    <div class="blog-post">
                                        <div class="blog-thumb">
                                            <img src="{{asset('/postBanner/'.$post->banner?->banner_image)}}" alt="{{asset('/postBanner/'.$post->banner?->banner_image)}}">
                                        </div>

                                        <div class="down-content">
                                            <span>{{ $post->category->name }}</span>
                                            <a href="{{ route('guest.post', $post->slug) }}"><h4>{{ $post->title }}</h4></a>
                                            <ul class="post-info">
                                                <li><a href="javascript:void(0)">{{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}</a></li>
                                            </ul>

                                            <div class="post-content">
                                                <p>
                                                    {!! $post->content !!}
                                                </p>
                                            </div>

                                            <p>
                                                <a href="{{ route('guest.post', $post->slug) }}">(Read More)</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse

                            @if (count($posts) > 0)
                                <div class="col-lg-12">
                                    <div class="main-button">
                                        <a href="blog.html">View All Posts</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="row">
                            {{-- @include('guest.partials.search-posts') --}}
                            @include('guest.partials.recent-posts')
                            @include('guest.partials.categories')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
