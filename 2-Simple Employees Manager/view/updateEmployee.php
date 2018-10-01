  <?php require_once "menu.php"; 
  require_once "../classes/connection.php";
    $idEmployee = $_GET['idEmployee'];
    ?>
<html>
 <head>
  <title>Update Employee Information</title>
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
        <i class="fa fa-plus"></i> Update Employee Information</div>
        <div class="card-body">
          <div class="container bootstrap snippet">
          <div class="row">
          <div class="col-sm-3">
            <form align="center" id="frmEditImage">
              <div id="viewImage"></div>
              <div class="avatar-upload">
                <input type="text" hidden="" id="idEmployeeImage" name="idEmployeeImage">
                <input type="text" hidden="" id="idUserImage" name="idUserImage">
                <!-- <?php $_SESSION['imagePath']="../files/EGD.jpg"; ?>-->
                <br>
                <input type="file" id="image" name="image">
                <div>
                  <br>
                  <button type="button" id="btnSaveImage" class="btn btn-primary">Save  new profile image</button>
                </div>                                         
              </div> 
              </form><br>
            </div>
          <div class="col-sm-8">
          <ul class="nav nav-tabs">
            <li><a class="nav-item nav-link active" data-toggle="tab" href="#personal">Personal Inform</a></li>
            <li><a class="nav-item nav-link" data-toggle="tab" href="#contact">Contact Information</a></li>
            <li><a class="nav-item nav-link"  data-toggle="tab" href="#emergency">Emergency Information</a></li>
            <li><a class="nav-item nav-link" data-toggle="tab" href="#professional">Professional Information</a></li>
          </ul>
<!--1-Personal Information-------->              
          <div class="tab-content">
            <div class="tab-pane active" id="personal">
              <form id="frmUpdatePersonal">
                <div class="col-md-12">
                  <br>
                  <div class="card border-primary">
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
                        <p class="text-danger"><i>* Required</i></p>
                        <div class="row">
                          <input type="text" hidden="" id="idEmployee" name="idEmployee">
                          <div class="form-group col-md-12">
                            <strong>Full Name <i class="text-danger">*</i></strong> 
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" maxlength="50">
                            <div id="fullname_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>E-mail <i class="text-danger">*</i></strong> 
                            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                            <div id="email_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Address <i class="text-danger">*</i></strong>                             
                            <textarea class="form-control" id="address" name="address" placeholder="Address" rows="2" maxlength="80"></textarea>
                            <div id="address_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Date of Birth <i class="text-danger">*</i></strong> 
                            <input type="date" class="form-control" id="birth_date" name="birth_date" placeholder="Date of Birth">
                            <div id="birth_date_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Place of Birth <i class="text-danger">*</i></strong>                                
                            <textarea class="form-control" id="birth_address" name="birth_address" placeholder="Place of Birth" rows="2" maxlength="80"></textarea>
                            <div id="birth_address_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Gender <i class="text-danger">*</i></strong> <br>
                            <label class="radio-inline"><input type="radio" id = "gender1" name="gender" value="Male">Male </label>
                            <label class="radio-inline"><input type="radio" id="gender2" name="gender" value="Female">Female </label>
                            <label class="radio-inline"><input type="radio" id = "gender3" name="gender" value="Other">Other</label> 
                            <div id="gender_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Nationality <i class="text-danger">*</i></strong> 
                            <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality">
                            <div id="nationality_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Marital Status <i class="text-danger">*</i></strong> <br>
                            <select id="marital_status" name="marital_status" class="form-control">
                              <option value="" hidden>Marital Status</option>
                              <option>Single</option>
                              <option>Married</option>
                              <option>Divorced</option>
                            </select>
                            <div id="role_error_message" class="text-danger"></div>
                          </div>
                        </div>
                        <hr>                
                        <div align="center">
                          <button type="button" id="btnCancelPersonal" class="btn btn-danger">Cancel</button>
                          <button type="button" id="btnSavePersonal" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                  </div>
                </div>
              </form>
            </div>
<!--2-Contact Information-------->
            <div class="tab-pane" id="contact">
              <form id="frmContact">
                <div class="col-md-12">
                  <br>
                  <div class="card border-primary">
                      <div class="card-header text-white bg-primary">
                          <h5>Contact Information</h5>
                      </div>
                        <div class="card-body">
                          <div id="alert_error_message_contact" class="alert alert-danger collapse" role="alert">
                          <i class="fa fa-exclamation-triangle"></i>
                          <strong>Alert!</strong> Please check in on some of the fields below.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div> 
                          <p class="text-danger"><i>* Required</i></p>
                        <div class="row"> 
                          <input type="text" hidden="" id="idEmployeeContact" name="idEmployeeContact">
                          <div class="form-group col-md-12">
                            <strong>Permanent Address <i class="text-danger">*</i></strong>
                            <textarea class="form-control" id="permanent_address" name="permanent_address" placeholder="Permanent Address" rows="2" maxlength="80"></textarea>
                            <div id="permanent_address_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Home Phone</strong>
                            <input type="text" class="form-control phone" id="home_phone" name="home_phone" maxlength="10">
                            <div id="home_phone_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Mobile Phone <i class="text-danger">*</i></strong>
                            <input type="text" class="form-control phone" id="mobile_phone" name="mobile_phone" maxlength="10">
                            <div id="mobile_error_message" class="text-danger"></div>
                          </div>                         
                        </div>
                        <hr>                
                        <div align="center">
                          <button type="button" id="btnCancelContact" class="btn btn-danger">Cancel</button>
                          <button type="button" id="btnSaveContac" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                  </div>
                </div>
              </form>
             </div>
<!--3-Emergency Contact Information-------->
             <div class="tab-pane" id="emergency">
              <form id="frmEmergency">
                <div class="col-md-12">
                  <br>
                  <div class="card border-primary">
                      <div class="card-header text-white bg-primary">
                          <h5>Emergency Contact Information</h5>
                      </div>
                        <div class="card-body">
                        <div id="alert_error_message_emergency" class="alert alert-danger collapse" role="alert">
                          <i class="fa fa-exclamation-triangle"></i>
                          <strong>Alert!</strong> Please check in on some of the fields below.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                          <p class="text-danger"><i>* Required</i></p>
                        <div class="row">
                          <input type="text" hidden="" id="idEmployeeEmergency" name="idEmployeeEmergency"> 
                          <div class="form-group col-md-12">
                            <strong>Contact Name <i class="text-danger">*</i></strong>
                            <input type="text" class="form-control" id="contactName" name="contactName" placeholder="Contact Name" maxlength="50">
                            <div id="contact_name_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Contact Address <i class="text-danger">*</i></strong>
                            <textarea type="text" class="form-control" id="contact_address" name="contact_address" placeholder="Contact Address" rows="2" maxlength="80"></textarea>
                            <div id="contact_address_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Contact Phone No. <i class="text-danger">*</i></strong>
                            <input type="text" class="form-control phone" id="contactPhone" name="contactPhone" placeholder="Contact Phone No." maxlength="10">
                            <div id="contact_phone_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Contact E-mail</strong>
                            <input type="text" class="form-control" id="contactEmail" name="contactEmail" placeholder="E-mail" maxlength="50">
                            <div id="contact_email_error_message" class="text-danger"></div>
                          </div> 
                          <div class="form-group col-md-12">
                            <strong>Relation <i class="text-danger">*</i></strong>
                            <textarea type="text" class="form-control" id="relation" name="relation" placeholder="Relation" rows="2" maxlength="100"></textarea>
                            <div id="contact_relation_error_message" class="text-danger"></div>
                          </div>                          
                        </div>
                        <hr>                
                        <div align="center">
                          <button type="button" id="btnCancelEmergency" class="btn btn-danger">Cancel</button>
                          <button type="button" id="btnSaveEmergency" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                  </div>
                </div>
              </form>
            </div>
<!--4-Professional Information-------->
              <div class="tab-pane" id="professional">
              <form id="frmCompany">
                <div class="col-md-12">
                  <br>
                  <div class="card border-primary">
                      <div class="card-header text-white bg-primary">
                          <h5>Company Details</h5>
                      </div>
                        <div class="card-body">
                          <div id="alert_error_message_company" class="alert alert-danger collapse" role="alert">
                          <i class="fa fa-exclamation-triangle"></i>
                          <strong>Alert!</strong> Please check in on some of the fields below.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                          <p class="text-danger"><i>* Required</i></p>
                        <div class="row">
                          <input type="text" hidden="" id="idEmployeeCompany" name="idEmployeeCompany">
                          <input type="text" hidden="" id="idDepartment" name="idDepartment">
                        <div class="form-group col-md-12">
                          <strong>Department </strong><br> 
                          <input type="text" class="form-control" id="department" name="department" placeholder="Department" readonly>
                          

                          <select id="addDepartment" name="addDepartment"  style="width: 100%" class="form-control col-md-12 selectpicker" >
                            <option value="" hidden="">Select State</option>              
                            <?php                            
                            $c=new Connect();
                            $connection=$c->connection();

                            $sql="SELECT id_department,
                                         name_department 
                                    FROM departments";
                            $result=mysqli_query($connection,$sql);
                            while ($department=mysqli_fetch_row($result)):
                              ?>
                              <option value="<?php echo $department[0] ?>"><?php echo $department[1] ?></option>
                            <?php endwhile; ?>
                          </select>
                        </div>

                          <div class="form-group col-md-12">
                            <strong>Salary <i class="text-danger">*</i></strong>
                            <input type="number" class="form-control" id="salary" name="salary" placeholder="Salary">
                            <div id="salary_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Date of Hired <i class="text-danger">*</i></strong>
                            <input type="date" class="form-control" id="hired_date" name="hired_date" placeholder="Date of Hired">
                            <div id="hired_date_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Status <i class="text-danger">*</i></strong>
                            <select id="employee_status" name="employee_status" class="form-control">
                              <option value="" hidden>Status</option>
                              <option>Active</option>
                              <option>Inactive</option>
                            </select>
                            <div id="role_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Comment</strong>
                            <textarea class="form-control" id="comment" name="comment" placeholder="Comment" maxlength="200" rows="7"></textarea>
                            <div id="comment_error_message" class="text-danger"></div>
                            <p id="left"></p>
                          </div>                      
                        </div>
                        <hr>                
                        <div align="center">
                          <button type="button" id="btnCancelCompany" class="btn btn-danger">Cancel</button>
                          <button type="button" id="btnSaveCompany" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                  </div>
                </div>
              </form>
              </div>
              </div><!--/tab-pane-->
          </div><!--/tab-content-->
        </div><!--/col-9-->
    </div><!--/row-->
    </div>
  </div>
</div>


</div>
</body>
<script>
$(function() {
//Check personal information inputs 
   $("#fullname").focusout(function() {
      check_fullname();
    });
   $("#email").focusout(function() {
      check_email();
    }); 
   $("#birth_address").focusout(function() {
      check_birth_address();
    });
   $("#address").focusout(function() {
      check_address();
    });
   $("#birth_date").focusout(function() {
      check_birth_date();
    });
   $("#birth_address").focusout(function() {
      check_birth_address();
    });
   $("#nationality").focusout(function() {
      check_nationality();
    });
   $("#status").focusout(function() {
      check_status();
    });
//Check contact information inputs
   $("#permanent_address").focusout(function() {
      check_permanent_address();
    });

   $("#home_phone").focusout(function() {
      check_home_phone();
    });

   $("#mobile_phone").focusout(function() {
      check_mobile_phone(); 
    });
//check emergency information inputs
   $("#contactName").focusout(function() {
      check_contact_name();
    });
   $("#contact_address").focusout(function() { 
      check_contact_address(); 
    });
   $("#contactPhone").focusout(function() {
      check_contact_phone();
    });
   $("#contactEmail").focusout(function() { 
      check_contact_email();
    });
   $("#relation").focusout(function() {
      check_relation();
    });
//check company details inputs
   $("#department").focusout(function() {
      check_department();
    });
   $("#salary").focusout(function() {
      check_salary();
    });
   $("#hired_date").focusout(function() {
      check_hired_date();
    });
   $("#comment").focusout(function() {
      check_comment();
    });
// Check personal inoformation inputs before updating employee information.    
   function check_fullname() {
        
    var fullname_length = $("#fullname").val().length;
    
    if( $.trim( $('#fullname').val() ) == '' ){
      $("#fullname_error_message").html("Input is blank!");
      $("#fullname_error_message").show();
      error_fullname = true;
      $("#fullname").addClass("is-invalid");
      }else if(fullname_length < 5 || fullname_length > 50) {
      $("#fullname_error_message").html("Should be between 5-50 characters");
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
   function check_birth_address() {
        
    var address_length = $("#birth_address").val().length;
    
    if( $.trim( $('#birth_address').val() ) == '' ){
      $("#birth_address_error_message").html("Input is blank!");
      $("#birth_address_error_message").show();
      error_birth_address = true;
      $("#birth_address").addClass("is-invalid");
      }else if(address_length < 5 || address_length > 80) {
      $("#birth_address_error_message").html("Should be between 5-80 characters");
      $("#birth_address_error_message").show();
      error_birth_address = true;
      $("#birth_address").addClass("is-invalid");
      }else{
      $("#birth_address_error_message").hide();
      $("#birth_address").removeClass("is-invalid");
    }
  }
   function check_nationality() {     
    
    if( $.trim( $('#nationality').val() ) == '' ){
      $("#nationality_error_message").html("Input is blank!");
      $("#nationality_error_message").show();
      error_nationality = true;
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
//Check contact information inputs before updating information

function check_permanent_address() {
        
    var permanet_address_length = $("#permanent_address").val().length;
    
    if( $.trim( $('#permanent_address').val() ) == '' ){
      $("#permanent_address_error_message").html("Input is blank!");
      $("#permanent_address_error_message").show();
      error_permanent_address = true;
      $("#permanent_address").addClass("is-invalid");
      }else if(permanet_address_length < 5 || permanet_address_length > 80) {
      $("#permanent_address_error_message").html("Should be between 5-80 characters");
      $("#permanent_address_error_message").show();
      error_permanent_address = true;
      $("#permanent_address").addClass("is-invalid");
      }else{
      $("#permanent_address_error_message").hide();
      $("#permanent_address").removeClass("is-invalid");
    }
  }
  
   function check_home_phone() {
        
    var home_phone_length = $("#home_phone").val().length;
    
    if( $.trim( $('#home_phone').val() ) == '' ){
      $("#home_phone_error_message").hide();
      $("#home_phone").removeClass("is-invalid");
      }else if(home_phone_length < 7 || home_phone_length > 80) {
      $("#home_phone_error_message").html("Should be 7 or 10 characters");
      $("#home_phone_error_message").show();
      error_home_phone = true;
      $("#home_phone").addClass("is-invalid");
      }else{
      $("#home_phone_error_message").hide();
      $("#home_phone").removeClass("is-invalid");
    }
  }
     function check_mobile_phone() {
        
    var mobile_phone_length = $("#mobile_phone").val().length;
    
    if( $.trim( $('#mobile_phone').val() ) == '' ){
      $("#mobile_error_message").html("Input is blank!");
      $("#mobile_error_message").show();
      error_mobile_phone = true;
      $("#mobile_phone").addClass("is-invalid");
      }else if(mobile_phone_length < 7 || mobile_phone_length > 80) {
      $("#mobile_error_message").html("Should be between 7-10 characters");
      $("#mobile_error_message").show();
      error_mobile_phone = true;
      $("#mobile_phone").addClass("is-invalid");
      }else{
      $("#mobile_error_message").hide();
      $("#mobile_phone").removeClass("is-invalid");
    }
  }
//Check emergency information inputs before updating information
   function check_contact_name() {
        
    var fullname_length = $("#contactName").val().length;
    
    if( $.trim( $('#contactName').val() ) == '' ){
      $("#contact_name_error_message").html("Input is blank!");
      $("#contact_name_error_message").show();
      error_contact_name = true;
      $("#contactName").addClass("is-invalid");
      }else if(fullname_length < 5 || fullname_length > 50) {
      $("#contact_name_error_message").html("Should be between 5-50 characters");
      $("#contact_name_error_message").show();
      error_contact_name = true;
      $("#contactName").addClass("is-invalid");
      }else{
      $("#contact_name_error_message").hide();
      $("#contactName").removeClass("is-invalid");
    }
  }
   function check_contact_address() { 
        
    var contact_address_length = $("#contact_address").val().length;
    
    if( $.trim( $('#contact_address').val() ) == '' ){
      $("#contact_address_error_message").html("Input is blank!");
      $("#contact_address_error_message").show();
      error_contact_address = true;
      $("#contact_address").addClass("is-invalid");
      }else if(contact_address_length < 5 || contact_address_length > 80) {
      $("#contact_address_error_message").html("Should be between 5-80 characters");
      $("#contact_address_error_message").show();
      error_contact_address = true;
      $("#contact_address").addClass("is-invalid");
      }else{
      $("#contact_address_error_message").hide();
      $("#contact_address").removeClass("is-invalid");
    }
  } 
     function check_contact_phone() { 
        
    var contact_phone_length = $("#contactPhone").val().length;
    
    if( $.trim( $('#contactPhone').val() ) == '' ){
      $("#contact_phone_error_message").html("Input is blank!");
      $("#contact_phone_error_message").show();
      error_contact_phone = true;
      $("#contactPhone").addClass("is-invalid");
      }else if(contact_phone_length < 7 || contact_phone_length > 80) {
      $("#contact_phone_error_message").html("Should be between 7-10 characters");
      $("#contact_phone_error_message").show();
      error_contact_phone = true;
      $("#contactPhone").addClass("is-invalid");
      }else{
      $("#contact_phone_error_message").hide();
      $("#contactPhone").removeClass("is-invalid");
    }
  }

     function check_contact_email() {
    
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    var contact_email_length = $("#contactEmail").val().length;
    
    if( $.trim( $('#contactEmail').val() ) == '' ){
      $("#contact_email_error_message").hide();
      $("#contactEmail").removeClass("is-invalid");
      }else if(!(pattern.test($("#contactEmail").val()))) {
      $("#contact_email_error_message").html("Invalid email address");
      $("#contact_email_error_message").show();
      error_contact_email = true;
      $("#contactEmail").addClass("is-invalid");
      } else {
      $("#contact_email_error_message").hide();
      $("#contactEmail").removeClass("is-invalid");
      }  
  }

   function check_relation() {
        
    var relation_length = $("#relation").val().length;
    
    if( $.trim( $('#relation').val() ) == '' ){
      $("#contact_relation_error_message").html("Input is blank!");
      $("#contact_relation_error_message").show();
      error_relation = true;
      $("#relation").addClass("is-invalid");
      }else if(relation_length < 5 || relation_length > 80) {
      $("#contact_relation_error_message").html("Should be between 5-80 characters");
      $("#contact_relation_error_message").show();
      error_relation = true;
      $("#relation").addClass("is-invalid");
      }else{
      $("#contact_relation_error_message").hide();
      $("#relation").removeClass("is-invalid");
    }
  } 
//Check company details information inputs before updating information
   function check_department() {     
    
    if( $.trim( $('#department').val() ) == '' ){
      $("#department_error_message").html("Input is blank!");
      $("#department_error_message").show();
      error_department = true;
      $("#department").addClass("is-invalid");
      }else{
      $("#department_error_message").hide();
      $("#department").removeClass("is-invalid");
    }
  }
   function check_salary() {     
    
    if( $.trim( $('#salary').val() ) == '' ){
      $("#salary_error_message").html("Input is blank!");
      $("#salary_error_message").show();
      error_salary = true;
      $("#salary").addClass("is-invalid");
      }else{
      $("#salary_error_message").hide();
      $("#salary").removeClass("is-invalid");
    }
  } 

   function check_hired_date() {     
    
    if( $.trim( $('#hired_date').val() ) == '' ){
      $("#hired_date_error_message").html("Input is blank!");
      $("#hired_date_error_message").show();
      error_hired_date = true;
      $("#hired_date").addClass("is-invalid");
      }else{
      $("#hired_date_error_message").hide();
      $("#hired_date").removeClass("is-invalid"); 
    }
  }
   function check_comment() {
        
    var comment_length = $("#comment").val().length;
    
    if( $.trim( $('#comment').val() ) == '' ){
      $("#comment_error_message").hide();
      $("#comment").removeClass("is-invalid");
      }else if(comment_length < 5 || comment_length > 200) {
      $("#comment_error_message").html("Should be between 5-200 characters");
      $("#comment_error_message").show();
      error_comment = true;
      $("#comment").addClass("is-invalid");
      }else{
      $("#comment_error_message").hide();
      $("#comment").removeClass("is-invalid");
    }
  } 
  
      $('#btnSavePersonal').click(function(){
        error_fullname = false;
        error_email = false;
        error_address = false;
        error_birth_date = false;
        error_birth_address = false;
        error_nationality = false;
        error_status = false;

        check_fullname();
        check_email();
        check_address();
        check_birth_date();
        check_birth_address();
        check_nationality();
        check_status();


      if(error_fullname == false && error_email == false && error_address == false && error_birth_address == false  && error_birth_date == false && error_nationality == false) {       
          $("#alert_error_message").hide();
          data=$('#frmUpdatePersonal').serialize();
          $.ajax({
            type:"POST",
            data:data,
            url:"../process/employees/updateEmployee.php",
            success:function(r){
            if(r==1){            
              alertify.success("Employee information successfuly updated!");
          }else{
              alertify.error("Could not update employee information.");
              }
            }
          });
          return false; 
        }else{

          $("#alert_error_message").show();

          return false; 
        }
    }); 

      $('#btnSaveContac').click(function(){
        error_permanent_address = false;
        error_home_phone = false;
        error_mobile_phone = false;

        check_permanent_address();
        check_home_phone();
        check_mobile_phone();  

      if(error_permanent_address == false && error_home_phone == false && error_mobile_phone == false) {      
          $("#alert_error_message_contact").hide();
          data=$('#frmContact').serialize();
          $.ajax({
            type:"POST",
            data:data,
            url:"../process/employees/updateEmployeeContact.php",
            success:function(r){
            if(r==1){            
              alertify.success("Employee information successfuly updated!");
          }else{
              alertify.error("Could not update employee information.");
              }
            }
          });
          return false; 
        }else{
          $("#alert_error_message_contact").show();

          return false; 
        }
    });       

      $('#btnSaveEmergency').click(function(){
         
        error_contact_name = false;
        error_contact_address = false;
        error_contact_phone = false;
        error_contact_email = false;
        error_relation = false; 

        check_contact_name();
        check_contact_address();
        check_contact_phone();
        check_contact_email(); 
        check_relation(); 

      if(error_contact_name == false && error_contact_address == false && error_contact_phone == false && error_contact_email == false && error_relation == false) {      
          $("#alert_error_message_emergency").hide();
          data=$('#frmEmergency').serialize();
          $.ajax({
            type:"POST",
            data:data,
            url:"../process/employees/updateEmployeeEmergency.php",
            success:function(r){
            if(r==1){            
              alertify.success("Employee information successfuly updated!");
          }else{
              alertify.error("Could not update employee information.");
              }
            }
          });
          return false; 
        }else{
          $("#alert_error_message_emergency").show();

          return false; 
        }
    });

      $('#btnSaveCompany').click(function(){
         
        error_department = false;
        error_salary = false;
        error_hired_date = false;
        error_comment = false;

        check_department();
        check_salary();
        check_hired_date();
        check_comment();

      if(error_department == false && error_salary == false && error_hired_date == false && error_comment == false) {      
          $("#alert_error_message_company").hide();
          data=$('#frmCompany').serialize();
          $.ajax({
            type:"POST",
            data:data,
            url:"../process/employees/updateEmployeeCompany.php",
            success:function(r){
            if(r==1){            
              alertify.success("Employee information successfuly updated!");
          }else{
              alertify.error("Could not update employee information.");
              }
            }
          });
          return false; 
        }else{
          $("#alert_error_message_company").show();

          return false; 
        }
    });
      $('#btnSaveImage').click(function(){

        var formData = new FormData(document.getElementById("frmEditImage"));

        $.ajax({
          url: "../process/employees/updateProfile.php",
          type: "post",
          dataType: "html",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,

          success:function(r){
            if(r == 1){
              $('#viewImage').empty();
              $("#image").val("");
              location.reload();
              alertify.success("Profile image updated successfully!");

              
            }else{
              alertify.error("Could not update the profile image");
            }
          }
        });
        
    });  
      $('#btnCancelPersonal').click(function(){
        cancelUpdating();
      });
      $('#btnCancelContact').click(function(){
        cancelUpdating();
      });
      $('#btnCancelEmergency').click(function(){
        cancelUpdating();
      });
      $('#btnCancelCompany').click(function(){
        cancelUpdating();
      });


function cancelUpdating(){
        alertify.confirm('Cancel updating employee information','Do you want to cancel updating employee information?', function(){

          location.reload();

        }, function(){ 
        });
  }
});
</script>

  <script type="text/javascript">
    $(document).ready(function(){
    $("#alert_error_message").hide();

    var idEmployee ="<?php echo $idEmployee; ?>";
    addEmployeeData2(idEmployee);

function addEmployeeData2(idEmployee){
      $.ajax({
        type:"POST",
        data:"idEmployee=" + idEmployee,
        url:"../process/employees/getEmployeeData.php",
        success:function(r){
          data=jQuery.parseJSON(r); 
          $('#idEmployee').val(data['id_employee']);
          $('#idEmployeeContact').val(data['id_employee']);
          $('#idEmployeeEmergency').val(data['id_employee']);
          $('#idEmployeeCompany').val(data['id_employee']);
          $('#idEmployeeImage').val(data['id_employee']);
          $('#viewImage').prepend('<img class="img-thumbnail" id="imgp" src="' + data['image'] + '"  width="200" height="200"/>');
          $('#fullname').val(data['fullName']);
          $('#email').val(data['email']);
          $('#address').val(data['localAddess']);
          $('#birth_date').val(data['dateBirth']);
          $('#birth_address').val(data['birthPlace']);
          //To chech the correct gender
          var gender = data['gender'];
          if (gender == 'Male'){
            $('#gender1').attr('checked', true);
          }else if (gender == 'Female'){
            $('#gender2').attr('checked', true);
          } else{
            $('#gender3').attr('checked', true);
          }          
          $('#marital_status').val(data['maritalStatus']);
          $('#nationality').val(data['nationality']);
         
          $('#permanent_address').val(data['permanentAddress']);  
          $('#home_phone').val(data['telephone']);
          $('#mobile_phone').val(data['cellphone']);

          $('#contactName').val(data['contactFullname']);     
          $('#contact_address').val(data['contactAddress']);
          $('#contactPhone').val(data['contactTelephone']);
          $('#contactEmail').val(data['contactEmail']);
          $('#relation').val(data['contactRelation']);

          $('#idDepartment').val(data['id_department']);
          $('#addDepartment2').text(data['department']);
          $('#department').val(data['department']); 
          $('#salary').val(data['salary']);
          $('#hired_date').val(data['hiredDay']);
          $('#employee_status').val(data['status']);
          $('#comment').val(data['comments']);
        
            //Add deparments to department input.
           $('#addDepartment').select2();
           $('#addDepartment').select2({placeholder: '--Select Department--'});


        }
      });
    }

          //Count the amount of characters left in the comment input text area.
          var max_value = 200;

          $('#comment').keyup(function(){
             var text_length= $('#comment').val().length;
             var text_remain= max_value - text_length;
             $('#left').html(text_remain +' characters left.')
            })

          // Used to format phone number
function phoneFormatter() {
  $('.phone').on('input', function() {
    var number = $(this).val().replace(/[^\d]/g, '')
    if (number.length == 7) {
      number = number.replace(/(\d{3})(\d{4})/, "$1-$2");
    } else if (number.length == 10) {
      number = number.replace(/(\d{3})(\d{3})(\d{4})/, "($1) $2-$3");
    }
    $(this).val(number)
  });
};

$(phoneFormatter);

    });

</script>