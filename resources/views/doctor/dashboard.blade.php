
@extends('layouts/doctor/doctorLayouts')
@section('content')
    <!-- top tiles -->
    <!-- /top tiles -->

    <div class="row">


    </div>
    <br/>

    <div class="row">
        <div class="col-md-8 col-sm-8 ">


            <div class="row">

                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thông tin bác sĩ <small>Mã bác sĩ: BS - {{auth('doctors')->user()->id}}</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="dashboard-widget-content">
                                <div class="col-md-4 hidden-small" style="visibility: unset">

                                    <div class="profile_img">
                                        <div id="crop-avatar">
                                            <!-- Current avatar -->
                                            <img class="img-responsive avatar-view" src="../image/bacsi1.jpg"
                                                 alt="Avatar" width="100%" height="270px" title="Change the avatar">
                                        </div>
                                    </div>
                                    <h3 style="text-transform: uppercase">{{auth('doctors')->user()->name}}</h3>
                                    <p>Mã bác sĩ : <i>BS - {{auth('doctors')->user()->id}}</i></p>

                                    <ul class="list-unstyled user_data">
                                        <li><h4 class="fa fa-map-marker user-profile-icon"> Địa điểm làm việc :
                                                {{auth('doctors')->user()->branch}}
                                            </h4></li>

                                        <li><h4 class="fa fa-briefcase user-profile-icon"> Chuyên môn :
                                                {{auth('doctors')->user()->specialist}}
                                            </h4></li>
                                    </ul>
                                    <br/>
                                </div>
                                <div class="col-md-8 hidden-small" style="visibility: unset">
                                    <h2 class="line_30">Thông tin cá nhân</h2>

                                    <table class="countries_list">
                                        <tbody>
                                        <tr>
                                            <td>Năm sinh</td>
                                            <td class="fs15 fw700 text-left">{{auth('doctors')->user()->date_of_birth}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td class="fs15 fw700 text-left">{{auth('doctors')->user()->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Số điện thoại</td>
                                            <td class="fs15 fw700 text-left">{{auth('doctors')->user()->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td>Chức vụ</td>
                                            <td class="fs15 fw700 text-left">{{auth('doctors')->user()->role}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </br>
                                    <center>
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                                data-target="#CalenderModalEdit"><i class="fa fa-edit m-right-xs"></i>Cập
                                            nhật
                                            thông tin
                                        </button>
                                    </center>

                                </div>
                                {{-- modal edit profile--}}
                                <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-header"><h3>Cập nhật thông tin</h3>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <form method="POST">
                                                    @csrf

                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput">Số điện thoại</label>
                                                        <input type="text" class="form-control"
                                                               id="formGroupExampleInput" placeholder="Example input">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput2">Email</label>
                                                        <input type="text" class="form-control"
                                                               id="formGroupExampleInput2" placeholder="Another input">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="select1">Địa điểm làm việc</label>
                                                        <select class="form-control" id="select1">
                                                            <option>Chọn chi nhánh</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="select1">Chuyên khoa</label>
                                                        <select class="form-control" id="select2">
                                                            <option>Chọn chuyên khoa</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label" for="gender">Giới
                                                            tính</label>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                   name="exampleRadios" id="exampleRadios1"
                                                                   value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                Nam
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                   name="exampleRadios" id="exampleRadios2"
                                                                   value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                Nữ
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="validatedCustomFile">
                                                        <label class="custom-file-label" for="validatedCustomFile">Cập nhật ảnh đại diện...</label>
                                                    </div>
                                                    <hr>
                                                    <center><a type="submit" style="color: black"
                                                               class="btn btn-primary">Lưu thay đổi
                                                        </a></center>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default antoclose2"
                                                        data-dismiss="modal">Hủy
                                                </button>
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
        <div class="col-md-4 col-sm-4 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Thông báo <small>Phòng khám số 1</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="dashboard-widget-content">

                        <ul class="list-unstyled timeline widget">
                            <li>
                                <div class="block">
                                    <form action="{{route('doctor.checkSchedule')}}" method="POST">
                                        @csrf
                                        @if(empty($data[0]->id))<i>Không có thông báo mới</i>
                                        @else
                                            @foreach($data as $datas)
                                                @if($datas->status == "Bệnh nhân hủy lịch")
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
                                                @else
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
                                                @endif
                                            @endforeach

                                            <center>
                                                <input type="submit" value="Xác nhận">
                                            </center>
                                        @endif
                                    </form>

                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection