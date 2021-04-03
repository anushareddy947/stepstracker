<!-- Main header section-->
<?php include('includes/main-header.php');?>
<style>
  .text-gray-300 {
    color: #eeeef0 !important;
}
</style>
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

       
        <div class="container-fluid">

           <div class="row">
                <div class="col-sm-8">
                  <h1 class="h3 text-gray-800">Dashboard</h1>


                </div>
                <div class="col-sm-4 text-right dash_icons">
                  
                   <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2"><i class="fas fa-calendar fa-sm text-white-50"></i> Calendar</a>
                     <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-share-alt  fa-sm text-white-50"></i> Share</a>
                </div>
              </div>
         
         
          <div class="row">

            
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-primary text-uppercase mb-1">Total distance (km)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800 load distance">0 km </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-success text-uppercase mb-1">Total steps</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800  load steps">0</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-info text-uppercase mb-1">Calories burn</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800  load calories">0</div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-warning text-uppercase mb-1">Total files</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800  load files">0</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          

          <div class="row">

           
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
               
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">My stats</h6>
                  
                </div>
               
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myBarChart" style="height:230px !important"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
               
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Statistics</h6>
                 
                </div>
               
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="doughnutChart"></canvas>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="row">

           
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
               
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Workout History</h6>
                  
                </div>
               
                <div class="card-body">
                  <div class="view_form table_style">
            
                      <div class="table_nav">
                          
                           
                           
                                 <div class="table-responsive">
                                    <table class="table table-bordered" id="datatable_pending" width="100%">
                                      <thead class="thead-light">
                                        <tr>
                                          <th>Date & Time</th>
                                          <th>App name</th>
                                          <th>Distance </th>
                                          
                                          
                                          <th>Steps</th>
                                           <th>Calories</th>
                                            <th>Location</th>
                                           <th>Goal</th>
                                          
                                        </tr>
                                      </thead>
                                     
                                      <tbody>
                                        <tr>
                                          <td>14-Oct-2020</td>
                                          <td>Google Fit</td>
                                          <td>2 km</td>
                                          <td>2001</td>
                                         
                                         
                                          <td>300</td>
                                          <td>VSP - HYD</td>
                                          <td><button class="btn btn-sm btn-success">Reached</button></td>
                                          
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
        

      </div>
     

     

    </div>
   

  </div>
 

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

   <!-- Footer section -->
  <?php include('includes/footer.php');?>
 <script type="text/javascript">
   function loadStatistics(start_date,end_date)
   {
     $('.load').html('<i class="fa fa-circle-o-notch fa-spin  fa-fw"></i>');
     var inter=setInterval(function(){
          $.ajax({
            type: "POST", //rest Type
            dataType: 'json',           
            url: "<?=base_url('Dashboard/getStatistics')?>",
            data:{'start_date':start_date,'end_date':end_date},
            cache: false,           
            success: function (response) {
               $('.distance').html(response.kms);
               $('.steps').html(response.steps);
               $('.calories').html(response.calories);
               $('.files').html(response.files);
  }
});
        clearInterval(inter);
     },1000);

   }
loadStatistics('12-12-2000','12-12-2021');
 </script>

                       
           

</body>


</html>
