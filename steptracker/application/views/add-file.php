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

          <!-- Page Heading -->
          

          <!-- Add details -->
          <div class="row forms_inner">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
              <h1 class="h3  mb-0 text-gray-800">Add your file</h1>
             <!--  <p>Why walk alone when you can walk together? Create your own personalised teams.</p> -->

                <div class="card mb-4 py-3 border-top-primary">
                  <div class="card-body">
                    <form class="user" action="<?=base_url('User_files/updateReport')?>" method='post' enctype="multipart/form-data">
                        <?php if($this->session->flashdata('error')!=''){?>
                         <div class='alert alert-danger'>
                             <?=$this->session->flashdata('error')?>
                         </div>
                    <?php }?>
                      <?php if($this->session->flashdata('success')!=''){?>
                         <div class='alert alert-success'>
                             <?=$this->session->flashdata('success')?>
                         </div>
                    <?php }?>
                      <div class="row">
                        <div class="col-sm-12">
                        <!--   <div class="form-group">
                              <label for="current_pwd">Select your app</label>
                               <select class="form-control">
                                <option>Select</option>
                                <option>Google Fit</option>
                                <option>Impact</option>
                               

                              </select>
                          </div> -->
                          
                           <div class="form-group">
                              <label for="current_pwd">Upload file</label>
                              <input type="file" class="form-control" accept="text/tcx" name="tcx_file">
                              <small>(Upload tcx fromats only)</small>
                             
                          </div>
                        </div>
                       

                        <div class="col-sm-12 mt-3">
                          <button type="submit" class="btn btn-primary text-center">Save</button>
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
                <h5 class="text-gray-800">View Files</h5>
                  <div class="card mb-4 py-3 border-top-primary">
                    <div class="card-body table_style">
                      <div class="table_nav">
                          
                           <?php //print_r($files);?>
                           
                                 <div class="table-responsive">
                                    <table class="table table-bordered" id="datatable_pending" width="100%">
                                      <thead class="thead-light">
                                        <tr>
                                          <th>Submitted Date</th>
                                          <th>Activity Time</th>
                                          <th>Activity</th>
                                          <th>App name</th>
                                          <th>File</th>
                                          
                                          
                                          <th>Action</th>
                                          
                                        </tr>
                                      </thead>
                                     
                                      <tbody>
                                        <?php foreach($files as $file){?>
                                           <tr>
                                             <td><?=date('Y-m-d h:iA',strtotime($file->added_on))?></td>
                                             <td><?=date('Y-m-d h:iA',strtotime($file->start_time))?></td>
                                             <td><?=$file->sport?></td>
                                             <td><?=$file->app_name?></td>
                                             <td><a href='<?=$file->file?>' download=""><?=$file->file?></a></td>
                                             <td><a href='' class='btn btn-danger btn-xs' >Delete</a></td>
                                           </tr>

                                        <?php }?>
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

</body>

</html>
