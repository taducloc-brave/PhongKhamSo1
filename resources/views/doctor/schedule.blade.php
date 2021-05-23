{{--{{dd($schedule)}}--}}
@extends('layouts/doctor/doctorLayouts')
@section('content')
    <body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- page content -->

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Lịch khám : <small>{{auth('doctors')->user()->name}} / Mã số : BN - 002</small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <p class="text-muted font-13 m-b-30">
                                            Nếu bạn có thắc mắc hay cần biết thêm thông tin xin vui lòng liên hệ với
                                            chúng
                                            tôi để được hỗ trợ
                                        </p>
                                        <table id="datatable" class="table table-striped table-bordered"
                                               style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên bệnh nhân</th>
                                                <th>Triệu chứng</th>
                                                <th>Ngày đặt</th>
                                                <th>Ca khám</th>
                                                <th>Tình trạng</th>{{--đợi khám Hủy Hoàn thành--}}
                                                <th>Xem bệnh án</th>
                                                <th>Thực hiện khám</th>
                                                <th>Hủy lịch khám</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            <?php $i = 1 ?>;
                                            @foreach ($schedule as $schedules)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$schedules->name_patient}}</td>
                                                    <td>{{$schedules->symptom}}</td>
                                                    <td>{{$schedules->dateBook}}</td>
                                                    <td>{{$schedules->timeBook}}</td>
                                                    <td>{{$schedules->status}}</td>
                                                    <td><a href="{{route("historyPersonal",['userID' => $schedules->created_by])}}" target="_blank" class="btn btn-primary"><i
                                                                    class="fa fa-folder"></i>
                                                            Chi tiết </a></td>
                                                    <td><a href="{{route('doctor.actionSchedule',['id_schedule'=>$schedules->id])}}" class="btn btn-primary btn-xs">
                                                            Khám bệnh </a></td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal{{$schedules->id}}"><i class="fa fa-trash-o"></i> Hủy lịch khám</button>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="myModal{{$schedules->id}}" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h2 class="modal-title" style="color: black">Hủy lịch khám</h2>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                                                            </div>
                                                            <div class="modal-body">

                                                                <center>
                                                                    <p>Nhấn <i style="color: red">xác nhận</i> nếu bạn muốn hủy lịch khám này.</p>
                                                                    <a type="button" href="{{route('doctorDelete',['record_id'=>$schedules->id])}}" class="btn btn-round btn-danger" style="color: black">XÁC NHẬN</a>
                                                                </center>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach
                                            <tr>

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
@endsection