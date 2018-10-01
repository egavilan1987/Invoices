<!DOCTYPE html>
<html lang="en">

<head>
  <title>EGDashboard</title>
  <?php require_once "menu.php"; ?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="init.php">EGDashboard</a>
        </li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                  <div class="well dash-box">
                    <h2><span  class="fa fa-users" aria-hidden="true"></span> <b id="totalEmployees"></b></h2>
                    <h4>Total Employees</h4>
                  </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
                  <div class="well dash-box">
                    <h2><span  class="fa fa-user" aria-hidden="true"></span> <b id="totalActive"></b></h2>
                    <h4>Total Active Employees</h4>
                  </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
                  <div class="well dash-box">
                    <h2><span  class="fa fa-user-times" aria-hidden="true"></span> <b id="totalInactive"></b></h2>
                    <h4>Total Inactive Employees</h4>
                  </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
                  <div class="well dash-box">
                    <h2><span  class="fa fa-building-o" aria-hidden="true"></span> <b id="totalDepartments"></b></h2>
                    <h4>Total Departments</h4>
                  </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Employee Cards-->
      <div class="row">
        <div class="col-lg-6">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Employees Created Monthly</div>            
              <div id="lineGraphic"></div>            
            <div class="card-footer small text-muted"></div>
          </div>
        </div>
        <div class="col-lg-6">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Employees Per Department</div>                         
              <div id="pieGraphic"></div>            
            <div class="card-footer small text-muted"></div>
          </div>
        </div>
      </div>
    </div>
</div>    
</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('#lineGraphic').load('graphics/line.php');
    $('#pieGraphic').load('graphics/pie.php');

    addDashboardData();

function addDashboardData(){
      $.ajax({
        url:"../process/employees/dashboardInformation.php",
        success:function(r){
          data=jQuery.parseJSON(r);
          $('#totalEmployees').text(data['totalEmployees']);
          $('#totalActive').text(data['activeEmployees']);
          $('#totalInactive').text(data['inactiveEmployees']);
          $('#totalDepartments').text(data['totalDepartments']);
        }
      });
    }

  });
</script>