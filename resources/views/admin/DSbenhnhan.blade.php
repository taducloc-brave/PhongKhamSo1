@extends('layouts.admin')
@section('content')
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Bệnh nhân</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Danh sách bệnh nhân</h2>
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

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        	<?php foreach ($configs as $config) { ?>
                        		 <th>{{$config['name']}}</th>
                        	<?php } ?>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php foreach ($records as $record) {  ?>
                      		<tr>
                      			<?php foreach ($configs as $config) {  ?>
                      				<td><?php if($config['field'] =='gender'){
                      				 	if($record[$config['field']]=='1'){
                      				 	echo "Nam";
                      				 	}else{
                      				 		echo "Nữ";
                      				 	}
                      				}else{ echo $record[$config['field']];}?>
                      				</td>
                      			<?php } ?>
                      		</tr>
                      	<?php } ?>
                      	
                      </tbody>
                    </table>
                   {{ $records->links("pagination::bootstrap-4") }}
                  </div>
                </div>
              </div>

              <div class="clearfix"></div>
            </div>
          </div>
@endsection