<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link href="./css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./css/nprogress.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../css/custom.min.css" rel="stylesheet">
    <!--my css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/style.css" rel="stylesheet">
    {{--    Profile--}}
    <link href="../css/daterangepicker.css" rel="stylesheet">
    <style>
        .form_wizard .stepContainer {
            height: unset !important;
            overflow: unset !important;
        }
    </style>
</head>

<body class="nav-md">

<div class="container-flud  navbar-flus">
    <nav class="navbar container">
        <a href="/" class="navbar__logo"><img src="../image/logo1.png" style="height: 100%; width: 70%"></a>
        <div class="navbar__toggle" id="mobile__menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>

        @if(! auth()->check())
            <div class="navbar__menu">
                <a href="/" class="navbar__link">Trang chủ</a>
                <a href="{{Route('BookCalendar')}}" class="navbar__link">Đặt lịch khám</a>
                <a href="{{Route('login')}}" class="navbar__link">Đăng nhập</a>
                <a href="{{Route('register')}}" class="navbar__link">Đăng kí</a>
            </div>
        @else
            <a href="/" class="navbar__link">Trang chủ</a>
            <a href="{{Route('ShowCalendar')}}" class="navbar__link">Xem lịch khám</a>
            <a href="{{Route('BookCalendar')}}" class="navbar__link">Đặt lịch khám</a>
            <a href="{{Route('HistoryCalendar')}}" class="navbar__link">Bệnh án</a>
            <div class="dropdown">
                <button style="background: black; color: white; border: 1px solid black;" class="btn dropdown-toggle"
                        type="button" data-toggle="dropdown">
                    <a href="/" class="navbar__link"> Chào, {{auth()->user()->name}}</a>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Thông tin cá nhân</a></li>
                    <li><a href="#">Thông tin tài khoản</a></li>
                    <li><a href="#">Đổi mật khẩu</a></li>
                    <li><a href="{{Route('logout')}}">Đăng xuất</a></li>
                </ul>
            </div>
        @endif
    </nav>
</div>

<div class="container body">
    <div class="main_container">
{{--content--}}
        <div class="col-md-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Basic Elements <small>different form elements</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">
                        <div class="form-group row">
                            <label class="control-label col-md-4 col-sm-4 ">Nhập mật khẩu hiện tại</label>
                            <div class="col-md-5 col-sm-5 ">
                                <input type="password" name="country" id="autocomplete-custom-append" class="form-control col-md-10" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4 col-sm-4 ">Nhập mật khẩu mới</label>
                            <div class="col-md-5 col-sm-5 ">
                                <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-4 col-sm-4 ">Nhập xác nhận mật khẩu mới</label>
                            <div class="col-md-5 col-sm-5 ">
                                <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" />
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9  offset-md-3">
                                <button type="button" class="btn btn-primary">Cancel</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- footer content -->
<footer class="footer container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="footer__wrapper">
                    <div class="footer__desc">
                        <h1>Phòng khám số 1</h1>
                        <p>Số điện thoại :</p>
                        <p id="phone">0968870604</p>
                    </div>
                    <div class="footer__links">
                        <h2 class="footer__title">Liên hệ ngay</h2>
                        <a href="/service.html" class="footer__link">Facebook</a>
                        <a href="/service.html" class="footer__link">Zalo</a>
                        <a href="/service.html" class="footer__link">Skype</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="footer__wrapper">
                    <div class="footer__links">
                        <h2 class="footer__title">Ban giám đốc</h2>
                        <a href="/service.html" class="footer__link">Tạ Đức Lộc</a>
                        <a href="/service.html" class="footer__link">Huỳnh Long Diệm</a>
                    </div>
                    <div class="footer__links">
                        <h2 class="footer__title">Chi nhánh</h2>
                        <a href="/service.html" class="footer__link">60 Đường Lê Lợi P.4 GV</a>
                        <a href="/service.html" class="footer__link">60 Đường Lê Lợi P.4 GV</a>
                        <a href="/service.html" class="footer__link">60 Đường Lê Lợi P.4 GV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- jQuery -->
<script type="text/javascript" src="./js/jquery.min.js"></script>
<!-- Bootstrap -->
<script type="text/javascript" src="./js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script type="text/javascript" src="./js/fastclick.js"></script>
<!-- NProgress -->
<script type="text/javascript" src="./js/nprogress.js"></script>
<!-- jQuery Smart Wizard -->
<script type="text/javascript" src="./js/jquery.smartWizard.js"></script>
<!-- Custom Theme Scripts -->
<script type="text/javascript" src="./js/custom.min.js"></script>
{{--Profile--}}
<script src="./js/bootstrap-progressbar.min.js"></script>
<script src="./js/morris.min.js"></script>

</html>