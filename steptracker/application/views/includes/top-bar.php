

<nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow ">
   
  <!--  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
   <i class="fa fa-bars"></i>
   </button> -->
   <h5>Steps tracker <span class="caption"> - Get Fit. Do Good.</span></h5>
   
   <ul class="navbar-nav ml-auto">
     
      <li class="nav-item dropdown no-arrow">
         <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        
         <img class="img-profile rounded-circle mr-2" src="<?php if($this->session->profile_pic=='') echo base_url('assets/img/dummy.jpg');else echo base_url().$this->session->profile_pic;?>">
          <span class="  d-lg-inline text-gray-600 small"><?=$this->session->name?></span>
         </a>
       
         <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?=base_url('profile')?>">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
            </a>
            <a class="dropdown-item" href="<?=base_url('change-password')?>">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Change Password
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
            </a>
         </div>
      </li>
   </ul>
</nav>
<div class="menu_sec mb-4">
   <div class="menu" id="myHeader">
      <nav class="navbar navbar-expand-xl bg-primary navbar-dark sticky-navigation">
         <div class="container-section">
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-label="Menu" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                     <a class="nav-link" aria-label="Home" href="<?=base_url()?>">
                      <i class="fas fa-fw fa-tachometer-alt"></i> <span>Dashboard</span>
                     </a>
                  </li>
                   <li class="nav-item">
                     <a class="nav-link" aria-label="Home" href="<?=base_url('add-files')?>">
                        <i class="fas fa-fw fa-file"></i> <span>Add your file</span>
                     </a>
                  </li>
                   <li class="nav-item">
                     <a class="nav-link" aria-label="Home" href="<?=base_url('teams')?>">
                       <i class="fas fa-fw fa-user"></i>
                        <span>Create team</span>
                     </a>
                  </li>
                    <li class="nav-item last_child">
                     <a class="nav-link " aria-label="Home" href="<?=base_url('goal')?>">
                       <i class="fas fa-fw fa-tasks"></i>
                        <span>Pick a goal</span></a>
                  </li>
               </ul>
            </div>
           
         </div>
        
      </nav>
   </div>
</div>

