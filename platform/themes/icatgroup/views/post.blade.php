<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://icatgroup.vn/themes/icatgroup/images/slide1.jpg" style="background-image: url(http://icatgroup.vn/themes/icatgroup/images/slide1.jpg&quot;); background-position: 50% 77px;">
        <div class="container pt-70 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-white">{{$post->name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Blog -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 blog-pull-right">
                    <div class="blog-posts single-post">
                        <article class="post clearfix mb-0">
                            <div class="entry-header">
                                <div class="post-thumb thumb"> <img src="{{ RvMedia::getImageUrl($post->image) }}" alt="" class="img-responsive img-fullwidth"> </div>
                            </div>
                            <div class="entry-title pt-10 pl-15">
                                <h4><a class="text-uppercase" href="#">{{$post->name}}</a></h4>
                            </div>

                            <div class="entry-content mt-10">
                                {!! clean($post->content, 'youtube') !!}
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>