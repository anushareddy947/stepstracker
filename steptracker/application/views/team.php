

<!-- Main header section-->
<?php include('includes/main-header.php');?>
<body id="page-top">
   <!-- Page Wrapper -->
   <div id="wrapper">
      <!-- Left menu -->
      <?php include('includes/left-menu.php');?>
      <!-- End of Left menu -->
      <div id="content-wrapper" class="d-flex flex-column">
         <div id="content">
            <!-- Topbar -->
            <?php include('includes/top-bar.php');?>
            <!-- End of Topbar -->
            <div class="container-fluid">
               <div class="row forms_inner">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                     <div class="row">
                        <div class="col-sm-8">
                           <h1 class="h3  mb-0  text-gray-800">Team</h1>
                        </div>
                        
                        <div class="col-sm-4 text-right">
                           <button type="button" class="btn btn-success btn-sm mr-2" data-toggle="modal" data-target="#myModal">Create Team</button>
                           <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#join_team">Join Team</button>
                        </div>

                     </div>
                     <hr>

                     
                           <div class="team_page">
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
                    <?php foreach ($teams as $team) { ?>
                      
 <div class="col-sm-3 team_bottom">
                                    <a href="<?=base_url('teams/view/')?><?=$team->id?>">
                                    <div class="team_inner"   style='background: linear-gradient( to bottom, rgba(0,0,0, 0), rgb(0, 0, 0) ),url(<?=base_url()?><?=$team->image?>);'>
                                      
                                          <div class="team_left">
                                             <h4><?=$team->name?></h4>
                                             <h6><?=$team->type?></h6>
                                          </div>
                                           <div class="team_right">
                                            
                                             <h6><?=$team->members?> <i class="fas fa-user"></i></h6>
                                          </div>
                                      
                                    </div></a>
                                 </div>

                   <?php  } ?>

                       
                              </div>
                           </div>
                          
                      
                  </div>
               </div>
              
            </div>
         </div>
      </div>
   </div>
   </div>

   <!-- create team -->
   <div class="modal modal_style" id="myModal">
      <div class="modal-dialog">
         <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
               <h5 class="modal-title">
               Create team</h5>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
             <form class="user" action="<?=base_url('teams/insert')?>" method='post'>
            <!-- Modal body -->
            <div class="modal-body">
              
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="form-group">
                           <input type='hidden' name='user_id' value='<?=$this->session->id?>'>
                           <label for="current_pwd">Team name</label>
                           <input type="text" name='name' class="form-control " id="current_pwd" >
                        </div>
                        <div class="form-group">
                           <label for="current_pwd">Team type</label>
                           <select class="form-control" name='type'>
                              <option>Family</option>
                              <option>Friends</option>
                              <option>Work - Buddies</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="current_pwd">Team description</label>
                           <textarea class="form-control" name='description'></textarea> 
                        </div>
                         
                     </div>
                  </div>
              
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
               <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-primary text-center">Save</button>
               </div>
            </div>
         </div>
          </form>
      </div>
   </div>

   <!-- Search team -->
   <div class="modal modal_style" id="join_team">
      <div class="modal-dialog">
         <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
               <h5 class="modal-title">
               Join team</h5>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
               <form class="user">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="input-group mb-4 mt-4">
                           <input type="text" class="form-control"  placeholder="Search for the team you want to join">
                           <div class="input-group-append">
                              <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
               <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-primary text-center">Add</button>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Scroll to Top Button-->
   <a class="scroll-to-top rounded" href="#page-top">
   <i class="fas fa-angle-up"></i>
   </a>

   <!-- Footer section -->
   <?php include('includes/footer.php');?>
</body>
</html>

