<!-- Main header section-->
<?php include('includes/main-header.php');?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Left menu -->
    <?php include('includes/left-menu.php');?>
    <!-- End of Left menu -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
         <?php include('includes/top-bar.php');?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          
          <!-- Add details -->
          <div class="row forms_inner">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <h1 class="h3  text-gray-800">Posts</h1>
                <div class="card mb-4 py-3 border-top-primary">
                  <div class="card-body">
                    <form class="user">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Category type <span style="color: red">*</span></label>
                            <select name="ads" class="form-control">
                              <option selected>Select </option>
                              <option value="">జాతీయం</option>
                              <option value="">2</option>
                              <option value="">3</option>
                              <option value="">4</option>
                              <option value="">5</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Post title <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="" >
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Post Image <small>(Only upload jpg, png format)</small></label>
                            <input type="file" class="form-control" id="" >
                            
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <p>(OR)</p>
                        </div>
                         
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Post Video URL <small>(Only Youtube URLs)</small></label>
                            <input type="text" class="form-control" id="" >
                          </div>
                        </div>
                         
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Post description <span style="color: red">*</span></label>
                            <textarea class="form-control" name="post_content" rows="30"></textarea>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Date & Time <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="datetimepicker" >
                          </div>
                        </div>
                        
                        

                        <div class="col-sm-12 text-center">
                          <button type="submit" class="btn btn-primary text-center">Add Post</button>
                        </div>
                      </div>
                      
                      
                    </form>
                  </div>
                </div>
            </div>
          </div>

          <!-- View details -->
          <div class="view_form">
            <div class="row">
              <div class="col-sm-12">
                <h5 class="text-gray-800">View Posts</h5>
                  <div class="card mb-4 py-3 border-top-primary">
                    <div class="card-body table_style">
                      <div class="table_nav">
                          <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                              <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#pending">Pending <small class="badge badge-warning">5</small></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#active">Active <small class="badge badge-success">10</small></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#deactive">Deactive <small class="badge badge-danger">8</small></a>
                              </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                              <div class="tab-pane container active" id="pending">
                                 <div class="table-responsive">
                                    <table class="table table-bordered" id="datatable_pending" width="100%">
                                      <thead class="thead-light">
                                        <tr>
                                          <th>Title</th>
                                          <th>Images</th>
                                          <th>Date & Time</th>
                                          
                                          <th>Action</th>
                                          
                                        </tr>
                                      </thead>
                                     
                                      <tbody>
                                        <tr>
                                          <td>Top</td>
                                          <td>
                                             <a  data-fancybox="images" href="img/dummy.jpg" >
                                            <img class="img-fluid" data-src="img/dummy.jpg" src="img/dummy.jpg" alt="" style="width: 60px;">
                                        
                                            </a>
                                      </td>
                                          <td>14-Oct-2020</td>
                                         
                                          <td><a href="" class="btn btn-sm btn-secondary">Edit</a> </td>
                                          
                                        </tr>
                                        
                                      </tbody>
                                    </table>
                                  </div>
                              </div>
                              <div class="tab-pane container fade" id="active">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="datatable_active" width="100%">
                                      <thead class="thead-light">
                                        <tr>
                                          <th>Ads postion</th>
                                          <th>Ads image</th>
                                          <th>Date & Time</th>
                                          
                                          <th>Status</th>
                                          <th>Action</th>
                                          
                                        </tr>
                                      </thead>
                                     
                                      <tbody>
                                        <tr>
                                          <td>Top</td>
                                          <td><a href="img/dummy.jpg"><img src="img/dummy.jpg" style="width: 60px;"></a></td>
                                          <td>14-Oct-2020</td>
                                         
                                          <td><a href="" class="btn btn-sm btn-danger">Deactive</a> </td>
                                          <td><a href="" class="btn btn-sm btn-secondary">Edit</a> </td>
                                        </tr>
                                        
                                      </tbody>
                                    </table>
                                </div>
                              </div>
                              <div class="tab-pane container fade" id="deactive">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="datatable_deactive" width="100%">
                                      <thead class="thead-light">
                                        <tr>
                                          <th>Ads postion</th>
                                          <th>Ads image</th>
                                          <th>Date & Time</th>
                                          
                                          <th>Status</th>
                                          <th>Action</th>
                                          
                                        </tr>
                                      </thead>
                                     
                                      <tbody>
                                        <tr>
                                          <td>Top</td>
                                          <td><a href="img/dummy.jpg"><img src="img/dummy.jpg" style="width: 60px;"></a></td>
                                          <td>14-Oct-2020</td>
                                         
                                          <td><a href="" class="btn btn-sm btn-success">Active</a> | <a href="" class="btn btn-sm btn-danger">Deactive</a> </td>
                                          <td><a href="" class="btn btn-sm btn-secondary">Edit</a> </td>
                                        </tr>
                                        
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

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

  <!-- Footer section -->
  <?php include('includes/footer.php');?>
  <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

   <script>
    CKEDITOR.replace('post_content',{
      height  : '350px',
   });
  
  $('#datetimepicker').datetimepicker();
   
 </script>

</body>

</html>
