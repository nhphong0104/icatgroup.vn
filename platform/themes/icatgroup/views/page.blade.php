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

    @switch($page->id)
        @case(19)
            {!! Theme::partial('page.taichinh') !!}
            @break
        @case(20)
            {!! Theme::partial('page.daotao') !!}
            @break
        @case(21)
            {!! Theme::partial('page.truyenthong') !!}
            @break
        @case(22)
            {!! Theme::partial('page.about') !!}
            @break
        @case(18)
            {!! Theme::partial('page.contact') !!}
            @break
    @endswitch
</div>
