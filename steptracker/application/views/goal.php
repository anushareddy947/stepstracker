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
              <h1 class="h3  mb-0 text-gray-800">Pick a goal</h1>
              <p>The new goal will reflect from tomorrow if your goal is already achieved.</p>
                <div class="card mb-4 py-3 border-top-primary">
                  <div class="card-body">
                    <form class="user" action="" method="post"> 
                         <?php if($this->session->flashdata('success')!=''){?>
                         <div class='alert alert-success'>
                             <?=$this->session->flashdata('success')?>
                         </div>
                    <?php }?>
                      <div class="row">
                        <!-- <div class="col-sm-12">
                          <div class="form-group">
                              <label for="current_pwd">Weight</label>
                              <input type="password" class="form-control " id="current_pwd" >
                          </div>
                        </div> -->
                        <div class="col-sm-12 set_goal">
                          <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input" id="customRadio1" name="goal"  value='1' <?php if($user->goal==1) echo 'checked'?>>
                            <label class="custom-control-label" for="customRadio1">Causal </label><span class="goal_day">1 km / day</span>
                          </div>
                          <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input" id="customRadio2" name="goal"  value='3' <?php if($user->goal==3) echo 'checked'?>>
                            <label class="custom-control-label" for="customRadio2">Regular </label><span class="goal_day">3 km / day</span>
                          </div>
                           <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input" id="customRadio3" name="goal"  value='5' <?php if($user->goal==5) echo 'checked'?>>
                            <label class="custom-control-label" for="customRadio3">Serious </label><span class="goal_day">5 km / day</span>
                          </div>
                           <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input" id="customRadio4" name="goal"  value='7' <?php if($user->goal==7) echo 'checked'?>>
                            <label class="custom-control-label" for="customRadio4">Crazy </label><span class="goal_day">7 km / day</span>
                          </div>
                           <div class="custom-control custom-radio ">
                            <input type="radio" class="custom-control-input" id="customRadio5" name="goal" value='10' <?php if($user->goal==10) echo 'checked'?>>
                            <label class="custom-control-label" for="customRadio5">Insane </label><span class="goal_day">10 km / day</span>
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
