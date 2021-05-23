<div class="nav_menu">
    <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
    </div>
    <nav class="nav navbar-nav">
        <ul class=" navbar-right">
            <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown"
                   data-toggle="dropdown" aria-expanded="false">
                    <img src="https://lh3.googleusercontent.com/ogw/ADGmqu8Q_0JiO9N0GUnLMKIsWFq_1NVxLq2TSZ9HAuhL=s83-c-mo"
                         alt="">{{auth('doctors')->user()->name}}
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('doctor.logout')}}"><i class="fa fa-sign-out pull-right"></i>Đăng
                        xuất </a>
                </div>
            </li>

            <li role="presentation" class="nav-item dropdown open">
                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown"
                   aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">{{$data->count()}}</span>
                </a>
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">

                    <div class="block">
                        <form action="{{route('doctor.checkSchedule')}}" method="POST">
                            @csrf
                            @if(empty($data[0]->id))<i>Không có thông báo mới</i>
                            @else
                                @foreach($data as $datas)
                                    @if($datas->status == "Bệnh nhân hủy lịch")
                                        <li class="nav-item">
                                            <div class="block_content">

                                                <h2 class="title">
                                                    Mã phiếu khám: PK - 00{{$datas->id}}
                                                </h2>
                                                <div class="byline">
                                                    <span>{{ $datas->dateBook}} - {{ $datas->timeBook}}</span>
                                                </div>
                                                <i style="color: red" class="excerpt">Bệnh nhân đã hủy lịch<br>
                                                </i><br>
                                            </div>
                                        </li>
                                    @else
                                        <li class="nav-item">
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <input type="checkbox" name="checkBox" value="{{$datas->id}}"
                                                           class="flat"> Mã phiếu khám: PK - 00{{$datas->id}}
                                                </h2>
                                                <div class="byline">
                                                    <span>{{ $datas->dateBook}} - {{ $datas->timeBook}}</span>
                                                </div>
                                                <p class="excerpt">Triệu chứng: {{$datas->symptom}}
                                                </p><br>
                                            </div>
                                        </li>
                                    @endif

                                @endforeach

                                <center>
                                    <input type="submit" value="Xác nhận">
                                </center>
                            @endif
                        </form>

                    </div>
                </ul>
            </li>
        </ul>
    </nav>
</div>