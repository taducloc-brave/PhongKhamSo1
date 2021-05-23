{{--{{dd($show)}}--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Phòng khám số 1 </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link href="./css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./css/nprogress.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../css/custom.min.css" rel="stylesheet">
    <!-- FullCalendar -->
    <link href="./css/fullcalendar.min.css" rel="stylesheet">
    <link href="./css/fullcalendar.print.css" rel="stylesheet" media="print">
    <!--my css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    {{--    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">--}}
    <link href="../css/style.css" rel="stylesheet">
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
            <a href="/" class="navbar__link">Xem lịch khám</a>
            <a href="{{Route('BookCalendar')}}" class="navbar__link">Đặt lịch khám</a>
            <a href="{{Route('HistoryCalendar')}}" class="navbar__link">Bệnh án</a>
            <div class="dropdown">
                <button style="background: black; color: white; border: 1px solid black;" class="btn dropdown-toggle"
                        type="button" data-toggle="dropdown">
                    <a href="/" class="navbar__link"> Chào, {{auth()->user()->name}} <span class="caret"></span></a>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Thông tin cá nhân</a></li>
                    <li><a href="#">Thông tin tài khoản</a></li>
                    <li><a href="#">Đổi mật khẩu</a></li>
                    <li><a href="{{Route('logoutUser')}}">Đăng xuất</a></li>
                </ul>
            </div>
        @endif
    </nav>
</div>

<div class="container body">
    <div class="main_container">
        <!-- page content -->

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Lịch khám cá nhân : <small>{{auth()->user()->name}} / Mã số : BN - 002</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <p class="text-muted font-13 m-b-30">
                                        Nếu bạn có thắc mắc hay cần biết thêm thông tin xin vui lòng liên hệ với chúng
                                        tôi để được hỗ trợ
                                    </p>
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%;text-align: center">
                                        <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên bác sĩ</th>
                                            <th>Ngày đặt</th>
                                            <th>Ca khám</th>
                                            <th>Trạng thái</th>
                                            <th>Chi tiết</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <?php $i = 1 ?>
                                        @foreach ($show as $shows)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$shows->nameDoctor}}</td>
                                                <td>{{$shows->dateBook}}</td>
                                                <td>{{$shows->timeBook}}</td>
                                                <td><i>{{$shows->status}}</i></td>
                                                <td><a href="{{route("detailCalendar",['record_id'=>$shows->id])}}" class="btn btn-primary btn-xs"><i
                                                                class="fa fa-folder"></i>
                                                        Chi tiết </a></td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

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
<!-- FullCalendar -->
<script type="text/javascript" src="./js/moment.min.js"></script>
<script type="text/javascript" src="./js/fullcalendar.min.js"></script>


</html>