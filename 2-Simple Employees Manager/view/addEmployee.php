<html>
 <head>
  <title>Create New Invoice</title>
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
        <li class="breadcrumb-item">
          <a href="employees.php">Employees</a>
        </li>
        <li class="breadcrumb-item active">New Employee</li>
      </ol>
      <!-- Example DataUsers Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-plus"></i> Add New Employee</div>
        <div class="card-body">
          <div class="container bootstrap snippet">
          <div class="col-sm-12">
          <!---Personal Information-------->              
          <div class="tab-content">
            <div class="tab-pane active" id="personal">
              <form id="frmPersonal">
                <div class="col-md-12">
                  <br>
                  <div class="card border-primary mb-3">
                    <div class="card">
                      <div class="card-header text-white bg-primary">
                          <h5>Personal Information</h5>
                      </div>
                      <div class="card-body">
                        <div id="alert_error_message" class="alert alert-danger collapse" role="alert">
                          <i class="fa fa-exclamation-triangle"></i>
                          <strong>Alert!</strong> Please check in on some of the fields below.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div> 
                        <p class="text-danger"><i>* Required Fields</i></p>
                        <div class="row">
                          <div class="form-group col-md-12">
                            <strong>Full Name <i class="text-danger">*</i></strong>
                            <input type="text" class="form-control" id="fullname" name="fullname" maxlength="50" placeholder="Full Name">
                            <div id="fullname_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>E-mail <i class="text-danger">*</i></strong>
                            <input type="text" class="form-control" id="email" name="email" maxlength="30" placeholder="E-mail">
                            <div id="email_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Local Address <i class="text-danger">*</i></strong>                                
                            <textarea class="form-control" id="address" name="address" maxlength="80" placeholder="Address" rows="2"></textarea>
                            <div id="address_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Date of Birth <i class="text-danger">*</i></strong>
                            <input type="date" class="form-control" id="birth_date" name="birth_date" placeholder="Date of Birth">
                            <div id="birth_date_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Place of Birth </strong>                                
                            <textarea class="form-control" id="birth_place" name="birth_place" maxlength="80 placeholder="Place of Birth" rows="2"></textarea>
                            <div id="birth_place_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Gender <i class="text-danger">*</i></strong><br>
                            <label class="radio-inline"><input type="radio" name="gender" value="Male" checked>Male </label>
                            <label class="radio-inline"><input type="radio" name="gender" value="Female">Female </label>
                            <label class="radio-inline"><input type="radio" name="gender" value="Other">Other</label> 
                            <div id="gender_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Nationality <i class="text-danger">*</i></strong>
                            <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality">
                            <div id="nationality_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Marital Status <i class="text-danger">*</i></strong><br>
                            <select name="status" id="status" class="form-control">
                              <option value="" hidden>Marital Status</option>
                              <option>Single</option>
                              <option>Married</option>
                              <option>Divorced</option>
                            </select>
                            <div id="status_error_message" class="text-danger"></div>
                          </div>
                        </div>
                        <hr>                
                        <div align="center">
                          <button type="button" id="btnCancel" class="btn btn-danger">Cancel</button>
                          <button type="button" id="btnSavePersonal" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          </div>
          </div>
        </div>
     </div>
  </div>
</div>
</body>
<script>
$(function() {
 
   $("#fullname").focusout(function() {
      check_fullname();
    });
   $("#email").focusout(function() {
      check_email();
    }); 
   $("#address").focusout(function() {
      check_address();
    });
   $("#birth_date").focusout(function() {
      check_birth_date();
    });
   $("#birth_place").focusout(function() {
      check_birth_place();
    });
   $("#nationality").focusout(function() {
      check_nationality();
    });
   $("#status").focusout(function() {
      check_status();
    });

    
   function check_fullname() {
        
    var fullname_length = $("#fullname").val().length;
    
    if( $.trim( $('#fullname').val() ) == '' ){
      $("#fullname_error_message").html("Input is blank!");
      $("#fullname_error_message").show();
      error_fullname = true;
      $("#fullname").addClass("is-invalid");
      }else if(fullname_length < 5 || fullname_length > 50) {
      $("#fullname_error_message").html("Should be between 5-30 characters");
      $("#fullname_error_message").show();
      error_fullname = true;
      $("#fullname").addClass("is-invalid");
      }else{
      $("#fullname_error_message").hide();
      $("#fullname").removeClass("is-invalid");
    }
  }
   function check_email() {
    
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    var email_length = $("#email").val().length;
    
    if( $.trim( $('#email').val() ) == '' ){
      $("#email_error_message").html("Input is blank!");
      $("#email_error_message").show();
      error_email = true;
      $("#email").addClass("is-invalid");
      }else if(!(pattern.test($("#email").val()))) {
      $("#email_error_message").html("Invalid email address");
      $("#email_error_message").show();
      error_email = true;
      $("#email").addClass("is-invalid");
      } else {
      $("#email_error_message").hide();
      $("#email").removeClass("is-invalid");
      }  
  }
   function check_address() {
        
    var address_length = $("#address").val().length;
    
    if( $.trim( $('#address').val() ) == '' ){
      $("#address_error_message").html("Input is blank!");
      $("#address_error_message").show();
      error_address = true;
      $("#address").addClass("is-invalid");
      }else if(address_length < 5 || address_length > 80) {
      $("#address_error_message").html("Should be between 5-80 characters");
      $("#address_error_message").show();
      error_address = true;
      $("#address").addClass("is-invalid");
      }else{
      $("#address_error_message").hide();
      $("#address").removeClass("is-invalid");
    }
  }
   function check_birth_date() {     
    
    if( $.trim( $('#birth_date').val() ) == '' ){
      $("#birth_date_error_message").html("Input is blank!");
      $("#birth_date_error_message").show();
      error_birth_date = true;
      $("#birth_date").addClass("is-invalid");
      }else{
      $("#birth_date_error_message").hide();
      $("#birth_date").removeClass("is-invalid");
    }
  }
   function check_birth_place() {
        
    var birth_place_length = $("#birth_place").val().length;
    
    if( $.trim( $('#birth_place').val() ) == '' ){
      $("#birth_place_error_message").html("Input is blank!");
      $("#birth_place_error_message").show();
      error_birth_place == true;
      $("#birth_place").addClass("is-invalid");
      }else if(birth_place_length < 5 || birth_place_length > 80) {
      $("#birth_place_error_message").html("Should be between 5-80 characters");
      $("#birth_place_error_message").show();
      error_birth_place == true;
      $("#birth_place").addClass("is-invalid");
      }else{
      $("#birth_place_error_message").hide();
      $("#birth_place").removeClass("is-invalid");
    }
  }
   function check_nationality() {     
    
    if( $.trim( $('#nationality').val() ) == '' ){
      $("#nationality_error_message").html("Input is blank!");
      $("#nationality_error_message").show();
      error_nationality ==true;
      $("#nationality").addClass("is-invalid");
      }else{
      $("#nationality_error_message").hide();
      $("#nationality").removeClass("is-invalid");
    }
  }
   function check_status() {     
    
    if( $.trim( $('#status').val() ) == '' ){
      $("#status_error_message").html("Input is blank!");
      $("#status_error_message").show();
      error_status = true;
      $("#status").addClass("is-invalid");
      }else{
      $("#status_error_message").hide();
      $("#status").removeClass("is-invalid");
    }
  }

  
      $('#btnSavePersonal').click(function(){
        error_fullname = false;
        error_email = false;
        error_address = false;
        error_birth_date = false;
        error_birth_place = false;
        error_nationality = false;
        error_status = false;

        check_fullname();
        check_email();
        check_address();
        check_birth_date();
        check_birth_place();
        check_nationality();
        check_status();



      if(error_fullname == false && error_email == false && error_address == false && error_birth_date == false && error_birth_place == false && error_nationality == false && error_status == false) {       
          $("#alert_error_message").hide();
          data=$('#frmPersonal').serialize();
          $.ajax({
            type:"POST",
            data:data,
            url:"../process/employees/addEmployee.php",
            success:function(r){
              alert(r);
            if(r==1){            
              //$('#frmPersonal')[0].reset();
              alertify.success("New employee successfuly added!");
          }else{
              alertify.error("Could not add the new employee.");
              }
            }
          });
          return false; 
        }else{

          $("#alert_error_message").show();

          return false; 
        }
    });
      $('#btnCancel').click(function(){
        alertify.confirm('Cancel new employee','Do you want to cancel the new employee?', function(){

          $("#alert_error_message").hide();

          $('#frmPersonal')[0].reset(); 

          $("#fullname_error_message").hide();
          $("#fullname").removeClass("is-invalid");

          $("#email_error_message").hide();
          $("#email").removeClass("is-invalid");

          $("#address_error_message").hide();
          $("#address").removeClass("is-invalid");

          $("#birth_date_error_message").hide();
          $("#birth_date").removeClass("is-invalid");

          $("#birth_place_error_message").hide();
          $("#birth_place").removeClass("is-invalid");
          
          $("#nationality_error_message").hide();
          $("#nationality").removeClass("is-invalid");
          
          $("#status_error_message").hide();
          $("#status").removeClass("is-invalid");


        }, function(){ 
          alertify.success("Operation Canceled!");
        });
    });
});

    $(document).ready(function(){
    $("#alert_error_message").hide();
    $('#characterLeft').text('140 characters left');
    $('#description').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    }); 

    });


$(phoneFormatter);

function verifyAmountInput() {
var amount = document.getElementById("amount");

var invalidChars = [
  "-",
  "+",
  "e",
];

amount.addEventListener("keydown", function(e) {
  if (invalidChars.includes(e.key)) {
    e.preventDefault();
  }
});
};

$(verifyAmountInput);

function verifyTaxInput() {
var tax = document.getElementById("tax");

var invalidChars = [
  "-",
  "+",
  "e",
];

tax.addEventListener("keydown", function(e) {
  if (invalidChars.includes(e.key)) {
    e.preventDefault();
  }
});
};

$(verifyTaxInput);

</script>