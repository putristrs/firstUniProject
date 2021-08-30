<?php

$result = mysqli_query($koneksi, "SELECT * FROM user WHERE id");

while($data = mysqli_fetch_array($result))
{
  $username = $data['username'];
  $password = $data['password'];
  $nomorhandphone = $data['nomorhandphone'];
}

 ?>



<div class="main-content">
  <div class="main-content-inner">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
      <ul class="breadcrumb">
        <li>
          <i class="ace-icon fa fa-home home-icon"></i>
          <a href="#">Home</a>
        </li>

        <li>
          <a href="#">Ubah Profil</a>
        </li>
      </ul><!-- /.breadcrumb -->
    </div>

    <div class="page-content">
      <div class="ace-settings-container" id="ace-settings-container">
        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
          <i class="ace-icon fa fa-cog bigger-130"></i>
        </div>

        <div class="ace-settings-box clearfix" id="ace-settings-box">
          <div class="pull-left width-50">
            <div class="ace-settings-item">
              <div class="pull-left">
                <select id="skin-colorpicker" class="hide">
                  <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                  <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                  <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                  <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                </select>
              </div>
              <span>&nbsp; Choose Skin</span>
            </div>

            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
              <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
            </div>

            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
              <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
            </div>

            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
              <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
            </div>

            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
              <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
            </div>

            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
              <label class="lbl" for="ace-settings-add-container">
                Inside
                <b>.container</b>
              </label>
            </div>
          </div><!-- /.pull-left -->

          <div class="pull-left width-50">
            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
              <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
            </div>

            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
              <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
            </div>

            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
              <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
            </div>
          </div><!-- /.pull-left -->
        </div><!-- /.ace-settings-box -->
      </div><!-- /.ace-settings-container -->

      <div class="page-header">
        <h1>
          Ubah Profil
        </h1>
      </div><!-- /.page-header -->

      <div class="row">
        <div class="col-xs-12">
          <!-- PAGE CONTENT BEGINS -->
          <div class="row">
            <div class="col-xs-12">
              <div class="clearfix">
                
              </div>
              

              <!-- div.table-responsive -->

              <!-- div.dataTables_borderWrap -->
               <div class="row">
         <div class="col-xs-12">

           <div class="row" style="padding: 20px;">
             <div class="col-md-1">

             </div>


               <form class="form-horizontal" role="form" action="page/proseseditprofil.php" method="post" enctype="multipart/form-data">

                 <input type="hidden" name="id" value="<?php echo $id_data; ?>">
                 <div class="col-md-6">
                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Sebagai:</label>

                   <div class="col-sm-9">
                     <select name="id">
                       <?php
                       $query = mysqli_query($koneksi,"SELECT * FROM user WHERE level='admin'");
                       if (mysqli_num_rows($query) > 0) {
                         while ($data = mysqli_fetch_array($query)) { ?>

                     <option value="<?php echo $data['id']; ?>"><?php echo $data['username']; ?></option>
                         <?php
                       }
                     }
                      ?>
                     </select>
                   </div>
                 </div>

              
                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Username</label>

                   <div class="col-sm-9">
                     <input type="text" name="username" id="form-field-1" value="<?php echo $username ?>" placeholder="Username" class="form-control" />
                   </div>
                 </div>

                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Password </label>

                   <div class="col-sm-9">
                     <input type="text" name="password" id="form-field-1-1" value="<?php echo $password; ?>" placeholder="Password" class="form-control" />
                   </div>
                 </div>

                 <div class="form-group">
                   <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Nomor Handphone </label>

                   <div class="col-sm-9">
                     <input type="text" name="nomorhandphone" id="form-field-1-1" value="<?php echo $nomorhandphone; ?>" placeholder="Nomor Handphone" class="form-control" />
                   </div>
                 </div>

                

                  <div class="clearfix form-actions">
                  <div class="col-md-offset-3 col-md-9">
                  <button class="btn btn-info" type="submit" name="update">
                   <i class="ace-icon fa fa-check bigger-110"></i>
                   Update
                   </button>

                   &nbsp; &nbsp; &nbsp;
                   <button class="btn btn-danger" type="reset">
                  <i class="ace-icon fa fa-undo bigger-110"></i>
                    Reset
                  </button>
                   </div>
                   </div>
                   
                                  
                   

                        <div class="hidden-md hidden-lg">
                          <div class="inline pos-rel">
                            <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                              <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                            </button>

                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                              <li>
                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                  <span class="blue">
                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                  </span>
                                </a>
                              </li>

                              <li>
                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                  <span class="green">
                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                  </span>
                                </a>
                              </li>

                              <li>
                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                  <span class="red">
                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                  </span>
                                </a>
                              </li>

                            </ul>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <?php
                          
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div id="modal-table" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header no-padding">
                  <div class="table-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <span class="white">&times;</span>
                    </button>
                    Results for "Latest Registered Domains
                  </div>
                </div>

                <div class="modal-body no-padding">
                  <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                    <thead>
                      <tr>
                        <th>Domain</th>
                        <th>Price</th>
                        <th>Clicks</th>

                        <th>
                          <i class="ace-icon fa fa-clock-o bigger-110"></i>
                          Update
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>
                          <a href="#">ace.com</a>
                        </td>
                        <td>$45</td>
                        <td>3,330</td>
                        <td>Feb 12</td>
                      </tr>

                      <tr>
                        <td>
                          <a href="#">base.com</a>
                        </td>
                        <td>$35</td>
                        <td>2,595</td>
                        <td>Feb 18</td>
                      </tr>

                      <tr>
                        <td>
                          <a href="#">max.com</a>
                        </td>
                        <td>$60</td>
                        <td>4,400</td>
                        <td>Mar 11</td>
                      </tr>

                      <tr>
                        <td>
                          <a href="#">best.com</a>
                        </td>
                        <td>$75</td>
                        <td>6,500</td>
                        <td>Apr 03</td>
                      </tr>

                      <tr>
                        <td>
                          <a href="#">pro.com</a>
                        </td>
                        <td>$55</td>
                        <td>4,250</td>
                        <td>Jan 21</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="modal-footer no-margin-top">
                  <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Close
                  </button>

                  <ul class="pagination pull-right no-margin">
                    <li class="prev disabled">
                      <a href="#">
                        <i class="ace-icon fa fa-angle-double-left"></i>
                      </a>
                    </li>

                    <li class="active">
                      <a href="#">1</a>
                    </li>

                    <li>
                      <a href="#">2</a>
                    </li>

                    <li>
                      <a href="#">3</a>
                    </li>

                    <li class="next">
                      <a href="#">
                        <i class="ace-icon fa fa-angle-double-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div>

          <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.page-content -->
  </div>
</div><!-- /.main-content -->