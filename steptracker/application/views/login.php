<!-- Main header section-->
<?php include('includes/main-header.php');?>

<!-- Login page -->
<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-11 col-lg-12 col-md-9 login_form_control">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-4">
                  <div class="text-center">
                    <div class="news_logo">
                      <img src="<?=base_url('assets/img/logo.png')?>" class="img-fluid">
                    </div>
                    <hr>
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user" action='' method='post'>
                    <?php if($this->session->flashdata('error')!=''){?>
                         <div class='alert alert-danger'>
                             <?=$this->session->flashdata('error')?>
                         </div>
                    <?php }?>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" name='email' aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" name='password' placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                  Login</button>
                    
                    
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?=base_url('forgot-password')?>">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?=base_url('register')?>">Create an Account!</a>
                  </div>
                </div>
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
