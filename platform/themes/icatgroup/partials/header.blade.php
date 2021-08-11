<header id="header" class="header modern-header modern-header-theme-colored">
    <div class="header-top bg-theme-colored sm-text-center hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="widget text-white">
                        <i class="fa fa-clock-o text-theme-colored2"></i> Thời gian làm việc: Thứ 2 - Thứ 6 : 8:00 - 17:45, Thứ 7, Chủ nhật nghỉ
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle p-0 bg-light xs-text-center">
        <div class="container pt-30 pb-30">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3 hidden-xs">
                    <div class="widget sm-text-center">
                        <i class="fa fa-envelope text-theme-colored2 font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                        <a href="#" class="font-12 text-gray text-uppercase">Email</a>
                        <h5 class="font-13 text-black m-0"> icatgroup@gmail.com</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6">
                    <div class="text-center">
                        <a class="" href="/">
                            <img width="200px" src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="{{ theme_option('site_title') }}" >
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 hidden-xs">
                    <div class="widget sm-text-center">
                        <i class="fa fa-building-o text-theme-colored2 font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                        <a href="#" class="font-12 text-gray text-uppercase">Địa chỉ</a>
                        <h5 class="font-13 text-black m-0"> Ngõ 11 Duy Tân</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed">
            <div class="container">
                <nav id="menuzord" class="menuzord red">
                    {!!
                          Menu::renderMenuLocation('main-menu', [
                              'options' => ['class' => 'menuzord-menu'],
                              'view'    => 'main-menu',
                          ])
                      !!}
                </nav>
            </div>
        </div>
    </div>
</header>