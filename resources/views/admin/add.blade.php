@extends('layouts.admin')
@section('content')
<div class="col-md-3 ">
</div>
          <div class="col-md-6 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Thêm bác sĩ</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                
                  <form class="form-label-left input_mask" action="{{route('BScontroller.add')}}">
                     <br />
                    <div class="col-md-12  form-group has-feedback">
                      <input type="text" class="form-control has-feedback-left" name="name" id="name" placeholder="Họ và tên">
                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-12  form-group has-feedback">
                      <input type="password" class="form-control has-feedback-left" name="passWord" id="passWord" placeholder="PassWord">
                      <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-12  form-group has-feedback">
                      <input type="email" class="form-control has-feedback-left" name="email" id="email" placeholder="Email">
                      <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-12  form-group has-feedback">
                      <input type="tel" class="form-control has-feedback-left" name="phone" id="phone" placeholder="Phone">
                      <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-12  form-group has-feedback">
                      <label>Giới tính:</label>
                      <p>
                        <strong style="margin-left: 10%" >Nam</strong>
                        <input type="radio" class="flat" name="gender" id="genderM" value="1" checked="" required />      
                        <strong style="margin-left: 10%">Nữ</strong>
                        <input type="radio" class="flat" name="gender" id="genderF" value="2" />
                      </p>
                    </div>

                    <div class="col-md-12  form-group has-feedback">
                      <label class="heard">Năm sinh:</label>
                        <input class="date-picker form-control" name="date_of_birth" id="date_of_birth" name="date_of_birth" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                        <script>
                          function timeFunctionLong(input) {
                            setTimeout(function() {
                              input.type = 'text';
                            }, 60000);
                          }
                        </script>
                    </div>

                    <div class="col-md-12  form-group has-feedback">
                      <label for="heard">Chuyên khoa:</label>
                          <select id="specialist" name="specialist" class="form-control" required>
                            <?php foreach ($specialist as $shows) { ?>
                                <option value="{{$shows->specialist}}">{{$shows->specialist}}</option>

                           <?php } ?>
                          </select>
                    </div>

                    <div class="col-md-12  form-group has-feedback">
                      <label for="heard">Chi nhánh:</label>
                          <select id="branch" name="branch" class="form-control" required>
                           <?php foreach ($branch as $shows) { ?>
                                <option value="{{$shows->branch}}">{{$shows->branch}}</option>

                           <?php } ?>
                          </select>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-9 col-sm-9  offset-md-3">
                        <button type="submit" class="btn btn-success">Thêm bác sĩ</button>
                        <button class="btn btn-primary" type="reset">Reset</button>
                        
                      </div>
                    </div>

                  </form>
                </div>
              </div>
          </div>

<div class="col-md-3 ">
</div>
 @endsection