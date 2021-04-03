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
              <h1 class="h3  text-gray-800">Profile</h1>
                <div class="card mb-4 py-3 border-top-primary">
                  <div class="card-body">
                    <form class="user" method='post' action="<?=base_url('Main/updateProfile')?>"  enctype="multipart/form-data">
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
                      <input type='hidden' name='id' value='<?=$profile->id?>'>
                      <div class="row mb-3">
                        <div class="col-sm-3 pro_img">
                          <img src="<?php if($profile->profile_pic=='') echo base_url('assets/img/dummy.jpg');else echo $profile->profile_pic;?>" style="width: 100px;border-radius: 50%">
                        </div>
                        <div class="col-sm-9">
                          <div class="form-group">
                            <label>Upload Image</label>
                            <input type="file" class="form-control" name='profile_pic' >
                          </div>
                        </div>
                      </div>
                        <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>First name</label>
                            <input type="text" class="form-control" name='first_name' value='<?=$profile->first_name?>'  >
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" name='last_name' value='<?=$profile->last_name?>' >
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Email ID</label>
                            <input type="text" class="form-control"  name='email' value='<?=$profile->email?>'>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Mobile number</label>
                            <input type="text" class="form-control"  name='mobile' value='<?=$profile->mobile?>'>
                          </div>
                        </div>
                        
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label>Weight</label>
                            <input type="text" class="form-control" name='weight' value='<?=$profile->weight?>'>
                          </div>
                        </div>
                         <div class="col-sm-3">
                          <div class="form-group">
                            <label>Age</label>
                            <input type="text" class="form-control" name='age' value='<?=$profile->age?>' >
                          </div>
                        </div>
                        <div class="col-sm-6 gender">
                          <label>Gender</label>
                          <br>
                          <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" class="custom-control-input" id="customRadio" name="gender" value="male" <?php if($profile->gender=='male') echo  "checked";?>>
                              <label class="custom-control-label" for="customRadio">Male</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="female" <?php if($profile->gender=='female') echo  "checked";?>>
                              <label class="custom-control-label" for="customRadio2">Female</label>
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
