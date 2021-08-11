<div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://icatgroup.vn/themes/icatgroup/images/slide1.jpg" style="background-image: url(http://icatgroup.vn/themes/icatgroup/images/slide1.jpg); background-position: 50% 100px;">
        <div class="container pt-70 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-white">{{$category->name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: News & Blog -->
    <section id="news">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-sm-6 col-md-4">
                            <article class="post clearfix mb-30 mb-sm-30">
                                <div class="entry-header">
                                    <div class="post-thumb thumb">
                                        <img src="{{ RvMedia::getImageUrl($post->image,'medium') }}" alt="" class="img-responsive img-fullwidth">
                                    </div>
                                </div>
                                <div class="entry-content p-20 border-bottom-2px border-theme-colored2 bg-white">
                                    <div class="entry-meta media mt-0 mb-10">
                                        <div class="media-body pl-0">
                                            <div class="event-content pull-left flip">
                                                <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5">
                                                    <a href="{{$post->url}}">{{\Illuminate\Support\Str::limit($post->name,50)}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-theme-colored2 btn-sm text-white" href="{{$post->url}}"> Chi tiết</a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>