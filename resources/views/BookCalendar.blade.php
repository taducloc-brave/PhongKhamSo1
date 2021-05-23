<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Gentelella Alela! | </title>

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
    <link href="../css/style.css" rel="stylesheet">
    <style>
        .form_wizard .stepContainer {
            height: unset !important;
            overflow: unset !important;
        }
    </style>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        <!-- ptimeBook content -->
        <div class="row">

            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Đặt lịch khám <small>Phòng khám số 1 </small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        <!-- Smart Wizard -->
                        <h4>Quy trình đặt lịch : </h4>
                        <div id="wizard" class="form_wizard wizard_horizontal">
                            <ul class="wizard_steps">
                                <li>
                                    <a href="#step-1">
                                        <span class="step_no">1</span>
                                        <span class="step_descr">
                                              Step 1<br/>Khai báo cơ bản</small>
                                          </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-2">
                                        <span class="step_no">2</span>
                                        <span class="step_descr">
                                              Step 2<br/>
                                              <small>Step 2 Chọn bác sĩ</small>
                                          </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-3">
                                        <span class="step_no">3</span>
                                        <span class="step_descr">
                                              Step 3<br/>
                                              <small>Step 3 Chọn thời gian</small>
                                          </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-4">
                                        <span class="step_no">4</span>
                                        <span class="step_descr">
                                              Step 4<br/>
                                              <small>Step 4 Xác nhận</small>
                                          </span>
                                    </a>
                                </li>
                            </ul>
                            <div id="step-1">
                                <form class="form-horizontal form-label-left">
                                    @method('POST')
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="chinhanh">Chọn
                                            chi nhánh<span class="required">*</span>
                                        </label>
                                        <div class="col-form-label col-md-6 col-sm-6 label-align">
                                            <select class="form-control" id="chinhanh" name="chinhanh">
                                                <option value="">Chọn chi nhánh</option>
                                                <option value="Quận 1">Quận 1</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="chuyenkhoa">Chọn
                                            chuyên khoa<span class="required">*</span>
                                        </label>
                                        <div class="col-form-label col-md-6 col-sm-6 label-align">
                                            <select class="form-control" id="chuyenkhoa" name="chuyenkhoa"
                                                    required="required">
                                                <option value="">Chọn chuyên khoa</option>
                                                <option value="Mắt">Mắt</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label for="trieuchung" class="col-form-label col-md-3 col-sm-3 label-align">Triệu
                                        chứng<span class="required">*</span>
                                    </label>
                                    <div class="col-form-label col-md-6 col-sm-6 label-align">
                                        <input type="text" class="col-form-label col-md-12 col-sm-12" id="trieuchung"
                                               name="trieuchung" required="required">
                                    </div>

                                </form>
                            </div>
                            <div id="step-2">
                                <div class="">
                                    <div class="x_panel">
                                        <div class="x_content">
                                            <div class="col-md-12 col-sm-12  text-center">
                                                <ul class="pagination pagination-split">
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                </ul>
                                            </div>

                                            <div class="clearfix"></div>

                                            <div class="row" id="showDoctor">
                                                {{--ShowDoctor--}}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step-3">
                                <div class="col-md-12">
                                    <div id='calendar-book'></div>
                                </div>
                            </div>
                            <div id="CalenderModalNew" class="modal " tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">
                                                Vui lòng chọn thời gian.

                                            </h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="testmodal" style="padding: 5px 20px;">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default antoclose"
                                                    data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                            <div id="CalenderModalEdit" class="modal " tabindex="-1" role="dialog"--}}
                            {{--                                 aria-labelledby="myModalLabel" aria-hidden="true">--}}
                            {{--                                <div class="modal-dialog">--}}
                            {{--                                    <div class="modal-content">--}}

                            {{--                                        <div class="modal-header">--}}
                            {{--                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">--}}
                            {{--                                                ×--}}
                            {{--                                            </button>--}}
                            {{--                                            <h4 class="modal-title" id="myModalLabel2">Edit Calendar Entry</h4>--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="modal-body">--}}

                            {{--                                            <div id="testmodal2" style="padding: 5px 20px;">--}}
                            {{--                                                <form id="antoform2" class="form-horizontal calender" role="form">--}}
                            {{--                                                    <div class="form-group">--}}
                            {{--                                                        <label class="col-sm-3 control-label">Title</label>--}}
                            {{--                                                        <div class="col-sm-9">--}}
                            {{--                                                            <input type="text" class="form-control" id="title2"--}}
                            {{--                                                                   name="title2">--}}
                            {{--                                                        </div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <div class="form-group">--}}
                            {{--                                                        <label class="col-sm-3 control-label">Description</label>--}}
                            {{--                                                        <div class="col-sm-9">--}}
                            {{--                                                            <textarea class="form-control" style="height:55px;"--}}
                            {{--                                                                      id="descr2" name="descr"></textarea>--}}
                            {{--                                                        </div>--}}
                            {{--                                                    </div>--}}

                            {{--                                                </form>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="modal-footer">--}}
                            {{--                                            <button type="button" class="btn btn-default antoclose2"--}}
                            {{--                                                    data-dismiss="modal">Close--}}
                            {{--                                            </button>--}}
                            {{--                                            <button type="button" class="btn btn-primary antosubmit2">Save changes--}}
                            {{--                                            </button>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}


                            <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew">
                                {{--                            <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>--}}


                                <div id="step-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>Xác nhận <small>Vui lòng kiểm tra tất cả thông tin</small></h2>
                                                    <ul class="nav navbar-right panel_toolbox">
                                                        <li><a class="collapse-link"><i
                                                                        class="fa fa-chevron-up"></i></a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                               role="button" aria-expanded="false"><i
                                                                        class="fa fa-wrench"></i></a>
                                                            <div class="dropdown-menu"
                                                                 aria-labelledby="dropdownMenuButton">
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

                                                    <section class="content invoice">
                                                        <!-- title row -->
                                                        <div class="row">
                                                            <div class="  invoice-header">
                                                                <h1>
                                                                    <i class="fa fa-globe"></i> Xác nhận đặt lịch khám
                                                                    <small class="pull-right">Date: 04/05/2021</small>
                                                                </h1>
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                        <!-- info row -->
                                                        <div class="row invoice-info">
                                                            <div class="col-sm-4 invoice-col">
                                                                From
                                                                <address>
                                                                    <strong>Phòng khám số 1</strong>
                                                                    <br>113 Bùi viện
                                                                    <br>Quận 1
                                                                    <br>Phone: 0968870604
                                                                    <br>Email: phongkhamso1@gmail.com
                                                                </address>
                                                            </div>
                                                            <!-- /.col -->
                                                            <div class="col-sm-4 invoice-col">
                                                                To
                                                                <address>
                                                                    <strong>Tên bệnh nhân</strong>
                                                                    <br>Địa chỉ :
                                                                    <br>Số điện thoại:0968965884
                                                                    <br>Email: jon@ironadmin.com
                                                                </address>
                                                            </div>
                                                            <!-- /.col -->
                                                            <div class="col-sm-4 invoice-col">
                                                                <b>Mã xác nhận #007612</b>
                                                                <br>
                                                                <br>
                                                                <b>Mã bệnh nhân :</b> BN. 0{{auth()->user()->id}}
                                                                <br>
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                        <!-- /.row -->

                                                        <!-- Table row -->
                                                        <div class="row" id="detailBook">
                                                            {{--                                                        <h3>Step 1: Xác nhân thông tin cơ bản</h3>--}}
                                                            {{--                                                        <div class="  table">--}}
                                                            {{--                                                            <table class="table table-striped">--}}
                                                            {{--                                                                <thead>--}}
                                                            {{--                                                                <tr>--}}
                                                            {{--                                                                    <th>Chi nhánh</th>--}}
                                                            {{--                                                                    <th>Chuyên khoa</th>--}}

                                                            {{--                                                                    <th style="width: 59%">Triệu chứng</th>--}}

                                                            {{--                                                                </tr>--}}
                                                            {{--                                                                </thead>--}}
                                                            {{--                                                                <tbody>--}}
                                                            {{--                                                                <tr>--}}
                                                            {{--                                                                    <td>Quận 1</td>--}}
                                                            {{--                                                                    <td>Mắt</td>--}}
                                                            {{--                                                                    <td>Mắt sưng, đau mắt, ....--}}
                                                            {{--                                                                    </td>--}}
                                                            {{--                                                                </tr>--}}
                                                            {{--                                                                </tbody>--}}
                                                            {{--                                                            </table>--}}
                                                            {{--                                                        </div>--}}
                                                            {{--                                                        <h3>Step 2: Xác nhận bác sĩ</h3>--}}
                                                            {{--                                                        <div class="  table">--}}
                                                            {{--                                                            <table class="table table-striped">--}}
                                                            {{--                                                                <thead>--}}
                                                            {{--                                                                <tr>--}}
                                                            {{--                                                                    <th>Họ và tên</th>--}}
                                                            {{--                                                                    <th>Chuyên khoa</th>--}}
                                                            {{--                                                                    <th>Chi nhánh</th>--}}


                                                            {{--                                                                </tr>--}}
                                                            {{--                                                                </thead>--}}
                                                            {{--                                                                <tbody>--}}
                                                            {{--                                                                <tr>--}}
                                                            {{--                                                                    <td>Tạ Đức Lộc</td>--}}
                                                            {{--                                                                    <td>Mắt</td>--}}
                                                            {{--                                                                    <td>Quận 1</td>--}}
                                                            {{--                                                                </tr>--}}
                                                            {{--                                                                </tbody>--}}
                                                            {{--                                                            </table>--}}
                                                            {{--                                                        </div>--}}
                                                            {{--                                                        <h3>Step 3: Xác nhận thời gian</h3>--}}
                                                            {{--                                                        <div class="  table">--}}
                                                            {{--                                                            <table class="table table-striped">--}}
                                                            {{--                                                                <thead>--}}
                                                            {{--                                                                <tr>--}}
                                                            {{--                                                                    <th>Thời gian</th>--}}
                                                            {{--                                                                    <th>Chuyên khoa</th>--}}
                                                            {{--                                                                    <th>Chi nhánh</th>--}}


                                                            {{--                                                                </tr>--}}
                                                            {{--                                                                </thead>--}}
                                                            {{--                                                                <tbody>--}}
                                                            {{--                                                                <tr>--}}
                                                            {{--                                                                    <td>Tạ Đức Lộc</td>--}}
                                                            {{--                                                                    <td>Mắt</td>--}}
                                                            {{--                                                                    <td>Quận 1</td>--}}
                                                            {{--                                                                </tr>--}}
                                                            {{--                                                                </tbody>--}}
                                                            {{--                                                            </table>--}}
                                                            {{--                                                        </div>--}}

                                                        </div>
                                                        <!-- /.row -->

                                                        <div class="row">
                                                            <!-- accepted payments column -->
                                                            <div class="col-md-6"></div>
                                                            <!-- /.col -->
                                                            <div class="col-md-6">
                                                                <h4>Ngày đặt lịch : <i>{{ date("d/m/Y") }}</i></h4>
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <tbody>
                                                                        <tr>
                                                                            <th style="width:50%">Phí đặt lịch:</th>
                                                                            <td>50.000 VND</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Tổng:</th>
                                                                            <td>50.000 VND</td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                        <!-- /.row -->

                                                        <!-- this row will not appear when printing -->
                                                        <div class="row no-print">
                                                            <div class=" ">
                                                                <button class="btn btn-default"
                                                                        onclick="window.print();"><i
                                                                            class="fa fa-print"></i> In phiếu
                                                                </button>
                                                                <button class="btn btn-primary pull-right"
                                                                        style="margin-right: 5px;"><i
                                                                            class="fa fa-download"></i> Tải bản PDF
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
<script type="text/javascript">
  var stepIndex //buoc1
  var symptom//trieuchung1
  var branch//1
  var specialist//1
  var timeSelect //ngayBook1
  var clicked//doctor_id1
  var calendarDoctor //nameDoctor
  var timeBook//Book

  // var stepIndex = $('#smartwizard').smartWizard("getStepIndex");
  $(document).ready(function () {
    console.log('abc')
    //buttonNext
    $('.buttonNext').addClass('book-data')
    $('.book-data').click(function () {
      stepIndex = $('#wizard').smartWizard('currentStep')
      console.log(stepIndex)

      if (stepIndex == '1') {
        console.log(stepIndex)
      }
      if (stepIndex == '2') {
        var formData = {
          chinhanh: $('select[name="chinhanh"]').val(),
          chuyenkhoa: $('select[name="chuyenkhoa"]').val(),
          trieuchung: $('input[name="trieuchung"]').val(),
        }
        console.log(stepIndex)
        $.ajax({
          method: 'POST',
          url: 'ajax/step1',
          data: formData,
          headers:
            {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
          success: function (data) {
            console.log(data.getDoctor)
            branch = $('select[name="chinhanh"]').val()
            specialist = $('select[name="chuyenkhoa"]').val()
            symptom = $('input[name="trieuchung"]').val()
            console.log([branch, specialist, symptom])
            let keyVar
            for (keyVar in data.getDoctor) {
              document.getElementById('showDoctor').innerHTML +=
                `<div class="col-md-3" >
              <div class="infor-doc-wrap" id="` + data.getDoctor[keyVar].id + `" onclick="reclick(this.id)">

                <div class="img-doc">
                <img src="./image/bacsi1.jpg" alt="">
                </div>
              <div class="infor-doc" style="height: 190px">

                <h2>BS. ` + data.getDoctor[keyVar].name +

                `</h2>
                <p><strong>Chuyên khoa: </strong>` + data.getDoctor[keyVar].specialist + `</p>
                <ul class="list-unstyled">
                  <li><i class="fa fa-building"></i> Chi nhánh: ` + data.getDoctor[keyVar].branch + `
                  </li>
                  <li><i class="fa fa-phone"></i> Số điện thoại:
                    ` + data.getDoctor[keyVar].phone + `
                  </li>
                  <li><i class="fa fa-phone"></i> Email:
                    ` + data.getDoctor[keyVar].email + `
                  </li>
                </ul>
              </div>
            </div>
            </div>`

            }
            // var i=0;
            // data.getDoctor.forEach()
            // forEach($data.getDoctor as $data.getDoctors){
            //   document.getElementById("infor").innerHTML="BS. " + data.getDoctor[0].name;
            //   i++;
            // }

          },

        })
      }

      if (stepIndex == '3') {
        $('#calendar-book').fullCalendar({
          selectable: true,
          selectHelper: true,
          select: function (start, end, allDay) {
            $('#fc_create').click()

            var started = start
            timeSelect = started.format()
            console.log(timeSelect)
            var today = new Date();
            var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            if (date > timeSelect)
            {console.log("aaaaaa")
              let radios = document.getElementsByName('timeBook')
              let lengthRadios = radios.length
              for (let i = 0; i < lengthRadios; i++) {
                  radios[i].disabled = true
              }
            }else{console.log("kkkkkkk")}

            // modal

            $.ajax({
              method: 'POST',
              url: 'ajax/step3',
              data: { date: timeSelect, clicked: clicked },
              headers:
                {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
              success: function (data) {
                document.getElementById('testmodal').innerHTML += `<form id="antoform" class="form-horizontal calender"
                                                      role="form">
                                                    <div class="form-group">
                                                        <table class="table">
                                                            <tr>
                                                                <th scope="col">Sáng(8am-12pm)</th>
                                                                <th scope="col">Chiều(14pm-18pm)</th>
                                                                <th scope="col">Tối(18pm-20pm)</th>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="radio" id="timeBook" name="timeBook" value="8am - 9am">
                                                                    <label for="timeBook">8am - 9am</label><br></td>
                                                                <td><input type="radio" id="timeBook" name="timeBook"
                                                                           value="14pm - 15pm">
                                                                    <label for="timeBook">14pm - 15pm</label><br></td>
                                                                <td><input type="radio" id="timeBook" name="timeBook"
                                                                           value="18pm - 19pm">
                                                                    <label for="timeBook">18pm - 19pm</label><br></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="radio" id="timeBook" name="timeBook"
                                                                           value="9am - 10am">
                                                                    <label for="timeBook">9am - 10am</label><br></td>
                                                                <td><input type="radio" id="timeBook" name="timeBook"
                                                                           value="15pm - 16pm">
                                                                    <label for="timeBook">15pm - 16pm</label><br></td>
                                                                <td><input type="radio" id="timeBook" name="timeBook"
                                                                           value="19pm - 20pm">
                                                                    <label for="timeBook">19pm - 20pm</label><br></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="radio" id="timeBook" name="timeBook"
                                                                           value="10am - 11am">
                                                                    <label for="timeBook">10am - 11am</label><br></td>
                                                                <td><input type="radio" id="timeBook" name="timeBook"
                                                                           value="16pm - 17pm">
                                                                    <label for="timeBook">16pm - 17pm</label><br></td>
                                                                <td>
                                                                    <label for="timeBook">-</label><br></td>
                                                            </tr>
                                                            <tr>
                                                                <td><input type="radio" id="timeBook" name="timeBook"
                                                                           value="11am - 12pm" >
                                                                    <label for="timeBook">11am - 12pm</label><br></td>
                                                                <td><input type="radio" id="timeBook" name="timeBook"
                                                                           value="17pm - 18pm">
                                                                    <label for="timeBook">17pm - 18pm</label><br></td>
                                                                <td>
                                                                    <label for="timeBook">-</label><br></td>
                                                            </tr>
                                                        </table>
                                                        <center>
                                                            <button type="button"
                                                                    class="buttonNext btn btn-success book-data"
                                                                    data-dismiss="modal">Xác nhận
                                                            </button>
                                                        </center>
                                                    </div>
                                                </form>`

                data.timeBook.forEach(
                  (item, index) => {
                    console.log(item['timeBook'])
                    let radios = document.getElementsByName('timeBook')
                    console.log(radios)
                    let lengthRadios = radios.length
                    console.log(radios)
                    for (let i = 0; i < lengthRadios; i++) {
                      if (radios[i].value === item['timeBook']) {
                        radios[i].disabled = true
                      }
                    }
                  },
                )

              },
            })
          },
        })

      }
      if (stepIndex == '4') {

        timeBook = $('input[name="timeBook"]:checked').val()
        console.log(timeBook)
        $('#calendar-book').fullCalendar({
          selectable: true,
          selectHelper: true,
          select: function (start, end, allDay) {
            $('#fc_create').click()

            var started = start
            var ended = end
            var x = started.format()
            console.log(x)

          },
        })
        // var timeBook = $('input[name="timeBook"]:checked').val();
        document.getElementById('detailBook').innerHTML += `<h3>Step 1: Xác nhân thông tin cơ bản</h3>
                                                        <div class="  table">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th>Chi nhánh</th>
                                                                    <th>Chuyên khoa</th>

                                                                    <th style="width: 59%">Triệu chứng</th>

                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>` + $('select[name="chinhanh"]').val() + `</td>
                                                                    <td>` + $('select[name="chuyenkhoa"]').val() + `</td>
                                                                    <td>` + $('input[name="trieuchung"]').val() + `
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <h3>Step 2: Xác nhận bác sĩ</h3>
                                                        <div class="  table">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                <tr>
<!--                                                                    <th>Mã bác sỉ</th>-->
                                                                    <th>Họ và tên</th>
                                                                    <th>Chuyên khoa</th>
                                                                    <th>Chi nhánh</th>


                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
<!--                                                                    <td>....</td>-->
                                                                    <td>BS.` + calendarDoctor + `</td>
                                                                    <td>Mắt</td>
                                                                    <td>Quận 1</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <h3>Step 3: Xác nhận thời gian</h3>
                                                        <div class="  table">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th>Ngày đặt lịch</th>
                                                                    <th>Khung giờ</th>


                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>` + timeSelect + `</td>
                                                                    <td>` + $('input[name="timeBook"]:checked').val() +
          `</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>`
      }

    })
    //button previous
    $('.buttonPrevious').addClass('Previous-data')
    $('.Previous-data').click(function () {
      console.log($('#wizard').smartWizard('currentStep'))
      if ($('#wizard').smartWizard('currentStep') == '1') {
        document.getElementById('showDoctor').innerHTML = ''
      }
      if ($('#wizard').smartWizard('currentStep') == '3') {
        document.getElementById('detailBook').innerHTML = ''
      }

    })
    $('.antoclose').addClass('Close-data')
    $('.Close-data').click(function () {
      document.getElementById('testmodal').innerHTML = ''
    })

    //btn-finish
    $('.buttonFinish').addClass('finish-data')
    $('.finish-data').click(function () {
      $.ajax({
        method: 'POST',
        url: 'ajax/step4',
        data: {
          dateBook: timeSelect,
          doctor_id: clicked,
          symptom: symptom,
          branch: branch,
          specialist: specialist,
          nameDoctor: calendarDoctor,
          timeBook: timeBook,
        },
        headers:
          {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
          },
        success: function (data) {
            if(data == 'null')
            {
              alert("Kiểm tra lại các bước");
            }
            else {
              console.log(data)
              alert('Đặt lịnh thành công.');
            }

        },
        error: function (data) {
          alert('Vui lòng kiểm tra lại các bước.');
        },
      })
    })

  })

  //lay id bac si
  function reclick (clicked_id) {
    clicked = clicked_id
    console.log(clicked)
    $.ajax({
        method: 'POST',
        url: 'ajax/step2',
        data: { 'clicked': clicked },
        dataType: 'json',
        headers:
          {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
          },
        success: function (data) {
          calendarDoctor = data.calendarDoctor[0].name
        },
      })
  }


</script>

</html>