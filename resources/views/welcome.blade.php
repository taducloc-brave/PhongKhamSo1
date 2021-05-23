<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
{{--    <link href="../css/bootstrap.min.css" rel="stylesheet">--}}
    <!-- Custom Theme Style -->
{{--    <link href="../css/custom.min.css" rel="stylesheet">--}}
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
    />
    <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
            integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
            crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/style.css"/>
    <title>Phòng khám số 1.</title>
</head>
<body>

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
                    <li><a href="{{route('Profile')}}">Thông tin cá nhân</a></li>
                    <li><a href="#">Thông tin tài khoản</a></li>
                    <li><a href="{{route('ChangePassword')}}">Đổi mật khẩu</a></li>
                    <li><a href="{{Route('logoutUser')}}">Đăng xuất</a></li>
                </ul>
            </div>
        @endif
    </nav>
</div>
<div class="hero">
    <div class="hero__content">
        <h1 class="animation__hero" style="color: red"><i class="fa fa-paw"></i> Phòng Khám Số 1</h1>
        <p class="animation__hero" style="color:black">Tận tâm tận lực - Lương y như từ mẫu.</p>
        <a href="#" class="button animation__hero">Giới thiệu</a>
    </div>
</div>
<!-- Service Section -->
<div class="services">
    <div class="services__container">
        <div>
            <p class="services__topline animation__service"><i class="fa fa-paw"></i> Phòng khám số 1</p>
            <h1 class="services__heading animation__service">Chúng tôi cung cấp cho bạn</h1>
            <div class="services__features">
                <p class="services__features__feature animation__service">
                    <i class="fas fa-check-circle"></i> Chất lượng tốt nhất
                </p>
                <p class="services__features__feature animation__service">
                    <i class="fas fa-check-circle"></i> Tận tâm nhất
                </p>
                <p class="services__features__feature animation__service">
                    <i class="fas fa-check-circle"></i> Dịch vụ đặt lịch trực tuyến
                </p>
                <p class="services__features__feature animation__service">
                    <i class="fas fa-check-circle"></i> Lộ trình khám chữa bệnh rõ ràng
                </p>
                <p class="services__features__feature animation__service">
                    <i class="fas fa-check-circle"></i> Đội ngũ bác sĩ giàu kinh nghiệm
                </p>
                <p class="services__features__feature animation__service">
                    <i class="fas fa-check-circle"></i> Hỗ trợ 24/7
                </p>
            </div>
        </div>
        <div class="animation__service">
            <img src="../image/backgrounds.jpg" alt="gym" class="services__img"/>
        </div>
    </div>
</div>
<!-- membership section  -->
<div class="membership">
    <h1 class="animation__membership">Các khoa</h1>
    <p class="membership__desc animation__membership">
        Tất cả bác sĩ có chuyên môn và tay nghề hàng đầu
    </p>
    <div class="membership__wrapper">
        <div class="membership__card animation__membership">
            <div class="membership__title ">
                <i class="fa fa-paw" style="color: red"></i>
                <h3>Tật về mắt</h3>
            </div>
            <div class="membership__perks ">
                <p>aaa</p>
                <p>........</p>
            </div>
            <a href="/" class="button">Đặt lịch</a>
        </div>
        <div class="membership__card animation__membership">
            <div class="membership__title">
                <i class="fa fa-paw" style="color: red"></i>
                <h3>Tổng quát</h3>
            </div>
            <div class="membership__perks ">
                <p>........</p>
            </div>
            <a href="/" class="button">Đặt lịch</a>
        </div>
        <div class="membership__card animation__membership">
            <div class="membership__title">
                <i class="fa fa-paw" style="color: red"></i>
                <h3>Bệnh về mắt</h3>
            </div>
            <div class="membership__perks ">
                <p>........</p>
            </div>
            <a href="/" class="button">Đặt lịch</a>
        </div>
    </div>
</div>
<!-- team section  -->
<div class="team">
    <div class="team__wrapper">
        <div class="team__text">
            <h1 class="animation__membership">Đội ngũ bác sĩ</h1>
            <p class="team__text__topline animation__team"><i class="fa fa-paw" style="color: red"></i> Phòng khám số 1</p>
            <p class="team__desc animation__team">
                Chúng tôi tự hào về đội ngũ bác sĩ chuyên môn của mình từ chuyên môn, trình độ và thái độ.Tất cả bác
                sẽ
                đều đạt trình độ thạc sĩ trở lên trong đó có ba giáo sư đứng đầu cho các khoa và giữ chức vụ trưởng
                khoa.
            </p>
        </div>
        <div class="team__text">
            <p class="team__text__topline animation__team"><i class="fa fa-paw" style="color: red"></i> Phòng khám số 1</p>
            <h1 class="animation__team animation__team">Mở cửa 24/7</h1>
            <p class="team__desc animation__team">
                Chúng tôi luôn phục vụ cho bạn bất cứ ở đâu bất cứ khi nào.
            </p>
        </div>
        <div class="team__card animation__team animation__team">
            <p>John</p>
            <img src="../image/bacsi1.jpg" alt="person" class="team__img"/>
        </div>
        <div class="team__card animation__team">
            <p>Nick</p>
            <img src="../image/bacsi2.jpg" alt="person" class="team__img"/>
        </div>
        <div class="team__card animation__team">
            <p>Sarah</p>
            <img src="../image/bacsi3.jpg" alt="person" class="team__img"/>
        </div>
        <div class="team__card animation__team">
            <p>Pul</p>
            <img src="../image/bacsi4.jpg" alt="person" class="team__img"/>
        </div>
    </div>
</div>
<!-- Email section  -->
<div class="footer">
    <div class="footer__wrapper" style="display: flex; justify-content: space-around;">
        <div class="footer__desc">
            <h2 style="color: red"><i class="fa fa-paw" style="color: red"></i> Phòng khám số 1</h2>
            <p>Số điện thoại :</p>
            <p id="phone">0968870604</p>
        </div>
        <div class="footer__links">
            <h4 class="footer__title">Liên hệ</h4>
            <a href="#" class="footer__link">FaceBook: Phongkhamso1</a>
            <a href="#" class="footer__link">Zalo: 096887604.</a>
        </div>
        <div class="footer__links">
            <h4 class="footer__title">Ban giám đốc</h4>
            <a href="/service.html" class="footer__link">Tạ Đức Lộc</a>
            <a href="/service.html" class="footer__link">Huỳnh Long Diệm</a>
        </div>
        <div class="footer__links">
            <h4 class="footer__title">Chi nhánh</h4>
            <a href="/service.html" class="footer__link">60 Đường Lê Lợi P.4 GV</a>
            <a href="/service.html" class="footer__link">60 Đường Lê Lợi P.4 GV</a>
            <a href="/service.html" class="footer__link">60 Đường Lê Lợi P.4 GV</a>
        </div>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"
            integrity="sha512-Q+G390ZU2qKo+e4q+kVcJknwfGjKJOdyu5mVMcR95NqL6XaF4lY4nsSvIVB3NDP54ACsS9rqhE1DVqgpApl//Q=="
            crossorigin="anonymous"></script>
    <script src="../js/appIndex.js"></script>

