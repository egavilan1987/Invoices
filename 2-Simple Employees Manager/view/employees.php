<html>
 <head>
  <title>Employees</title>
  <?php require_once "menu.php"; ?>
 </head>
 
 <body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="init.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Employees</li>
      </ol>
      <a href="addEmployee.php" class="btn btn-success" role="button" aria-pressed="true"><span class="fa fa-plus"></span> Add New Employee</a>
      <a href="http://192.168.0.106:8080/invoices/2-Simple Employees Manager/view/employees/employeesInformation.php" target="_blank" class="btn btn-primary" role="button" aria-pressed="true"><span class="fa fa-print"></span> Print Employees</a>
      <br>
      <br>
      <!-- DataUsers Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Employees
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="loadEmployeesTable"></div>
          </div>
        </div>
        <div class="card-footer"> </div>
      </div>
    </div>
  </div>
      <!-- DataUsers Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Users
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="loadUsersTable"></div>
          </div>
        </div>
        <div class="card-footer"> </div>
      </div>
    </div>
  </div>
  <!-- User Detail Modal -->
  <div class="modal fade bd-example-modal-lg" id="employeeModalLabel" tabindex="-1" role="dialog" aria-labelledby="employeeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="caveat-with-anchors">Employee Information</h5>
          <span style="padding-left:95px;"></span>
            <form action="http://192.168.0.106:8080/invoices/2-Simple Employees Manager/view/updateEmployee.php" method="get">
              <input type="text"  hidden="" id="idEmployee" name="idEmployee">
              <button class="btn btn-secondary btn-xs" type="submit"><i class="fa fa-pencil-square-o"></i> Edit</button>        
            </form><br>
            <form action="http://192.168.0.106:8080/invoices/2-Simple Employees Manager/view/employees/printEmployeeInformation.php" target="_blank" method="get">
              <input  type="text"  hidden="" id="idPrintIdEmployee" name="idPrintIdEmployee">
              <button class="btn btn-secondary btn-xs" type="submit"><i class="fa fa-print"></i> Print</button>
            </form>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <div class="container">
              <center>
                <div id="viewImage"></div>
                  <div class="media-heading">
                    <Strong ><h4>
                      <div id="viewFullname"></div></h4>
                    </Strong>
                  </div>
              </center>
                <div class="row">
                  <div class="col-sm-5 col-xs-6 tital " ><strong>E-mail:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewEmail"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>
                  <div class="col-sm-5 col-xs-6 tital " ><strong>Local Address:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewlocalAddress"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>
                  <div class="col-sm-5 col-xs-6 tital " ><strong>Date of Birth:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewDateBirth"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>
                  <div class="col-sm-5 col-xs-6 tital " ><strong>Place of Birth:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewBirthPlace"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>
                  <div class="col-sm-5 col-xs-6 tital " ><strong>Gender:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewGender"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>
                  <div class="col-sm-5 col-xs-6 tital " ><strong>Marital Status:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewMaritalStatus"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>
                  <div class="col-sm-5 col-xs-6 tital " ><strong>Nationality:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewNationality"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>

                  <div class="col-sm-12 col-xs-6 tital " ><h5><hr>Contact Information</h5></div>


                  <div class="col-sm-5 col-xs-6 tital " ><strong>Permanent Address:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewPermanentAddress"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>
                  <div class="col-sm-5 col-xs-6 tital " ><strong>Telephone:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewTelephone"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>
                  <div class="col-sm-5 col-xs-6 tital " ><strong>Cellphone:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewCellphone"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>


                  <div class="col-sm-12 col-xs-6 tital " ><h5><hr>Emergency Contact Information</h5></div>


                  <div class="col-sm-5 col-xs-6 tital " ><strong>Contact Name:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewContactFullname"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>
                  <div class="col-sm-5 col-xs-6 tital " ><strong>Contact Address:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewContactAddress"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>
                  <div class="col-sm-5 col-xs-6 tital " ><strong>Contact Phone No.:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewContactTelephone"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>
                  <div class="col-sm-5 col-xs-6 tital " ><strong>Contact E-mail:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewContactEmail"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>
                  <div class="col-sm-5 col-xs-6 tital " ><strong>Relation :</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewContactRelation"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>

                  <div class="col-sm-12 col-xs-6 tital " ><h5><hr>Company Details</h5></div>


                  <div class="col-sm-5 col-xs-6 tital " ><strong>Employee id:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewEmployeeId"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>
                  <div class="col-sm-5 col-xs-6 tital " ><strong>Department:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewDeparment"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>
                  <div class="col-sm-5 col-xs-6 tital " ><strong>Salary:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewSalary"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>
                  <div class="col-sm-5 col-xs-6 tital " ><strong>Date of Hired:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewHiredDay"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>
                  <div class="col-sm-5 col-xs-6 tital " ><strong>Comments:</strong></div><div class="col-sm-7 col-xs-6 "><div id="viewComments"></div></div>
                       <div class="clearfix"></div>
                  <div class="bot-border"></div>
                </div>
            </div>                   
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End User Detail Modal -->
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
      $('#loadEmployeesTable').load('employees/employeesTable.php');
    });

function addEmployeeData(idEmployee){
      $.ajax({
        type:"POST",
        data:"idEmployee=" + idEmployee,
        url:"../process/employees/getEmployeeData.php",
        success:function(r){
          //alert(r);
          data=jQuery.parseJSON(r); 
          $('#idEmployee').val(data['id_employee']);
          $('#idPrintIdEmployee').val(data['id_employee']);
          $('#viewEmployeeId').text(data['id_employee']);

          $('#viewImage').prepend('<img class="img-thumbnail" id="imgp" src="' + data['image'] + '"  width="140" height="140"/>');
          $('#viewFullname').text(data['fullName']);
          $('#viewEmail').text(data['email']);
          $('#viewlocalAddress').text(data['localAddess']);
          $('#viewDateBirth').text(data['dateBirth']);
          $('#viewBirthPlace').text(data['birthPlace']);
          $('#viewGender').text(data['gender']);
          $('#viewMaritalStatus').text(data['maritalStatus']);
          $('#viewNationality').text(data['nationality']);
          
          $('#viewPermanentAddress').text(data['permanentAddress']);
          $('#viewTelephone').text(data['telephone']);
          $('#viewCellphone').text(data['cellphone']);

          $('#viewContactFullname').text(data['contactFullname']);
          $('#viewContactAddress').text(data['contactAddress']);
          $('#viewContactTelephone').text(data['contactTelephone']);
          $('#viewContactEmail').text(data['contactEmail']);
          $('#viewContactRelation').text(data['contactRelation']);

          $('#viewDeparment').text(data['department']);
          $('#viewSalary').text(data['salary']);
          $('#viewStatus').text(data['status']);
          $('#viewComments').text(data['comments']);
          $('#viewHiredDay').text(data['hiredDay']); 
                
          $('#viewLastUpdate').text(data['updated']);
          $('#viewCreated').text(data['created']);    
        }
      });
    }

function deleteData(idEmployee){
      alertify.confirm('Delete Registered Employee','Do you want to delete the Employee?', function(){ 
        $.ajax({
          type:"POST",
          data:"idEmployee=" + idEmployee,
          url:"../process/employees/deleteEmployee.php",
          success:function(r){
            if(r==1){
              $('#loadEmployeesTable').load('employees/employeesTable.php');
              alertify.success("Employee successfuly deleted!");
            }else{
              alertify.error("Employee could not be deleled.");
            }
          }
        });
      }, function(){ 
        alertify.error('Canceled!')
      });
    }

  </script>


<script type="text/javascript">
  $(document).ready(function(){


    $('#employeeModalLabel').on('hidden.bs.modal', function () {

     
     $("#viewImage").empty();
});

    
  });
</script>

