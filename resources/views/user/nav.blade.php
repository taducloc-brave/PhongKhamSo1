
<nav class="navbar">
    <a href="/" class="navbar__logo"><img src="../image/logo1.png"
                                          style="height: 100%; width: 70%"></a></div></a>
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
        <a href="/" class="navbar__link">Lịch sử</a>
        <div class="dropdown">
            <button style="background: black; color: white; border: 1px solid black;" class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                <a href="/" class="navbar__link"> Chào, {{auth()->user()->name}} <span class="caret"></span></a> </button>
            <ul class="dropdown-menu">
                <li><a href="{{ route('profile.show') }}">Thông tin cá nhân</a></li>
                <li><a href="#">Thông tin tài khoản</a></li>
                <li><a href="#">Đổi mật khẩu</a></li>
                <li><a href="{{Route('logout')}}">Đăng xuất</a></li>
            </ul>
        </div>





    @endif


</nav>