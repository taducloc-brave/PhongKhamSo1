
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Phòng khám số 1</title>

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
    <div class="x_content">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="well">
                <div class="row">
                    <div class="col-md-9">
                        <h2><b>Thông tin đặt lịch khám.</b></h2>
                    </div>
                    <div class="col-md-3">
                        <a href="{{Route('ShowCalendar')}}">Xem tất cả.</a>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <br>
                        <table class="table">

                            <tbody>

                            <tr>
                                <th colspan="2" style="color: red"><h3>Thông tin bác sĩ</h3></th>
                            </tr>
                            @foreach($doctor as $doctors)
                                <tr>
                                    <th>Tên bác sĩ :</th>
                                    <td>{{$doctors->name}}</td>

                                </tr>
                                <tr>
                                    <th>Email :</th>
                                    <td>{{$doctors->email}}</td>

                                </tr>

                                <tr>
                                    <th>Chi nhánh :</th>
                                    <td>{{$doctors->branch}}</td>

                                </tr>
                                <tr>
                                    <th>Chuyên khoa :</th>
                                    <td>{{$doctors->specialist}}</td>

                                </tr>
                                <tr>
                                    <th>Chức vụ :</th>
                                    <td>{{$doctors->role}}</td>
                                </tr>
                            @endforeach
                            </tbody>

                            <tbody>
                            <th colspan="2" style="color: red"><h3>Thông tin lịch đặt</h3>
                            </th>
                            @foreach($book as $books)
                                <tr>
                                    <th>Thời gian:</th>
                                    <td>{{$books->dateBook}}</td>
                                </tr>
                                <tr>
                                    <th>Ca khám</th>
                                    <td>{{$books->timeBook}}</td>

                                </tr>

                                <tr>
                                    <th>Chi nhánh</th>
                                    <td><a>{{$books->specialist}}</a></td>

                                </tr>
                                @foreach($address as $addres)
                                    <tr>
                                        <th>Địa chỉ</th>
                                        <td><a>{{$addres->address}}</a></td>

                                    </tr>
                                @endforeach
                                <tr>
                                    <th>Triệu chứng kê khai</th>
                                    <td>{{$books->symptom}}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <center>
                            <div id="deleteBook">
                                <button type="button" class="btn btn-danger btn-xs" onclick="deleteBook({{$books->id}})"><i
                                            class="fa fa-trash-o"></i> Hủy lịch khám
                                </button>
                            </div>
                        </center>

                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

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


</html>
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script>
  function deleteBook($record_id) {
    document.getElementById('deleteBook').innerHTML = `Vui lòng nhấn <i style='color: red'>xác nhận</i> để thực hiện hủy lịch khám
<p><a type="button" href="{{route("cancelCalendar",["record_id"=>$book[0]->id])}}"  class="btn btn-danger btn-xs">Xác nhận </a></p>`
  }
</script>