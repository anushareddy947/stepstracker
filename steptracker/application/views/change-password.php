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
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-5 col-xl-5">
              <h1 class="h3  text-gray-800">Change password</h1>
                
                <div class="card mb-4 py-3 border-top-primary">
                  <div class="card-body">
                    <form class="user" action='' method='post'>
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
                          <div class="form-group">
                              <label for="current_pwd">Current password</label>
                              <input type="password" name='cpassword' class="form-control " id="current_pwd" >
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                              <label for="current_pwd">New password</label>
                              <input type="password" name='npassword' class="form-control " id="current_pwd" >
                          </div>
                        </div>  
                        <div class="col-sm-12">
                          <div class="form-group">
                              <label for="current_pwd">Confirm password</label>
                              <input type="password" name='cnpassword' class="form-control " id="current_pwd" >
                          </div>
                        </div>  

                        <div class="col-sm-12 text-center">
                          <button type="submit" class="btn btn-primary text-center">Update</button>
                        </div>
                      </div>
                      
                      
                    </form>
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
