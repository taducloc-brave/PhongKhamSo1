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
                
                <h2>{{auth('doctors')->user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('doctor.dashboard')}}"><i class="fa fa-home"></i> Trang chủ</a>
                  </li>
                    <li><a href="{{route('doctor.schedule')}}"><i class="fa fa-home"></i> Xem lịch khám</a>
                    </li>
                    <li><a href="{{route('doctor.historySchedule')}}"><i class="fa fa-home"></i> Lịch sử khám</a>
                    </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Phòng họp</h3>
                <ul class="nav side-menu">
                  <li><a href="https://phongkhamso1.glitch.me/"><i class="fa fa-bug"></i> Tham gia phòng họp</a>
                  </li>
                </ul>
              </div>

            </div>
          </div>