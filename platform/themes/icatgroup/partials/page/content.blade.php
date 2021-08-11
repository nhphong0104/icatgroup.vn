<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://icatgroup.vn/themes/icatgroup/images/slide1.jpg" style="background-image: url(http://icatgroup.vn/themes/icatgroup/images/slide1.jpg); background-position: 50% 77px;">
        <div class="container pt-70 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-muted">{{$page->name}}</h2>
                        <ol class="breadcrumb text-left text-black mt-10">
                            <li><a href="#">Trang chủ</a></li>
                            <li class="active text-gray-silver">{{$page->name}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-pull-right">
                    <div class="single-service">
                        <h3 class="text-theme-colored line-bottom text-theme-colored">{{$page->name}}</h3>
                        <div class="entry-content mt-10">
                            {!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, $page->content, $page) !!}
                        </div>
                        <div id="grid" class="gallery-isotope grid-3 gutter clearfix mt-30">
                            @foreach (gallery_meta_data($page) as $image)
                                @if ($image)
                                    <div class="gallery-item select1">
                                        <div class="box-hover-effect">
                                            <div class="effect-wrapper">
                                                <div class="thumb">
                                                    <img class="img-fullwidth" src="{{ RvMedia::getImageUrl(Arr::get($image, 'img')) }}" alt="{{ clean(Arr::get($image, 'description')) }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="sidebar sidebar-left mt-sm-30 ml-40">
                        <div class="widget">
                            <h4 class="widget-title line-bottom">Service <span class="text-theme-colored2">List</span></h4>
                            <div class="services-list">
                                {!!
                                      Menu::renderMenuLocation('header-menu', [
                                          'options' => ['class' => 'list list-border'],
                                          'view'    => 'main-services',
                                      ])
                                  !!}
                            </div>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title line-bottom">Thời gian  <span class="text-theme-colored2">làm việc</span></h4>
                            <div class="opening-hours">
                                <ul class="list-border">
                                    <li class="clearfix"> <span> Mon - Tues :  </span>
                                        <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                                    </li>
                                    <li class="clearfix"> <span> Sun : </span>
                                        <div class="value pull-right"> Colosed </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title line-bottom mt-30"><i class="fa fa-download mr-10 text-theme-colored"></i>Download <span class="text-theme-colored2">Brochures</span></h4>
                            <hr class="mt-0">
                            <ul class="nav nav-pills nav-stacked nav-sidebar">
                                <li><a href="#"><i class="fa fa-file-pdf-o text-theme-colored2"></i> Project-one.pdf</a></li>
                                <li><a href="#"><i class="fa fa-file-text-o text-theme-colored2"></i> Project-two.doc</a></li>
                                <li><a href="#"><i class="fa fa-file-powerpoint-o text-theme-colored2"></i> Project-three.ppt</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
