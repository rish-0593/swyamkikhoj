<div class="col-lg-12">
    <div class="sidebar-item categories">
        <div class="sidebar-heading">
            <h2>Categories</h2>
        </div>
        <div class="content">
            <ul>
                @forelse ($categories as $category)
                    <li><a href="#">- {{ $category->name }}</a></li>
                @empty
                @endforelse
            </ul>
        </div>
    </div>
</div>
