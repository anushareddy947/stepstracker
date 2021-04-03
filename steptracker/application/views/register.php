<!-- Main header section-->
<?php include('includes/main-header.php');?>

<!-- Register page -->
<body class="bg-gradient-primary">

  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 login_form_control">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-6">
            <div class="p-4">
              <div class="text-center">
                <div class="news_logo">
                      <img src="<?=base_url('assets/img/logo.png')?>" class="img-fluid">
                    </div>
                    <hr>
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="<?=base_url('Main/addUser')?>" method='post'>
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
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name='first_name' placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" name='last_name' placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" name='email' placeholder="Email ID">
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" name='mobile' id="" placeholder="Mobile Number">
                </div>
              </div>
               <div class="form-group row">
                  
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="txt" class="form-control form-control-user" id="" placeholder="Weight" name='weight'>
                </div>
                <div class="col-sm-2 mb-3 mb-sm-0">
                  <input type="text" name='age' class="form-control form-control-user" id="" placeholder="Age">
                </div>
                <div class="col-sm-6 gender">
                  <label>Gender</label>
                  <br>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="customRadio" name="gender" value="male" checked="">
                      <label class="custom-control-label" for="customRadio">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="female">
                      <label class="custom-control-label" for="customRadio2">Female</label>
                  </div>

                </div>
              </div>
              
             
             <input type="hidden" name='status' value='1'>
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="password" name='password' class="form-control form-control-user" id="exampleInputPassword" placeholder="Set your Password">
                  </div>
                  
                 
                </div> 
                <div class="form-group row">
                   <div class="col-sm-12 mb-3 mb-sm-0">
                  <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck" name="">
    <label class="custom-control-label" for="customCheck">I agree to the  <a href="#" target="_blank">Tearms and Conditions</a></label>
  </div></div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account</button> 
               
               
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?=base_url('forgot-password')?>">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?=base_url('login')?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer section -->
  <?php include('includes/footer.php');?>

</body>

</html>
