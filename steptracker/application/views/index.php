<!-- Main header section-->
<?php include('includes/main-header.php');?>
<style>
  .text-gray-300 {
    color: #eeeef0 !important;
}
.year.active,.days.active {
    background: #28a745 !important;
    border: 1px solid #28a745 !important;
}
.year {
  
    border: none !important;
}
.btn-group {
    float: right;
    border: none !important;
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
                  
                  <!--  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2"><i class="fas fa-calendar fa-sm text-white-50"></i> Calendar</a> -->
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800 distance load">3 km</div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800 steps load" >1102</div>
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
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 calories load">30</div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800 files load">18</div>
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

           
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
               
                <div class="card-header  d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">My Statistics</h6>
                    <div class="filter_btn">
                      <!-- <input type="text" readonly="" name="daterange" id="demo" value="Calendar"> -->
                    </div>
                </div>
               
                <div class="card-body my_stats">
                  <div class="row">
                    <div class="col-sm-3">
                       <div class="row">
                            
                              <div class="col-sm-12">
                                <button onclick='loadReport()' class='btn btn-primary btn-block' style="margin-bottom: 10px;border-radius: 0px;" >TO-DAY</button>
                                 <div class="team_report">
                                    <h3 class='rloading rdistance'>0</h3>
                                    <h6>Total distance (km)</h6>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="team_report col2">
                                    <h3 class='rloading rsteps'>0</h3>
                                    <h6>Total steps </h6>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="team_report col3">
                                    <h3 class='rloading rcalories'>0</h3>
                                    <h6>Calories burn</h6>
                                    
                                 </div>
                              </div>
                            
                           </div>
                    </div>
                    <div class="col-sm-9">
                    	<div class='head'>
                    		Steps & Calories Report
                       <div class="btn-group btn-group-sm mb-2">
                          <button type="button" class="btn btn-primary days" onclick="loadChart('10 Days')">Last 10 Days</button>
                         
                          <button type="button" class="btn btn-primary year"  onclick="loadChart('year')">Year</button>
                        </div> 
                    </div>
                      <div class="">
                        <div id="chart"><div class='loading'>Loading...</div></div>
                      </div>
                    </div>
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
                                        <?php foreach($history as $h){
                                              $kms=number_format(($h->distance/1000),2);
      $steps=round($h->distance*1.3123);
                                          ?>
                                        <tr>
                                          <td><?=date("Y-m-d",strtotime($h->start_time))?></td>
                                          <td><?=$h->app_name?></td>
                                          <td><?=$kms?> km</td>
                                          <td><?=$steps?></td>
                                         
                                         
                                          <td><?=$h->calories?></td>
                                           <td><a href="javascript:void(0);" class='map_model' data-id='<?=$h->id?>'>Activity Location</a></td>
                                          <td>
                                          <?php if($user->goal<$kms){?>
                                          	<span class="badge badge-success">Wow reached</span>
                                          <?php }else{?>
                          <span class="badge badge-danger">Not reached</span>
                                           <?php } ?>
                                           </td>
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

          

        </div>
        

      </div>
     

     

    </div>
   

  </div>
 
 <div class="modal modal_style" id="myModal123">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
               <h5 class="modal-title">
              VSP- HYD</h5>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body map_body">
             
            </div>
            <!-- Modal footer -->
           
         </div>
      </div>
   </div>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



   <!-- Footer section -->
  <?php include('includes/footer.php');?>
 <script type="text/javascript">
   function loadChart(type)
   {
   	$('.year,.days').removeClass('active');
  if(type=='year') $('.year').addClass('active');else $('.days').addClass('active');
       $.ajax({
            type: "POST", //rest Type
            dataType: 'json',           
            url: "<?=base_url('Dashboard/getChartDetails')?>",
            data:{'type':type},
            cache: false,         
            success: function (response) {
              
  var options = {
          series: [ {
          name: 'Steps',
          data: response.steps
        }, {
          name: 'Calories burn',
          data:  response.calories
        }],
          chart: {
          type: 'bar',
          height: 350, toolbar: {
      show: false
    }
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: response.dates,
        },
        /*yaxis: {
          title: {
            text: '$ (thousands)'
          }
        },*/
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val;
            }
          }
        }
        };
       $("#chart").html('');
        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
      
  }
});


   }

loadChart('10 Days');

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

 function loadReport(todate)
   {
     $('.rloading').html('<i class="fa fa-circle-o-notch fa-spin  fa-fw"></i>');
     var inter=setInterval(function(){
          $.ajax({
            type: "POST", //rest Type
            dataType: 'json',           
            url: "<?=base_url('Dashboard/getReport')?>",
            data:{'today':todate},
            cache: false,           
            success: function (response) {
               $('.rdistance').html(response.kms);
               $('.rsteps').html(response.steps);
               $('.rcalories').html(response.calories);
               $('.rspeed').html(response.speed);
               
  }
});
        clearInterval(inter);
     },1000);

   }
loadReport('<?=date("Y-m-d")?>');

$(document).on('click','.map_model',function()
{
    
    id=$(this).data('id');
    $('.map_body').html(' <iframe src="<?=base_url("show_map/")?>'+id+'" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>');
    $('#myModal123').modal('show');

});

 </script>
  <script>
var nowDate = new Date();
 
  today=nowDate.getDate()+'/'+nowDate.getMonth()+'/'+nowDate.getFullYear();

  $('#demo').daterangepicker({

//endDate:today,
    autoUpdateInput: false,
    showDropdowns: true,
     locale: {
          cancelLabel: 'Clear'
      },
    ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
     maxDate: moment().endOf("day")
    
}, function(start, end, label) {
  $('#demo').val('Calendar');
  if(label == 'Today' || label == 'Yesterday'){
    $('#demo').val(start.format('DD-MMM-YYYY'));
  }
  else{
    $('#demo').val(start.format('DD-MMM-YYYY') + ' to ' + end.format('DD-MMM-YYYY'));

  }
  
});

      
    
</script>

</body>


</html>
