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

            <h2>{{auth()->user()->name}}</h2>
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
            <h3>Quản lí Admin</h3>
            <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Thông tin Admin <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="e_commerce.html">E-commerce</a></li>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="project_detail.html">Project Detail</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="profile.html">Profile</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>

</div>
