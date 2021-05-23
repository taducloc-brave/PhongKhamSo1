@extends('layouts.admin')
@section('content')
<div class="col-md-3 ">
</div>
          <div class="col-md-6 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Thêm chuyên khoa</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form class="form-label-left input_mask">
                    <!-- neu da lam truong khoa thi khong the lam pho khoa -->
                    <div class="col-md-12  form-group has-feedback">
                      <label class="heard" style="font-size:120%" >Tên chuyên khoa:</label>
                      <input type="text" class="form-control" id="name" placeholder="">
                    </div>

                    <div class="col-md-12  form-group has-feedback">
                      <label class="heard" style="font-size:120%" >Trưởng khoa</label>
                          <select id="specialist" class="form-control" required>
                            <?php foreach ($bacsi as $shows) { ?>
                                <option value="{{$shows->name}}">{{$shows->name}}</option>

                           <?php } ?>
                          </select>
                    </div>

                    <div class="col-md-12  form-group has-feedback">
                      <label class="heard" style="font-size:120%" >Phó khoa</label>
                          <select id="specialist" class="form-control" required>
                            <?php foreach ($bacsi as $shows) { ?>
                                <option value="{{$shows->name}}">{{$shows->name}}</option>

                           <?php } ?>
                          </select>
                    </div>

                    <div class="col-md-12  form-group has-feedback">
                      <label for="message" class="heard" ><span style="font-size:120%" >Mô tả</span> (Lưu ý 0 đến 200 kí tự) :</label>
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="0" data-parsley-maxlength="200" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                    </div>





                    <div class="col-md-12  form-group has-feedback">
                      <input type="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
                      <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-12  form-group has-feedback">
                      <input type="tel" class="form-control has-feedback-left" id="inputSuccess5" placeholder="Phone">
                      <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-12  form-group has-feedback">
                      <label for="heard">Chuyên khoa:</label>
                          <select id="heard" class="form-control" required>
                            <option value="">Choose..</option>
                            <option value="press">Press</option>
                            <option value="net">Internet</option>
                            <option value="mouth">Word of mouth</option>
                          </select>
                    </div>

                    <div class="col-md-12  form-group has-feedback">
                      <label for="heard">Chi nhánh:</label>
                          <select id="heard" class="form-control" required>
                            <option value="">Choose..</option>
                            <option value="press">Press</option>
                            <option value="net">Internet</option>
                            <option value="mouth">Word of mouth</option>
                          </select>

                    </div>

                    <div class="col-md-12  form-group has-feedback">
                      <label>Giới tính:</label>
                      <p>
                        <strong style="margin-left: 10%" >Nam</strong>
                        <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required />      
                        <strong style="margin-left: 10%">Nữ</strong>
                        <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                      </p>
                    </div>


                    <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Default Input</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" placeholder="Default Input">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Disabled Input </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Read-Only Input</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Date Of Birth <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                        <script>
                          function timeFunctionLong(input) {
                            setTimeout(function() {
                              input.type = 'text';
                            }, 60000);
                          }
                        </script>
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group row">
                      <div class="col-md-9 col-sm-9  offset-md-3">
                        <button type="button" class="btn btn-primary">Cancel</button>
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>

              <div class="x_panel">
                <div class="x_title">
                  <h2>Star Rating</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                  <h4>Star Ratings<small> Hover and click on a star</small></h4>
                  <div>
                    <div class="starrr stars"></div>
                    You gave a rating of <span class="stars-count">0</span> star(s)
                  </div>

                  <p>Also you can give a default rating by adding attribute data-rating</p>
                  <div class="starrr stars-existing" data-rating='4'></div>
                  You gave a rating of <span class="stars-count-existing">4</span> star(s)
                </div>
              </div>

              <div class="x_panel">
                <div class="x_title">
                  <h2>Registration Form <small>Click to validate</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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

                  start form for validation -->
                  <form id="demo-form" data-parsley-validate>
                    <label for="fullname">Full Name * :</label>
                    <input type="text" id="fullname" class="form-control" name="fullname" required />

                    <label for="email">Email * :</label>
                    <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />

                    <label>Gender *:</label>
                    <p>
                      M:
                      <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> F:
                      <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                    </p>

                    <label>Hobbies (2 minimum):</label>
                    <p style="padding: 5px;">
                      <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Skiing
                      <br />

                      <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Running
                      <br />

                      <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Eating
                      <br />

                      <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Sleeping
                      <br />
                      <p>

                        <label for="heard">Heard us by *:</label>
                        <select id="heard" class="form-control" required>
                          <option value="">Choose..</option>
                          <option value="press">Press</option>
                          <option value="net">Internet</option>
                          <option value="mouth">Word of mouth</option>
                        </select>

                        <label for="message">Message (20 chars min, 100 max) :</label>
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>

                        <br />
                        <span class="btn btn-primary">Validate form</span>

                  </form>
                  <!-- end form for validations -->

                </div>
              </div>


            </div>
<div class="col-md-3 ">
</div>
 @endsection