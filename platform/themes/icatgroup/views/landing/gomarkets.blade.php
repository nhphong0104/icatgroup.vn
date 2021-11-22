
<div class="page">
    <div class="logo">
        <img src="../themes/icatgroup/images/go-markets.png" alt="">
    </div>
    <div class="container">
        <h1 class="text-center">
            Đối tác giao dịch Quỹ hàng đầu đến từ Úc
        </h1>
        <div class="row">
            <div class="col-12 col-md-6">
                <ul class="highlights">
                    <li><i class="fa fa-check" aria-hidden="true"></i> <span>Đối tác giao dịch trực tuyến chính thức Chelsea FC</span></li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> <span>Broker hơn 15 năm hoạt động trên thị trường</span></li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> <span>Nhà cung cấp MT4 Forex đàu tiên của Úc</span></li>
                </ul>

                <div class="form">
                    {!! Form::open(['route' => 'public.send.contact', 'method' => 'POST', 'class' => 'contact-form']) !!}
                    @if(session()->has('success_msg') || session()->has('error_msg') || isset($errors))
                        @if (session()->has('success_msg'))
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Chúc mừng bạn đã đăng ký thành công</h4>
                                <p>Chào mừng bạn đã đăng ký làm đối tác giao dịch quỹ với sàn GO Markets. Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất</p>
                                <hr>
                            </div>
                        @endif
                        @if (session()->has('error_msg'))
                            <div class="alert alert-danger">
                                <p>{{ session('error_msg') }}</p>
                            </div>
                        @endif
                        @if (isset($errors) && count($errors))
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1">Họ và tên (*)</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Số điện thoại (*)</label>
                        <input type="text" class="form-control" name="phone"  id="phone" required>
                    </div>
                    <input type="hidden" value="{{time()}}@gmail.com" name="email"
                           class="form-control input-lg font-16">
                    <input type="hidden" value="Đăng ký đối tác" name="subject"
                           class="form-control input-lg font-16">
                    <input type="hidden" value="Đăng ký đối tác" name="content"
                           class="form-control input-lg font-16">
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Đăng ký đối tác</button>
                    </div>
                    {!! Form::close() !!}

                    <div class="hotline">Hotline: <a href="tel:0918558956">0918.558.956</a></div>
                </div>


            </div>
            <div class="col-12 col-md-6">
                <img src="../themes/icatgroup/images/chelsea.png" alt="">
            </div>
        </div>

    </div>
    <div class="option">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <div class="item text-center">
                        <div class="box-img">
                            <img width="60" src="../themes/icatgroup/images/icon_01.png">
                        </div>
                        <div class="box-text">
                            Chênh lệch giá thấp
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="item text-center">
                        <div class="box-img">
                            <img width="60" src="../themes/icatgroup/images/icon_02.png">
                        </div>
                        <div class="box-text">
                            Hơn 350 sản phẩm
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="item text-center">
                        <div class="box-img">
                            <img width="60" src="../themes/icatgroup/images/icon_03.png">
                        </div>
                        <div class="box-text">
                            Nền tảng ổn định
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="item text-center">
                        <div class="box-img">
                            <img width="60" src="../themes/icatgroup/images/icon_04.png">
                        </div>
                        <div class="box-text">
                           Hỗ trợ 24/5 tại Việt Nam
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="luachon-header">
        <div class="col-12 text-center">
            <h2>
                Các ưu đãi khi giao dịch quỹ tại sàn GO Markets
            </h2>
        </div>
    </div>
    <div class="luachon2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12 mobile">
                    <img src="../themes/icatgroup/images/laptop.png">
                </div>

                <div class="col-md-4 col-12"></div>
                <div class="col-md-8 col-12 text-center">
                    <div class="row">
                        <div class="col-md-6 col-12 mb-15">
                            <div class="item">
                                <div class="box-img">
                                    <img class="def" width="46" src="../themes/icatgroup/images/spread.png">
                                    <img class="hover" width="46" src="../themes/icatgroup/images/spread.png">
                                </div>
                                <div class="box-text text-left">
                                    <p class="p2">Spread <span>từ 0</span><br>22 nhà thanh khoản</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mb-15">
                            <div class="item">
                                <div class="box-img">
                                    <img class="def" width="46" src="../themes/icatgroup/images/cashback.png">
                                    <img class="hover" width="46" src="../themes/icatgroup/images/cashback.png">
                                </div>
                                <div class="box-text text-left">
                                    <p class="p2">Phí hoa hồng 5$<br> <span>Cashback 1$-4$</span> cho đối tác</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12"></div>
                <div class="col-md-6 col-12 text-center">
                    <div class="row">
                        <div class="col-md-8 col-12 mb-15">
                            <div class="item">
                                <div class="box-img">
                                    <img class="def" width="46" src="../themes/icatgroup/images/platform.png">
                                    <img class="hover" width="46" src="../themes/icatgroup/images/platform.png">
                                </div>
                                <div class="box-text text-left">
                                    <p class="p2">Nền tảng ổn định<br>Hơn 350 sản phẩm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="taisao">
        <img class="desktop" width="100%" src="../themes/icatgroup/images/bg_sl4.png">
        <div class="container mobile">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2>Tại sao chọn GO Markets</h2>
                </div>
                <div class="col-xs-12">
                    <img width="100%" src="../themes/icatgroup/images/bg_sl4-1.png">
                </div>
                <div class="col-xs-12">
                    <img width="100%" src="../themes/icatgroup/images/bg_sl4-2.png">
                </div>
            </div>
        </div>
    </div>
    <div class="top-banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-12 col-md-offset-2 text-center">
                   <h2>IC&T GROUP - ĐỐI TÁC CHIẾN LƯỢC SÀN <br>GO MARKETS TẠI VIỆT NAM</h2>
                    <!-- <div class="title">
                        Hãy bắt đầu với GO
                    </div> -->
                    <div class="submit">
                        <a class="btn btn-1" href="https://bom.to/WF2euX">
                            Mở tài khoản thật
                        </a>
                        <a class="btn btn-2" href="https://bom.to/WF2euX">
                            Mở tài khoản ảo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .page{
        background: #000;
    }
    .page .logo{
        padding-top: 30px;
        text-align: center;
        margin-bottom: 30px;
    }
    .page h1{
        color: #42CF7A;
        font-size:36px;
        font-weight: 700;
        font-family: 'Roboto', sans-serif;
    }
    .highlights{
        font-size: 20px;
        margin-top: 30px;
    }
    .highlights li{
        margin-bottom: 30px;
        color: #fff;
    }
    .highlights i{
        color: #42CF7A;
        margin-right: 10px;
    }
    .form{
        background: #111112;
        width: 80%;
        padding: 40px;
    }
    .form label{
        color: #fff;
        font-size: 18px;
        font-weight: 500;
    }
    .form .form-control{
        border: #42CF7A solid 1px;
        background: #111112;
        color: #fff;
        font-size: 18px;
        border-radius: 10px;
    }
    .form-control:focus{
        border: #42CF7A solid 1px !important;
    }
    .form-control:active{
        border: #42CF7A solid 1px !important;;
     }
    .form-group{
        margin-bottom: 20px;
    }
    .btn-primary{
        background: #111112;
        border: #FF5300 solid 1px;
        color: #fff;
        font-weight: 700;
        font-size: 20px;
    }
    .option {
        background: url(../themes/icatgroup/images/bg.png);
        background-position: 100% 100%;
        background-size: 100% 100%;
        padding: 100px 0 75px;
    }
    .option .box-img {
        padding: 15px;
    }
    .option .box-text {
        background: #fff;
        font-size: 20px;
        min-height: 80px;
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #333;
        font-weight: 500;
        font-family: 'Roboto', sans-serif;
    }

    .luachon2 {
        background: url(../themes/icatgroup/images/bg_02.png);
        background-position: 35%;
        background-size: contain;
        padding: 60px 0 50px;
        background-repeat: no-repeat;
        background-color: #fff;
    }
    .luachon2 h2 {
        color: #7f7f80;
    }
    .luachon2 .item {
        display: flex;
        padding: 10px 0px;
        border-bottom: 2px solid #949494;
    }
    .luachon2 .item img.def {
        /*position: relative;*/
    }
    .luachon2 .item img.hover {
        /*position: absolute;*/
        top: 0;
        left: 0;
        display: none;
    }
    .luachon2 .item:hover {
        border-bottom: 2px solid #42CF7A;
    }
    .luachon2 .item:hover img.def {
        display: none;
    }
    .luachon2 .item:hover img.hover {
        display: block;
        cursor: pointer;
    }
    .luachon2 .item img.def, .luachon2 .item img.hover {
        width: 50px;
        min-width: 50px;
    }
    .luachon2 .box-text {
        padding-left: 10px;
        color: #7f7f80;
    }
    .luachon2 .box-text p {
        font-size: 22px;
        color: #333;
        font-weight: 500;
        line-height: 35px;
        font-family: 'Roboto', sans-serif;
    }
    .luachon2 .box-text p span{
        color: #42CF7A;
        font-weight: 700;
    }
    .luachon2 .item:hover .box-text {
        color: #000;
        cursor: pointer;
    }
    .mobile {
        display: none;
    }
    .luachon-header{
        background: #ffff;
        padding-top: 30px;
        padding-bottom: 30px;
    }
    .doi-tac{
        background: #fff;
        padding: 60px 0px;
    }
    .doi-tac p{
        font-weight: 500;
        font-size: 36px;
        font-family: 'Roboto', sans-serif;
        text-transform: uppercase;
        color: #333;
    }
    .doi-tac .icat-name{
        line-height: 1;
        font-family: 'Roboto', sans-serif;
        color: #333;
        font-size: 56px;
        font-weight: 700;
        text-transform: uppercase;
    }
    .top-banner{
        padding: 30px 0px;
        background: #fff;
    }
    .top-banner .submit {
        padding: 25px;
    }
    .top-banner .submit .btn {
        font-size: 24px!important;
        font-weight: bold;
        padding: 10px 35px;
    }
    .submit .btn-1 {
        border: 1px solid #1dad4b;
        color: #333;
        margin-right: 20px;
    }
    .submit .btn-2 {
        border: 1px solid #f18959;
        color: #333;
    }
    .justify-content-center {
        -ms-flex-pack: center!important;
        justify-content: center!important;
    }
    .submit .btn-1:hover {
        background: #1dad4b;
    }
    .submit .btn-2:hover {
        background: #f18959;
    }
    .taisao h2{
        color: #fff;
        padding-top: 30px;
    }
    .hotline{
        color: #fff;
        font-size: 16px;
        font-style: italic;
        text-align: center;
    }
    .hotline a{
        color: red;
        font-weight: 500;
        font-size: 18px;
        font-family: Roboto, sans-serifr;
    }
    .hotline a:hover{
        text-decoration: underline;
    }
    @media (max-width: 768px){
        .highlights li{
            margin-bottom: 15px;
            font-size:16px ;
        }
        .luachon-header{
            padding-bottom: 1px;
        }
        .top-banner .submit .btn {
            font-size: 14px!important;
            font-weight: unset;
            font-weight: 500;
            padding: 5px 10px;
        }
        .mobile {
            display: block;
        }
        .luachon2 {
            background: url();
            background: #fff;
            margin-top: -1px;
        }
        .option .box-text {
            font-size: 15px;
        }
        .container {
            padding-right: 5px;
            padding-left: 5px;
        }
        .form{
            width: 100%;
            padding: 15px;
        }
        .desktop{
            display: none;
        }
    }

</style>
