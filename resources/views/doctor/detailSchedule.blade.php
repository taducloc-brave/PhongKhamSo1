
@extends('layouts/doctor/doctorLayouts')
@section('content')
    <div class="container body">
        <div class="main_container">
            <!-- page content -->

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h1>Bệnh án cá nhân</h1>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    @if(empty($show[0]->id))<i>Không có kết quả</i>
                                    @endif
                                    @foreach($show as $shows)
                                        <div class="x_panel" style="">
                                            <div class="x_content">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10">
                                                    <div class="well" style="overflow: auto">
                                                        <div class="row">
                                                            <div class="col-md-1"></div>
                                                            <div class="col-md-10">
                                                                <center><h2 style="color: red">Phòng khám số 1</h2><p>Mã phiếu khám: PKBN{{$shows->id}}</p><p>{{$shows->dateBook}} / {{$shows->timeBook}}</p></center>
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
                                                                    <th colspan="2" style="color: red"><h2>Chi tiết đơn thuốc</h2>
                                                                    </th>
                                                                    </tbody>
                                                                </table>
                                                                <div>

                                                                    <table class="table table-bordered detail-medicine" style="text-align: center" id="showMedicine">
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
                                                                        @foreach($medicine as $medicines)
                                                                        <tr>
                                                                            <td>{{$medicines->name}}</td>
                                                                            <td>{{$medicines->sl}}</td>
                                                                            <td>{{$medicines->DVT}}</td>
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
                                                    <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> In phiếu
                                                    </button>
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
@endsection