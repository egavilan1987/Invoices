<?php
    date_default_timezone_set('US/Eastern');
    $currentdate = date("m/d/Y");
    $currentTime= date("h:i:s");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- datatable plugins-->
  <link rel="stylesheet" type="text/css" href="../vendor/datatable/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../vendor/datatable/dataTables.bootstrap4.min.css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/dropdown-menu.css">
  <!-- Alertify-->
  <link rel="stylesheet" type="text/css" href="../vendor/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="../vendor/alertifyjs/css/themes/default.css">
  <!-- Select 2-->
  <link rel="stylesheet" type="text/css" href="../vendor/select2/css/select2.css">
  <!-- Tab Icon-->
  <link rel="icon" href="../files/EGD.JPG">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top" bgcolor="#349" text="white" onload="startTime()">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="init.php">EGDashboard</a> 
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="init.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link" href="employees.php">
            <i class="fa fa-table"></i>
            <span class="nav-link-text">Employees</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link" href="addEmployee.php">
            <i class="fa fa-plus"></i>
            <span class="nav-link-text">Add New Employee</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link" href="departments.php">
            <i class="fa fa-building-o"></i>
            <span class="nav-link-text">Departments</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">    
        <span style="color:red"><?php echo " ".$currentdate."&nbsp;&nbsp;" ?></span></p><span style="color:red" id="time"></span>            
      </ul>
    </div>
  </nav>
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © EGDashboard 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../js/sb-admin-charts.min.js"></script>
    <script src="../js/functions.js"></script>
    <!-- Alertify-->
    <script src="../vendor/alertifyjs/alertify.js"></script>
    <!-- Datatable plugins-->
    <script src="../vendor/datatable/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatable/dataTables.bootstrap4.min.js"></script>
    <!-- Select 2-->
    <script src="../vendor/select2/js/select2.js"></script>
  </div>
</body>
</html>
<script type="text/javascript">
  function startTime()        {
    var d=new Date();
    var h=d.getHours();
    var m=d.getMinutes();
    var s=d.getSeconds();

    document.getElementById("time").innerHTML=h+":"+m+":"+s;
    setTimeout('startTime()',1000);
        }
</script>


