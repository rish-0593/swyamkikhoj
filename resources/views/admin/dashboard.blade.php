<x-admin-layout>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <section class="statistic statistic2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item statistic__item--green">
                                    <h2 class="number">{{ $categoryCount }}</h2>
                                    <span class="desc">Categories</span>
                                    <div class="icon">
                                        <i class="fas fa-list"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item statistic__item--orange">
                                    <h2 class="number">{{ $postCount }}</h2>
                                    <span class="desc">Posts</span>
                                    <div class="icon">
                                        <i class="fas fa-file"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item statistic__item--blue">
                                    <h2 class="number">0</h2>
                                    <span class="desc">Comments</span>
                                    <div class="icon">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item statistic__item--red">
                                    <h2 class="number">0</h2>
                                    <span class="desc">Likes</span>
                                    <div class="icon">
                                        <i class="fas fa-thumbs-up"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-admin-layout>
