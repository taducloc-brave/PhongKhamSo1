{{--{{dd($show->all())}}--}}

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
    <!-- Custom Theme Style -->
    <link href="../css/custom.min.css" rel="stylesheet">
    <!--my css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
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
            <a href="{{Route('ShowCalendar')}}" class="navbar__link">Xem lịch khám</a>
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
                    <li><a href="{{Route('logout')}}">Đăng xuất</a></li>
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
                        <h1>Bệnh án cá nhân</h1>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                @if(empty($show[0]->id))<i>Không có lịch sử khám</i>
                                @endif
                                @foreach($show as $shows)
                                    <div class="x_panel" style="">
                                        <div class="x_title">
                                            <h2>Mã phiếu khám: PKBN<span style="color: black"
                                                                         class="medicine_id">{{$shows->id}}</span>
                                                <small>{{$shows->dateBook}}
                                                    -{{$shows->timeBook}}</small></h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><h1>*</h1></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content" style="display: none">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10">
                                                <div class="well" style="overflow: auto">
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-10">
                                                            <center><h2>Phòng khám số 1</h2></center>
                                                            <table class="table">

                                                                <tbody>

                                                                <tr>
                                                                    <th colspan="2" style="color: red"><h2>Thông tin
                                                                            chung</h2></th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tên bác sĩ :</th>
                                                                    <td>{{$shows->nameDoctor}}</td>

                                                                </tr>

                                                                <tr>
                                                                    <th>Chi nhánh :</th>
                                                                    <td>{{$shows->branch}}</td>

                                                                </tr>
                                                                <tr>
                                                                    <th>Chuyên khoa :</th>
                                                                    <td>{{$shows->specialist}}</td>

                                                                </tr>
                                                                <tr>
                                                                    <th>Triệu chứng kê khai :</th>
                                                                    <td>{{$shows->symptom}}</td>
                                                                </tr>
                                                                </tbody>

                                                                <tbody>
                                                                <th colspan="2" style="color: red"><h2>Phiếu khám</h2>
                                                                </th>
                                                                <tr>
                                                                    <th>Kết quả chuẩn đoán :</th>
                                                                    <td>{{$shows->Diagnostic_Results}}</td>

                                                                </tr>
                                                                <tr>
                                                                    <th>Kết luận bệnh :</th>
                                                                    <td>{{$shows->diagnose}}</td>

                                                                </tr>

                                                                <tr>
                                                                    <th>Lưu ý từ bác sĩ :</th>
                                                                    <td><a>{{$shows->note}}</a></td>

                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <div>
                                                                <h2 style="color: red">Chi
                                                                        tiết đơn thuốc</h2>
                                                                <table class="table table-bordered detail-medicine"
                                                                       style="text-align: center" >
                                                                    <tbody>
                                                                    <tr>
                                                                        <th rowspan="2" >Tên thuốc</th>
                                                                        <th rowspan="2" >Số lượng</th>
                                                                        <th rowspan="2" >ĐVT</th>
                                                                        <th colspan= "3">Thời gian uống</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sáng</td>
                                                                        <td>Trưa</td>
                                                                        <td>Tối</td>
                                                                    </tr>
                                                                    @foreach($shows->medicine as $medicines)
                                                                    <tr>
                                                                        <td>{{$medicines->name}}</td>
                                                                        <td>{{$medicines->DVT}}</td>
                                                                        <td>{{$medicines->sl}}</td>
                                                                        <td>{{$medicines->sl_Morning}} {{$medicines->DVT_Morning}}</td>
                                                                        <td>{{$medicines->sl_Afternoon}} {{$medicines->DVT_Afternoon}}</td>
                                                                        <td>{{$medicines->sl_Night}} {{$medicines->DVT_Night}}</td>
                                                                    </tr>
                                                                    @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>


                                                        </div>
                                                        <div class="col-md-1"></div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>


                                        </div>
                                    </div>
                                @endforeach

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
<!-- Custom Theme Scripts -->
<script type="text/javascript" src="./js/custom.min.js"></script>


</html>
<script>

  $('.btn-medicine').click(function () {
    var data1
    var sl
    var DVT
    var Morning
    var afternoon
    var night

    var record_id = $('.medicine_id').html()
    console.log(record_id)

    $.ajax({
      method: 'POST',
      url: 'ajax/listMedicine',
      data: { 'record_id': record_id },
      dataType: 'json',
      headers:
        {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
      success: function (data) {

      },

    })
    let htmlString = `<tbody>
                          <tr>
                            <th rowspan="2" >Tên thuốc</th>
                            <th rowspan="2" >Số lượng</th>
                            <th rowspan="2" >ĐVT</th>
                            <th colspan= "3">Thời gian uống</th>
                          </tr>
                          <tr>
                            <td>Sáng</td>
                            <td>Trưa</td>
                            <td>Tối</td>
                          </tr>
                      </tbody>`
    $(this).parent().siblings().html(htmlString)

  })
</script>