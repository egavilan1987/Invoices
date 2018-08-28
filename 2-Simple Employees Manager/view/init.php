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
                    <h2><span  class="fa fa-users" aria-hidden="true"></span> 203</h2>
                    <h4>Total Employees</h4>
                  </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
                  <div class="well dash-box">
                    <h2><span  class="fa fa-user" aria-hidden="true"></span> 203</h2>
                    <h4>Total Ative Employees</h4>
                  </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
                  <div class="well dash-box">
                    <h2><span  class="fa fa-user-times" aria-hidden="true"></span> 203</h2>
                    <h4>Total Inative Employees</h4>
                  </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
                  <div class="well dash-box">
                    <h2><span  class="fa fa-building-o" aria-hidden="true"></span> 203</h2>
                    <h4>Total Departments</h4>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>
</html>