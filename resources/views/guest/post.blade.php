<x-guest-layout>
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Post Details</h4>
                            <h2>{{ $post->title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="{{asset('/postBanner/'.$post->banner?->banner_image)}}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span>{{ $post->category->name }}</span>
                                        <a href="post-details.html"><h4>{{ $post->category->title }}</h4></a>
                                        <ul class="post-info">
                                            <li><a href="javascript:void(0)">{{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}</a></li>
                                        </ul>
                                        <p>
                                            {!! $post->content !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
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
