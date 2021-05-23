{{--{{dd($id_schedule)}}--}}
@extends('layouts/doctor/doctorLayouts')
@section('content')
    <style>
        .autocomplete-items {
            height: 50%;
            position: absolute;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        /*when hovering an item:*/
        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }

        /*when navigating through the items using the arrow keys:*/
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
        </style>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Thông tin kê khai <small>Phòng khám số 1</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="dropdown-item" href="#">Settings 1</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_panel">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="x_title">

                            <h2>Thông tin bệnh nhân</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
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
                            <div class="dashboard-widget-content">
                                <div class="col-md-4 hidden-small">

                                    <div class="profile_img">
                                        <div id="crop-avatar">
                                            <!-- Current avatar -->
                                            <img class="img-responsive avatar-view" src="../image/image.png"
                                                 alt="Avatar" width="100%" height="270px" title="Change the avatar">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-8 hidden-small">
                                    @foreach($Patient as $datas)
                                        <h2 class="line_30">{{$datas->name}}</h2>

                                        <table class="countries_list">
                                            <tbody>
                                            <tr>
                                                <td>Năm sinh</td>
                                                <td class="fs15 fw700 text-left">Thiếu</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td class="fs15 fw700 text-left">{{$datas->email}}</td>
                                            </tr>
                                            <tr>
                                                <td>Số điện thoại</td>
                                                <td class="fs15 fw700 text-left">{{$datas->phone}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <center>
                                            <a type="button" target="_blank" class="btn btn-dark" href="{{route("historyPersonal",['userID' => $datas->id])}}">Xem bệnh án</a>
                                        </center>
                                        @endforeach
                                        </br>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
{{--        <form class="form-horizontal form-label-left">--}}
            @method('POST')
            @csrf
            <div class="col-md-6 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Chuẩn đoán<small>Phòng khám số 1</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <div class="col-md-12 col-sm-12  form-group has-feedback">
                            <label for="KQCD">Kết quả chuẩn đoán :</label>
                            <textarea id="KQCD" name="KQCD" required="required" class="form-control"
                                      data-parsley-trigger="keyup" data-parsley-minlength="20"
                                      data-parsley-maxlength="100"
                                      data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                      data-parsley-validation-threshold="10"></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12  form-group has-feedback">
                            <label for="ketluan">Kết luận bệnh:</label>
                            <input type="text" class="form-control" id="KLB" name="KLB" required="required">
                        </div>

                        <div class="col-md-12 col-sm-12  form-group has-feedback">
                            <label for="Note">Lưu ý từ bác sĩ :</label>
                            <textarea id="Note" required="required" class="form-control" name="Note"
                                      data-parsley-trigger="keyup" data-parsley-minlength="20"
                                      data-parsley-maxlength="100"
                                      data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                      data-parsley-validation-threshold="10"></textarea>
                        </div>


                    </div>
                </div>


            </div>

            <div class="col-md-6 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tái khám</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
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
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Ngày tái khám:
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <input id="date" name="date" class="date-picker form-control" placeholder="dd-mm-yyyy"
                                       type="text"
                                       type="text" onfocus="this.type='date'"
                                       onmouseover="this.type='date'" onclick="this.type='date'"
                                       onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                <script>
                                  function timeFunctionLong (input) {
                                    setTimeout(function () {
                                      input.type = 'text'
                                    }, 60000)
                                  }
                                </script>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Ca Khám</label>
                            <div class="col-md-9 col-sm-9 ">
                                <select name="time" id="time" class="select2_single form-control" tabindex="-1">
                                    <option>Chọn thời gian</option>
                                    <option value="8am - 9am">8am - 9am</option>
                                    <option value="9am - 10am">9am - 10am</option>
                                    <option value="10am - 11am">10am - 11am</option>
                                    <option value="11am - 12pm">11am - 12pm</option>
                                    <option value="14pm - 15pm">14pm - 15pm</option>
                                    <option value="15pm - 16pm">15pm - 16pm</option>
                                    <option value="16pm - 17pm">16pm - 17pm</option>
                                    <option value="17pm - 18pm">17pm - 18pm</option>
                                    <option value="18pm - 19pm">18pm - 19pm</option>
                                    <option value="19pm - 20pm">19pm - 20pm</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12 ">
            <form autocomplete="off">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Đơn thuốc<small>Phòng khám số 1</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <div class="row">
                        <div class="form-group row col-md-6">
                            <label class="control-label col-md-3 col-sm-3 ">Tên thuốc</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="myCountry" id="myInput"
                                >
                            </div>
                        </div>
                        <div class="form-group row col-md-3">
                            <label class="control-label col-md-5 col-sm-5 ">Số lượng<p style="color: red" id="checkQuantity"></p></label>
                            <div class="col-md-7 col-sm-7 ">
                                <input type="number" class="form-control" min="1" max="" id="quantityMedicine">
                            </div>
                        </div>
                        <div class="form-group row col-md-3">
                            <label class="control-label col-md-5 col-sm-5 ">Đơn vị tính</label>
                            <div class="col-md-7 col-sm-7 ">
                                <input type="text" onclick="checkQuantity()" class="form-control" name="UnitMedicine" id="UnitMedicine" >
                            </div>
                        </div>
                        </div>
                        <h2>Thời gian uống thuốc</h2>
                        <div class="form-group row ">

                            <label class="control-label col-md-2 col-sm-2 "><input type="checkbox"
                                                                                   onclick="checkBoxMorning()">
                                Sáng</label>
                            <div class="col-md-10 col-sm-10 ">
                                <label class="control-label col-md-3 col-sm-3 ">Số lượng</label>
                                <div class="col-md-3 col-sm-3 "><input type="number" class="form-control"
                                                                       disabled="disabled" id="inputSLMorning"
                                                                       name="inputSLMorning" min="1"
                                                                       max="">
                                </div>
                                <label class="control-label col-md-2 col-sm-2 ">ĐVT</label>
                                <div class="col-md-4 col-sm-4 "><input type="text" class="form-control"
                                                                       disabled="disabled" id="inputDVTMorning"
                                                                       name="inputDVTMorning">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row ">

                            <label class="control-label col-md-2 col-sm-2 "><input type="checkbox"
                                                                                   onclick="checkBoxAfternoon()">
                                Trưa</label>
                            <div class="col-md-10 col-sm-10 ">
                                <label class="control-label col-md-3 col-sm-3 ">Số lượng</label>
                                <div class="col-md-3 col-sm-3 "><input type="number" class="form-control"
                                                                       disabled="disabled" id="inputSLAfternoon"
                                                                       name="inputSLAfternoon" min="1"
                                                                       max="">
                                </div>
                                <label class="control-label col-md-2 col-sm-2 ">ĐVT</label>
                                <div class="col-md-4 col-sm-4 "><input type="text" class="form-control"
                                                                       disabled="disabled" id="inputDVTAfternoon"
                                                                       name="inputDVTAfternoon">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row ">

                            <label class="control-label col-md-2 col-sm-2 "><input type="checkbox"
                                                                                   onclick="checkBoxNight()">
                                Tối</label>
                            <div class="col-md-10 col-sm-10 ">
                                <label class="control-label col-md-3 col-sm-3 ">Số lượng</label>
                                <div class="col-md-3 col-sm-3 "><input type="number" class="form-control"
                                                                       disabled="disabled" id="inputSLNight"
                                                                       name="inputSLNight" min="1"
                                                                       max="">
                                </div>
                                <label class="control-label col-md-2 col-sm-2 ">ĐVT</label>
                                <div class="col-md-4 col-sm-4 "><input type="text" class="form-control"
                                                                       disabled="disabled" id="inputDVTNight"
                                                                       name="inputDVTNight">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row " style="align-content: center">
                            <hr style="width: 100%">
                            <div class="col-md-8"></div>

                            <div class="col-md-4">
                                <button type="reset" style="background: transparent;outline: none;border: unset" ;>
                                    <a type="submit" onclick="return addMedicine();"
                                       class="btn btn-warning btn-submit">Nhập thuốc</a>
                                </button>
                            </div>
                        </div>


                        <div class="form-group row ">
                            <table class="table table-bordered" id="selectMedicine" style="text-align: center">
                            </table>
                        </div>
                        <div class="form-group row">
                            <hr style="width: 100%">
                            <label class="control-label col-md-3 col-sm-3 ">Lưu ý uống thuốc
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <textarea id="noteMedicine" name="noteMedicine" class="form-control"
                                          rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-md-12 offset-md-8">
                <a type="submit" class="btn btn-success" onclick="completedBook()">Xác nhận</a>
            </div>

{{--        </form>--}}
        <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> In phiếu
        </button>
    </div>
    <script>
      function checkBoxMorning () {
        if (document.getElementById('inputSLMorning').disabled === false &&
          document.getElementById('inputDVTMorning').disabled === false) {
          $('#inputSLMorning').val('')
          $('#inputDVTMorning').val('')
          document.getElementById('inputSLMorning').disabled = true
          document.getElementById('inputDVTMorning').disabled = true

        } else {

          document.getElementById('inputSLMorning').disabled = false
          document.getElementById('inputDVTMorning').disabled = false
        }
      }

      function checkBoxAfternoon () {
        if (document.getElementById('inputSLAfternoon').disabled === false &&
          document.getElementById('inputDVTAfternoon').disabled === false) {
          $('#inputSLAfternoon').val('')
          $('#inputDVTAfternoon').val('')
          document.getElementById('inputSLAfternoon').disabled = true
          document.getElementById('inputDVTAfternoon').disabled = true

        } else {
          document.getElementById('inputSLAfternoon').disabled = false
          document.getElementById('inputDVTAfternoon').disabled = false
        }
      }

      function checkBoxNight () {
        if (document.getElementById('inputSLNight').disabled === false &&
          document.getElementById('inputDVTNight').disabled === false) {
          $('#inputSLNight').val('')
          $('#inputDVTNight').val('')
          document.getElementById('inputSLNight').disabled = true
          document.getElementById('inputDVTNight').disabled = true

        } else {
          document.getElementById('inputSLNight').disabled = false
          document.getElementById('inputDVTNight').disabled = false
        }
      }

      function selectMedicine () {
        i++
        if (i == 1) {
          document.getElementById('selectMedicine').innerHTML += `<thead>
    <tr>
      <th  rowspan="2">STT</th>
      <th  rowspan="2">Tên thuốc</th>
      <th  rowspan="2">Số lượng</th>
      <th  rowspan="2">ĐVT</th>
      <th  colspan= "3">Chi tiết</th>
      <th  rowspan="2">Xử lí</th>
    </tr>
<tr>
      <th>Sáng</th>
      <th>Trưa</th>
      <th>Tối</th>
</tr>
</thead>
<tr>
      <td scope="row">` + i + `</td>
      <td>` + $('#myInput').val() + `</td>
      <td>` + $('#quantityMedicine').val() + `</td>
      <td>` + $('#UnitMedicine').val() + `</td>
      <td>` + $('#inputSLMorning').val() + ` ` + $('#inputDVTMorning').val() + `</td>
      <td>` + $('#inputSLAfternoon').val() + ` ` + $('#inputDVTAfternoon').val() + `</td>
      <td>` + $('#inputSLNight').val() + ` ` + $('#inputDVTNight').val() + `</td>
    </tr>
`
        } else {

          document.getElementById('selectMedicine').innerHTML += `<tr>
      <td scope="row">` + i + `</td>
      <td>` + $('#myInput').val() + `</td>
      <td>` + $('#quantityMedicine').val() + `</td>
      <td>` + $('#UnitMedicine').val() + `</td>
      <td>` + $('#inputSLMorning').val() + ` ` + $('#inputDVTMorning').val() + `</td>
      <td>` + $('#inputSLAfternoon').val() + ` ` + $('#inputDVTAfternoon').val() + `</td>
      <td>` + $('#inputSLNight').val() + ` ` + $('#inputDVTNight').val() + `</td>
      <td><a onclick="deleteRecordMedicie()" class="btn btn-round btn-danger">Hủy thuốc</a></td>
    </tr>`
        }
      }

      var i = 0

      function addMedicine () {
        var name = $('#myInput').val()
        var sl = $('#quantityMedicine').val()
        var DVT = $('#UnitMedicine').val()
        var sl_Morning = $('#inputSLMorning').val()
        var DVT_Morning = $('#inputDVTMorning').val()
        var sl_Afternoon = $('#inputSLAfternoon').val()
        var DVT_Afternoon = $('#inputDVTAfternoon').val()
        var sl_Night = $('#inputSLNight').val()
        var DVT_Night = $('#inputDVTNight').val()
        var url = window.location.href;
        var urlstring = new URL(url);
        var id_schedule = urlstring.searchParams.get("id_schedule");

        // console.log(name, sl, DVT, sl_Morning, DVT_Morning, sl_Afternoon, DVT_Afternoon, sl_Night
        //   , DVT_Night)
        $.ajax({
          method: 'POST',
          url: 'addMedicine',
          data: {
            'name': name,
            'sl': sl,
            'DVT': DVT,
            'id_schedule':id_schedule,
            'sl_Morning': sl_Morning,
            'DVT_Morning': DVT_Morning,
            'sl_Afternoon': sl_Afternoon,
            'DVT_Afternoon': DVT_Afternoon,
            'sl_Night': sl_Night,
            'DVT_Night': DVT_Night,
          },
          dataType: 'json',
          headers:
            {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
          success: function (data) {
            console.log(data)
          },
        })
        i++
        if (i == 1) {
          document.getElementById('selectMedicine').innerHTML += `<thead>
    <tr>
      <th  rowspan="2">STT</th>
      <th  rowspan="2">Tên thuốc</th>
      <th  rowspan="2">Số lượng</th>
      <th  rowspan="2">ĐVT</th>
      <th  colspan= "3">Chi tiết</th>
      <th  rowspan="2">Xử lí</th>
    </tr>
<tr>
      <td>Sáng</td>
      <td>Trưa</td>
      <td>Tối</td>
</tr>
</thead>
<tr>
      <td scope="row">` + i + `</td>
      <td>` + $('#myInput').val() + `</td>
      <td>` + $('#quantityMedicine').val() + `</td>
      <td>` + $('#UnitMedicine').val() + `</td>
      <td>` + $('#inputSLMorning').val() + ` ` + $('#inputDVTMorning').val() + `</td>
      <td>` + $('#inputSLAfternoon').val() + ` ` + $('#inputDVTAfternoon').val() + `</td>
      <td>` + $('#inputSLNight').val() + ` ` + $('#inputDVTNight').val() + `</td>
      <td><a class="btn btn-round btn-danger">Hủy thuốc</a></td>
    </tr>`
        } else {

          document.getElementById('selectMedicine').innerHTML += `<tr>
      <td scope="row">` + i + `</td>
      <td>` + $('#myInput').val() + `</td>
      <td>` + $('#quantityMedicine').val() + `</td>
      <td>` + $('#UnitMedicine').val() + `</td>
      <td>` + $('#inputSLMorning').val() + ` ` + $('#inputDVTMorning').val() + `</td>
      <td>` + $('#inputSLAfternoon').val() + ` ` + $('#inputDVTAfternoon').val() + `</td>
      <td>` + $('#inputSLNight').val() + ` ` + $('#inputDVTNight').val() + `</td>
      <td id="medicine`+i+`"><a onclick="delete( function ($this.innerHTML = "Paragraph changed!"))" class="btn btn-round btn-danger">Hủy thuốc</a></td>
    </tr>`
        }
      }

      function completedBook () {
        var Diagnostic_Results = $('#KQCD').val()
        var diagnose = $('#KLB').val()
        var note = $('#Note').val()
        var date = $('#date').val()
        var time = $('#time option:selected').val()
        var noteMedicine = $('#noteMedicine').val()
        var url = window.location.href;
        var urlstring = new URL(url);
        var id_schedule = urlstring.searchParams.get("id_schedule");
        $.ajax({
          method: 'POST',
          url: 'complete',
          data: {
            'id_schedule': id_schedule,
            'Diagnostic_Results': Diagnostic_Results,
            'diagnose': diagnose,
            'note': note,
            'date': date,
            'time': time,
            'noteMedicine':noteMedicine
          },
          dataType: 'json',
          headers:
            {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
          success: function (data) {
            alert("Hoàn thành khám bệnh");
          },
        })
      }
    function checkQuantity(){
        var quantityMedicine = $('#quantityMedicine').val()
        if(quantityMedicine==''){
          document.getElementById('checkQuantity').innerHTML=`*Yêu cầu`;
        }else {
          var nameMedicine = $('#myInput').val()
          $.ajax({
            method: 'POST',
            url: 'checkQuantity',
            data: {
              'quantity': quantityMedicine,
              'name': nameMedicine
              },
            dataType: 'json',
            headers:
              {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
              },
            success: function (data) {
              if(data.successError=="Error")
              {
                document.getElementById('checkQuantity').innerHTML=`*Kho:`+data.quantity+`viên`;
              }
              if(data.success=="OK")
              {
                document.getElementById('checkQuantity').innerHTML=``;
              }

            },
          })

        }
    }
// function deleteRecordMedicie($i){//so $i với id thực hiện xóa
//   $("#medicine1").html("Hello <b>world!</b>");
// }
      function autocomplete(inp, arr) {
        var currentFocus;
        inp.addEventListener("input", function(e) {
          var a, b, i, val = this.value;
          closeAllLists();
          if (!val) { return false;}
          currentFocus = -1;
          a = document.createElement("DIV");
          a.setAttribute("id", this.id + "autocomplete-list");
          a.setAttribute("class", "autocomplete-items");
          this.parentNode.appendChild(a);
          for (i = 0; i < arr.length; i++) {
            if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {

              b = document.createElement("DIV");
              b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
              b.innerHTML += arr[i].substr(val.length);
              b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
              b.addEventListener("click", function(e) {
                inp.value = this.getElementsByTagName("input")[0].value;
                closeAllLists();
              });
              a.appendChild(b);
            }
          }
        });
        inp.addEventListener("keydown", function(e) {
          var x = document.getElementById(this.id + "autocomplete-list");
          if (x) x = x.getElementsByTagName("div");
          if (e.keyCode == 40) {
            currentFocus++;
            addActive(x);
          } else if (e.keyCode == 38) {
            currentFocus--;

            addActive(x);
          } else if (e.keyCode == 13) {

            e.preventDefault();
            if (currentFocus > -1) {

              if (x) x[currentFocus].click();
            }
          }
        });
        function addActive(x) {

          if (!x) return false;
          /*start by removing the "active" class on all items:*/
          removeActive(x);
          if (currentFocus >= x.length) currentFocus = 0;
          if (currentFocus < 0) currentFocus = (x.length - 1);

          x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {

          for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
          }
        }
        function closeAllLists(elmnt) {

          var x = document.getElementsByClassName("autocomplete-items");
          for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
              x[i].parentNode.removeChild(x[i]);
            }
          }
        }

        document.addEventListener("click", function (e) {
          closeAllLists(e.target);
        });
      }

      var countries = ["Paracetamol","Aspirin","Floctafenin","Nefopam","Morphin","Aminosid",
        "Thiamphenicol","Cloramphenicol","Glycopeptid","Polypeptid","GHV Bone","Habelric","Glucosamine Orihiro","Nano Silymarin OIC","Detox Green"];

      autocomplete(document.getElementById("myInput"), countries);
    </script>
@endsection
