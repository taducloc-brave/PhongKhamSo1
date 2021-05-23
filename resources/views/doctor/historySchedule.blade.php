{{--{{dd($daa)}}--}}
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
                                                <th>Ngày đặt</th>
                                                <th>Ca khám</th>
                                                <th>Tình trạng</th>{{--đợi khám Hủy Hoàn thành--}}
                                                <th>Xem chi tiết</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            <?php $i = 1 ?>;
                                            @foreach ($schedule as $schedules)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$schedules->name_patient}}</td>
                                                    <td>{{$schedules->dateBook}}</td>
                                                    <td>{{$schedules->timeBook}}</td>
                                                    <td>{{$schedules->status}}</td>
                                                    <td><a href="{{route("detail",['recordId'=>$schedules->id])}}" class="btn btn-primary btn-xs"><i
                                                                    class="fa fa-folder"></i>
                                                            Chi tiết </a></td>
                                                </tr>
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