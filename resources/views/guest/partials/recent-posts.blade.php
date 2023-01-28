<div class="col-lg-12">
    <div class="sidebar-item recent-posts">
        <div class="sidebar-heading">
            <h2>Recent Posts</h2>
        </div>
        <div class="content">
            <ul>
                @forelse ($recentPosts as $recentPost)
                    <li>
                        <a href="{{ route('guest.post', $recentPost->slug) }}">
                            <h5>{{ $recentPost->title }}</h5>
                            <span>{{ \Carbon\Carbon::parse($recentPost->created_at)->format('M d, Y') }}</span>
                        </a>
                    </li>
                @empty
                @endforelse
            </ul>
        </div>
    </div>
</div>
