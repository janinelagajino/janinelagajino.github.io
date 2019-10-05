
<?php include 'includes/session.php'; ?>
<?php 
  include '../timezone.php'; 
  $today = date('Y-m-d');
  $year = date('Y');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  }
?>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./home.php">
        <div class="sidebar-brand-icon">
            <img src="./logo/2019_04_29_23_15_IMG_0937.JPG" class="rounded-circle" alt="Logo" style="width:40px;">
        </div>
          <div class="sidebar-brand-text mx-3">GSMI</div>
      </a>

      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="./home.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
        </li>

       <!-- Divider -->
       <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Maintenance
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Manage</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage:</h6>

            <a class="collapse-item" href="attendance.php">
            <span>Attendance</span></a>

            
            <a class="collapse-item" href="#">
            <span>Payroll</span></a>

            <a class="collapse-item" href="employee.php">
            <span>Employee Information</span></a>

            <a class="collapse-item" href="user.php">
            <span>User Information</span></a>

            <a class="collapse-item" href="#">
            <span>Leave Information</span></a>

            <a class="collapse-item" href="#">
            <span>SSS</span></a>

            <a class="collapse-item" href="#"><span> PAG-IBIG</span></a>

            <a class="collapse-item" href="#"><span>PHILHEALTH</span></a>
          </div>
        </div>
      </li>

       <!-- Nav Item - Utilities Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Settings</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Administrator Settings:</h6>
            <a class="collapse-item" href=""></a>
            <a class="collapse-item" href=""></a>
            <a class="collapse-item" href=""></a>
            <a class="collapse-item" href=""></a>
          </div>
        </div>
      </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-gradient-success topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Notification
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <!--<div class="icon-circle bg-primary">-->
                      
                    <!--</div>-->
                  </div>
                  <div>
                    <div class="small text-gray-500"></div>
                    <span class="font-weight-bold"></span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <!--<div class="icon-circle bg-success">-->
                      
                    <!--</div>-->
                  </div>
                  <div>
                    <div class="small text-gray-500"></div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <!--<div class="icon-circle bg-warning">-->
                      <!---<i class="fas fa-exclamation-triangle text-white"></i>-->
                    <!--</div>-->
                  </div>
                  <div>
                    <div class="small text-gray-500"></div>
                    
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#"></a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <div class="topbar-divider d-none d-sm-block"></div>

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="mr-2 d-none d-lg-inline text-white-100 medium"></span>
    <img class="img-profile rounded-circle" src="./logo/Profile Image.png">
  </a>
  <div>
  <?php  if (isset($_SESSION['user'])) : ?>
  <?php endif ?>
  </div>
  <!-- Dropdown - User Information -->
  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
    <a class="dropdown-item" href="#">
      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
      Profile
    </a>
    <a class="dropdown-item" href="#">
      <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
      Settings
    </a>
    <a class="dropdown-item" href="#">
      <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
      Activity Log
    </a>
    <div class="dropdown-divider"></div>
    <a href="#" data-toggle="modal" data-target="#logoutModal" style="color: red;" class="dropdown-item">
    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
    Logout</a>
    </a>

  </div>
</li>

</ul>

</nav>
<!-- End of Topbar -->

          <!-- Begin Page Content -->
        
          <div class="container-fluid">
        
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-light">Dashboard</h1>
          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <!-- Content Row -->
        <section class="content">
    <?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='alert alert-danger alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4><i class='icon fa fa-warning'></i> Error!</h4>
            ".$_SESSION['error']."
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4><i class='icon fa fa-check'></i> Success!</h4>
            ".$_SESSION['success']."
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <?php
              $sql = "SELECT * FROM employees";
              $query = $conn->query($sql);

              echo "<h3>".$query->num_rows."</h3>";
            ?>

            <p>Total Employees</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
          <a href="employee.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <?php
              $sql = "SELECT * FROM attendance";
              $query = $conn->query($sql);
              $total = $query->num_rows;

              $sql = "SELECT * FROM attendance WHERE status = 1";
              $query = $conn->query($sql);
              $early = $query->num_rows;
              
              $percentage = ($early/$total)*100;

              echo "<h3>".number_format($percentage, 2)."<sup style='font-size: 20px'>%</sup></h3>";
            ?>
        
            <p>On Time Percentage</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="attendance.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <?php
              $sql = "SELECT * FROM attendance WHERE date = '$today' AND status = 1";
              $query = $conn->query($sql);

              echo "<h3>".$query->num_rows."</h3>"
            ?>
           
            <p>On Time Today</p>
          </div>
          <div class="icon">
            <i class="ion ion-clock"></i>
          </div>
          <a href="attendance.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <?php
              $sql = "SELECT * FROM attendance WHERE date = '$today' AND status = 0";
              $query = $conn->query($sql);

              echo "<h3>".$query->num_rows."</h3>"
            ?>

            <p>Late Today</p>
          </div>
          <div class="icon">
            <i class="ion ion-alert-circled"></i>
          </div>
          <a href="attendance.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Monthly Attendance Report</h3>
            <div class="box-tools pull-right">
              <form class="form-inline">
                <div class="form-group">
                  <label>Select Year: </label>
                  <select class="form-control input-sm" id="select_year">
                    <?php
                      for($i=2015; $i<=2065; $i++){
                        $selected = ($i==$year)?'selected':'';
                        echo "
                          <option value='".$i."' ".$selected.">".$i."</option>
                        ";
                      }
                    ?>
                  </select>
                </div>
              </form>
            </div>
          </div>
          <div class="box-body">
            <div class="chart">
              <br>
              <div id="legend" class="text-center"></div>
              <canvas id="barChart" style="height:350px"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
<!-- ./wrapper -->
      <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    <!-- Footer -->
    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; Galvanizing Specialist Manufacturing 2019 </span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->
  </div>
  <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Are you sure you want to logout?</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.php?logout='1'">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Chart Data -->
<?php
$and = 'AND YEAR(date) = '.$year;
$months = array();
$ontime = array();
$late = array();
for( $m = 1; $m <= 12; $m++ ) {
  $sql = "SELECT * FROM attendance WHERE MONTH(date) = '$m' AND status = 1 $and";
  $oquery = $conn->query($sql);
  array_push($ontime, $oquery->num_rows);

  $sql = "SELECT * FROM attendance WHERE MONTH(date) = '$m' AND status = 0 $and";
  $lquery = $conn->query($sql);
  array_push($late, $lquery->num_rows);

  $num = str_pad( $m, 2, 0, STR_PAD_LEFT );
  $month =  date('M', mktime(0, 0, 0, $m, 1));
  array_push($months, $month);
}

$months = json_encode($months);
$late = json_encode($late);
$ontime = json_encode($ontime);

?>
<!-- End Chart Data -->
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
var barChartCanvas = $('#barChart').get(0).getContext('2d')
var barChart = new Chart(barChartCanvas)
var barChartData = {
  labels  : <?php echo $months; ?>,
  datasets: [
    {
      label               : 'Late',
      fillColor           : 'rgba(210, 214, 222, 1)',
      strokeColor         : 'rgba(210, 214, 222, 1)',
      pointColor          : 'rgba(210, 214, 222, 1)',
      pointStrokeColor    : '#c1c7d1',
      pointHighlightFill  : '#fff',
      pointHighlightStroke: 'rgba(220,220,220,1)',
      data                : <?php echo $late; ?>
    },
    {
      label               : 'Ontime',
      fillColor           : 'rgba(60,141,188,0.9)',
      strokeColor         : 'rgba(60,141,188,0.8)',
      pointColor          : '#3b8bba',
      pointStrokeColor    : 'rgba(60,141,188,1)',
      pointHighlightFill  : '#fff',
      pointHighlightStroke: 'rgba(60,141,188,1)',
      data                : <?php echo $ontime; ?>
    }
  ]
}
barChartData.datasets[1].fillColor   = '#00a65a'
barChartData.datasets[1].strokeColor = '#00a65a'
barChartData.datasets[1].pointColor  = '#00a65a'
var barChartOptions                  = {
  //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
  scaleBeginAtZero        : true,
  //Boolean - Whether grid lines are shown across the chart
  scaleShowGridLines      : true,
  //String - Colour of the grid lines
  scaleGridLineColor      : 'rgba(0,0,0,.05)',
  //Number - Width of the grid lines
  scaleGridLineWidth      : 1,
  //Boolean - Whether to show horizontal lines (except X axis)
  scaleShowHorizontalLines: true,
  //Boolean - Whether to show vertical lines (except Y axis)
  scaleShowVerticalLines  : true,
  //Boolean - If there is a stroke on each bar
  barShowStroke           : true,
  //Number - Pixel width of the bar stroke
  barStrokeWidth          : 2,
  //Number - Spacing between each of the X value sets
  barValueSpacing         : 5,
  //Number - Spacing between data sets within X values
  barDatasetSpacing       : 1,
  //String - A legend template
  legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
  //Boolean - whether to make the chart responsive
  responsive              : true,
  maintainAspectRatio     : true
}

barChartOptions.datasetFill = false
var myChart = barChart.Bar(barChartData, barChartOptions)
document.getElementById('legend').innerHTML = myChart.generateLegend();
});
</script>
<script>
$(function(){
$('#select_year').change(function(){
  window.location.href = 'home.php?year='+$(this).val();
});
});
</script>


</body>
</head>
</html>
