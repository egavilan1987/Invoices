<html>
 <head>
  <title>Departments</title>
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
        <li class="breadcrumb-item active">Departments</li>
      </ol>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#departmentModal">Add New Department</button>
      <br>
      <br>
      <!-- DataUsers Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Departments
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="loadDepartmentsTable"></div>
          </div>
        </div>
        <div class="card-footer"> </div>
      </div>
    </div>
  </div>
  <!-- New Department Modal -->
<div class="modal fade" id="departmentModal" tabindex="-1" role="dialog" aria-labelledby="departmentModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Department:</label>
            <input type="text" class="form-control" id="department">
            <div id="department_error_message" style="color:red"></div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="btnSaveDepartment" class="btn btn-primary" data-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>
<!--End New Department Modal -->
<!-- Edit Department Modal -->
<div class="modal fade" id="editDepartmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <input type="text" id="idDepartment" hidden="" name="idDepartment">
            <label for="recipient-name" class="col-form-label">Department:</label>
            <input type="text" id="viewDepartment" name="viewDepartment" class="form-control">
            <div id="edit_department_error_message"></div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="btnSaveEditDepartment" class="btn btn-primary" data-dismiss="modal" >Save Changes</button>
      </div>
    </div>
  </div>
</div>
<!--End Edit Department Modal -->


</body>
</html>


<script type="text/javascript">
  $(document).ready(function(){

    $('#loadDepartmentsTable').load('departments/departmentsTable.php');

    $('#departmentModal').on('hidden.bs.modal', function () {     
      $('#department').val('');

      $("#department_error_message").hide();
      department.style.border = "1px solid #ccc";
    });

    $('#editDepartmentModal').on('hidden.bs.modal', function () {     

      $("#edit_department_error_message").hide();
      viewDepartment.style.border = "1px solid #ccc";

    });


   $("#department").focusout(function() {
      check_department();
    });
   $("#viewDepartment").focusout(function() {
      check_edit_department();
    });

function check_department() {
    
    if( $.trim( $('#department').val() ) == '' ){
      $("#department_error_message").html("Input is blank!");
      $("#department_error_message").show();
      error_department = true;
      //$('#department').addClass('has-error');
      department.style.border = "1px solid red";
      }else{
      $("#department_error_message").hide();
      department.style.border = "1px solid #ccc";
    }
  }
function check_edit_department() {
    
    if( $.trim( $('#viewDepartment').val() ) == '' ){
      $("#edit_department_error_message").html("Input is blank!");
      $("#edit_department_error_message").show();
      error_edit_department = true;
      viewDepartment.style.border = "1px solid red";
      
      }else{
      $("#edit_department_error_message").hide();
      viewDepartment.style.border = "1px solid #ccc";
    }
  }
$('#btnSaveDepartment').click(function(){
        error_department = false;
        
        check_department();
        
        if(error_department == false){
        $.ajax({
          type:"POST",
          data:{department: $("#department").val()},
          url:"../process/departments/addDepartment.php",
          success:function(r){
            if(r==1){
            $('#department').val('');
            $('#loadDepartmentsTable').load('departments/departmentsTable.php');              
            alertify.success("New department successfuly added.");
        }else{
            alertify.error("Could not add new department.");
            }
          }
        });
        }else{
          return false;
        }

    });
      $('#btnSaveEditDepartment').click(function(){
        error_edit_department = false;
        
        check_edit_department();

        if(error_edit_department == false){
        $.ajax({
          type:"POST",
          data:{department: $("#viewDepartment").val(), idDepartment: $("#idDepartment").val()},
          url:"../process/departments/updateDepartment.php",
          success:function(r){
            if(r==1){
              $('#loadDepartmentsTable').load('departments/departmentsTable.php');
              alertify.success("Department successfuly updated.");
            }else{
              alertify.error("Could not update the department");
            }
          }
        });
        }else{
          return false;
        }
      });
  });
function addDepartmentData(idDepartment){
      $.ajax({
        type:"POST",
        data:"idDepartment=" + idDepartment,
        url:"../process/departments/getDepartmentData.php",
        success:function(r){
          data=jQuery.parseJSON(r); 
          $('#idDepartment').val(data['id_department']);
          $('#viewDepartment').val(data['Department']);   
        }
      });
    }
</script>

