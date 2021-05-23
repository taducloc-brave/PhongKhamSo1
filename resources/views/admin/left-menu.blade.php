          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Phòng khám số 1</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="https://lh3.googleusercontent.com/ogw/ADGmqu8Q_0JiO9N0GUnLMKIsWFq_1NVxLq2TSZ9HAuhL=s83-c-mo" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Chào,</span>
                
                <h2><?php echo auth()->user()->name; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-home"></i> Trang chủ</a>
                  </li>


                  <li><a><i class="fa fa-desktop"></i> Bác sĩ <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     <li><a href="{{route('MenuBSController.Doctors',['model'=>'AccountBS'])}}">Danh sách TK</a></li>
                      <li><a href="{{route('MenuBSController.Doctors',['model'=>'Doctors'])}}">DS bác sĩ</a></li>
                      <li><a href="{{route('BScontroller.option',['model'=>'add'])}}">Thêm bác sĩ</a></li>
                    </ul>
                  </li>




                  <li><a><i class="fa fa-desktop"></i> Chuyên khoa <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     <li><a href="{{route('specialist.index',['model'=>'specialists'])}}">DS các khoa</a></li>
                      <li><a href="{{route('specialist.index',['model'=>'addspecialist'])}}">Thêm chuyên khoa</a></li>
                    </ul>
                  </li>


                  <li><a><i class="fa fa-desktop"></i> Bệnh nhân <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     <li><a href="{{route('benhnhan.index',['modelBN'=>'user'])}}">Danh sách BN</a></li>
                      <li><a href="media_gallery.html">Bệnh án</a></li>
                    </ul>
                  </li>
                  

                  
                  <li><a><i class="fa fa-table"></i> Thuốc <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('medicines.index',['model'=>'medicines'])}}">Kho thuốc</a></li>
                      <li><a href="{{route('medicines.index',['model'=>'addmedicines'])}}">Thêm thuốc</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Doanh thu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('admin.statistics')}}">Thống kê</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Phòng họp</h3>
                <ul class="nav side-menu">
                  <li><a href="https://phongkhamso1.glitch.me/" target="_blank" style="target-new: tab"><i class="fa fa-bug"></i> Tạo phòng họp</a>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>