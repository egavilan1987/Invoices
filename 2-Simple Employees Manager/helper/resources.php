-
EMPLOYEE REGISTRATION  FORM

Personal Information
First Name
Las Name
Midle Name
Email
Address
Date of Birth
Place of Birth
(Age)--Calculate base on the date of birth
Gender
	*Male/Female
Picture

Contact Information
Home Addres
Home Phone
Mobile Phone
E-mail

Emergency Contact Information
Contact Name
Contact Address
Contact Phone No.
Contact E-mail
Relation


Professional Information
Profession
Experience(years)
School
Department
Hired Deparment
Hiring  Date


https://www.spreadsheetzone.com/174/Employee-Registration-Form.html


Resources: 

https://codecanyon.net/item/human-resource-payroll-management-system/19534191?s_rank=11
https://codecanyon.net/item/employee-management-system-hrm/21566182?s_rank=1
https://codecanyon.net/item/employee-clock-attendance-v-10/11846747?s_rank=6
https://codecanyon.net/item/employee-management-software-payroll-system-attendance-all-report-full-hrm/21476244?s_rank=13
----------------------------------------------------------------------------------------------------------------------------------


CREATE DATABASE employee;

USE employee;

CREATE TABLE employees(
				id_employee INT AUTO_INCREMENT,

				fullname VARCHAR(50),
				email VARCHAR(50),
				current_address VARCHAR(80),
				date_birth DATE,
				birth_place VARCHAR(80),
				birth_address VARCHAR(80),
				telephone VARCHAR(20),
				gender VARCHAR(10),
				image VARCHAR(20),

				current_address2 VARCHAR(80),
				telephone VARCHAR(20),
				cellphone VARCHAR(20),

				contact_fullname VARCHAR(50),
				contact_address VARCHAR(80),		
				contact_telephone VARCHAR(20),
				contact_email VARCHAR(50),
				contact_relation VARCHAR(80),

				contact_profession VARCHAR(50),
				contact_experience VARCHAR(50),
				contact_school VARCHAR(50),
				contact_department VARCHAR(50),
				contact_hired_day DATE(50),
				file VARCHAR(20),

				created_date DATETIME,
				updated_date DATETIME,

					);

----------------------------------------------------------------------------------------------------------------------------------
                id_employee,
                fullname,
                email,
                local_address,
                date_birth,
                birth_place,
                birth_address,
                gender,
                nationality,
                marital_status,
                image,
                permanent_address,
                telephone,
                cellphone,
                contact_fullname,
                contact_address,        
                contact_telephone,
                contact_email,
                contact_relation,
                department,
                salary,
                estatus,
                comments,
                hired_day,
                resume_path,
                created_date,
                updated_date,


----------------------------------------------------------------------------------------------------------------------------------
https://bootsnipp.com/snippets/BE7rQ

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

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
          <div class="row">
          <div class="col-sm-3">
            <div class="text-center">
              <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="img-thumbnail" alt="avatar">
              <h6>Upload a different photo...</h6>
              <input type="file" class="text-center center-block file-upload">
              </div><br>
            </div>
          <div class="col-sm-8">
          <ul class="nav nav-tabs">
            <li><a class="nav-item nav-link" data-toggle="tab" href="#personal">Personal Inform</a></li>
            <li><a class="nav-item nav-link active" data-toggle="tab" href="#contact">Contact Information</a></li>
            <li><a class="nav-item nav-link"  data-toggle="tab" href="#emergency">Emergency Information</a></li>
            <li><a class="nav-item nav-link" data-toggle="tab" href="#professional">Professional Information</a></li>
          </ul>
<!--1-Personal Information-------->              
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
                        <p style="color:red"><i>* Required</i></p>
                        <div class="row">
                          <div class="form-group col-md-12">
                            <strong>Full Name *</strong>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
                            <div id="fullname_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>E-mail *</strong>
                            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                            <div id="email_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Address *</strong>                                
                            <textarea class="form-control" id="address" name="address" placeholder="Address" rows="2"></textarea>
                            <div id="address_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Date of Birth *</strong>
                            <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="Date of Birth">
                            <div id="birthdate_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Place of Birth *</strong>                                
                            <textarea class="form-control" id="birthPlace" name="birthPlace" placeholder="Address" rows="2"></textarea>
                            <div id="birthplace_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Gender *</strong><br>
                            <label class="radio-inline"><input type="radio" name="gender" value="Male" checked>Male </label>
                            <label class="radio-inline"><input type="radio" name="gender" value="Female">Female </label>
                            <label class="radio-inline"><input type="radio" name="gender" value="Other">Other</label> 
                            <div id="gender_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Nationality *</strong>
                            <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality">
                            <div id="nationality_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Marital Status *</strong><br>
                            <select name="status" id="status" class="form-control">
                              <option value="" hidden>Marital Status</option>
                              <option>Single</option>
                              <option>Married</option>
                              <option>Divorced</option>
                            </select>
                            <div id="role_error_message" style="color:red"></div>
                          </div>
                        </div>
                        <hr>                
                        <div align="center">
                          <button id="btnCancelPersonal" class="btn btn-danger">Cancel</button>
                          <button id="btnSavePersonal" class="btn btn-primary">Save</button>
                        </div>
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
                  <div class="card border-primary mb-3">
                    <div class="card">
                      <div class="card-header text-white bg-primary">
                          <h5>Contact Information</h5>
                      </div>
                        <div class="card-body">
                          <p class="text-danger"><i>* Required</i></p>
                        <div class="row">
                          <div class="form-group col-md-12">
                            <strong>Permanent Address *</strong>
                            <textarea class="form-control" id="permanet_address" name="permanet_address" placeholder="Permanent Address" maxlength="50" rows="2"></textarea>
                            <div id="permanet_address_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Home Phone *</strong>
                            <input type="text" class="form-control" id="home_phone" name="home_phone" placeholder="Home Phone" maxlength="15">
                            <div id="home_phone_error_message" class="text-danger"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Mobile Phone *</strong>
                            <input type="text" class="form-control" id="cellphone" name="cellphone" placeholder="Mobile Phone" maxlength="15">
                            <div id="cellphone_error_message" class="text-danger"></div>
                          </div>                         
                        </div>
                        <hr>                
                        <div align="center">
                          <button id="btnCancelContact" class="btn btn-danger">Cancel</button>
                          <button id="btnSaveContact" class="btn btn-primary">Save</button>
                        </div>
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
                  <div class="card border-primary mb-3">
                    <div class="card">
                      <div class="card-header text-white bg-primary">
                          <h5>Emergency Contact Information</h5>
                      </div>
                        <div class="card-body">
                          <p style="color:red"><i>* Required</i></p>
                        <div class="row">
                          <div class="form-group col-md-12">
                            <strong>Contact Name *</strong>
                            <input type="text" class="form-control" id="contactName" name="contactName" placeholder="Contact Name">
                            <div id="contact_name_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Contact Address *</strong>
                            <textarea type="text" class="form-control" id="contactAddress" name="contactAddress" placeholder="Contact Address" rows="2"></textarea>
                            <div id="contact_address_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Contact Phone No. *</strong>
                            <input type="text" class="form-control" id="contactPhone" name="contactPhone" placeholder="Contact Phone No.">
                            <div id="contact_phone_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Contact E-mail *</strong>
                            <input type="text" class="form-control" id="contactEmail" name="contactEmail" placeholder="E-mail">
                            <div id="contact_email_error_message" style="color:red"></div>
                          </div> 
                          <div class="form-group col-md-12">
                            <strong>Relation *</strong>
                            <textarea type="text" class="form-control" id="relation" name="relation" placeholder="Relation" rows="2" ></textarea>
                            <div id="contact_relation_error_message" style="color:red"></div>
                          </div>                          
                        </div>
                        <hr>                
                        <div align="center">
                          <button id="btnCancelEmergency" class="btn btn-danger">Cancel</button>
                          <button id="btnSaveEmergency" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
<!--4-Professional Information-------->
              <div class="tab-pane" id="professional">
              <form id="frmPersonal">
                <div class="col-md-12">
                  <br>
                  <div class="card border-primary mb-3">
                    <div class="card">
                      <div class="card-header text-white bg-primary">
                          <h5>Professional Information</h5>
                      </div>
                        <div class="card-body">
                          <p style="color:red"><i>* Required</i></p>
                        <div class="row">
                          <div class="form-group col-md-12">
                            <strong>Profession *</strong>
                            <input type="text" class="form-control" id="contactName" name="contactName" placeholder="Profession">
                            <div id="profession_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Experience(years) *</strong>
                            <input type="text" class="form-control" id="experience" name="experience" placeholder="Profession">
                            <div id="experience_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>School *</strong>
                            <input type="text" class="form-control" id="school" name="school" placeholder="Profession">
                            <div id="school_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Department *</strong>
                            <input type="text" class="form-control" id="department" name="department" placeholder="Profession">
                            <div id="add_department_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Hired Department *</strong>
                            <input type="text" class="form-control" id="hired_department" name="hired_department" placeholder="Profession">
                            <div id="hired_department_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Hiring Date *</strong>
                              <input type="date" class="form-control" id="hiringDate" name="hiringDate" placeholder="Hiring  Date">
                              <div id="hired_date_error_message" style="color:red"></div>
                          </div>                          
                        </div>
                        <hr>                
                        <div align="center">
                          <button id="btnCancelProfessional" class="btn btn-danger">Cancel</button>
                          <button id="btnSaveProfessional" class="btn btn-primary">Save</button>
                        </div>
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
	
	
	//////////////////////////////////////////////////////////////////////////
	
	
		$(document).ready(function () {

   $("#permanet_address").focusout(function() {
      check_permanet_address();
    });

   $("#home_phone").focusout(function() {
      check_home_phone();
    });

   $("#cellphone").focusout(function() {
      check_cellphone();
    });   

   function check_permanet_address() {
        
    var permanet_address_length = $("#permanet_address").val().length;
    
    if( $.trim( $('#permanet_address').val() ) == '' ){
      $("#permanet_address_error_message").html("Input is blank!");
      $("#permanet_address_error_message").show();
      error_address = true;
      $("#permanet_address").addClass("is-invalid");
      }else if(permanet_address_length < 5 || permanet_address_length > 80) {
      $("#permanet_address_error_message").html("Should be between 5-80 characters");
      $("#permanet_address_error_message").show();
      error_address = true;
      $("#permanet_address").addClass("is-invalid");
      }else{
      $("#permanet_address_error_message").hide();
      $("#permanet_address").removeClass("is-invalid");
    }
  }
  
   function check_home_phone() {
        
    var home_phone_length = $("#home_phone").val().length;
    
    if( $.trim( $('#home_phone').val() ) == '' ){
      $("#home_phone_error_message").html("Input is blank!");
      $("#home_phone_error_message").show();
      error_address = true;
      $("#home_phone").addClass("is-invalid");
      }else if(home_phone_length < 5 || home_phone_length > 80) {
      $("#home_phone_error_message").html("Should be between 5-80 characters");
      $("#home_phone_error_message").show();
      error_address = true;
      $("#home_phone").addClass("is-invalid");
      }else{
      $("#home_phone_error_message").hide();
      $("#home_phone").removeClass("is-invalid");
    }
  }
  
  
     function check_cellphone() {
        
    var cellphone_length = $("#cellphone").val().length;
    
    if( $.trim( $('#cellphone').val() ) == '' ){
      $("#cellphone_error_message").html("Input is blank!");
      $("#cellphone_error_message").show();
      error_address = true;
      $("#cellphone").addClass("is-invalid");
      }else if(cellphone_length < 5 || cellphone_length > 80) {
      $("#cellphone_error_message").html("Should be between 5-80 characters");
      $("#cellphone_error_message").show();
      error_address = true;
      $("#cellphone").addClass("is-invalid");
      }else{
      $("#cellphone_error_message").hide();
      $("#cellphone").removeClass("is-invalid");
    }
  }
  
  
$('#btnSaveDepartment').click(function(){
        error_department = false;
        
        check_department();
        
        if(error_department == false){
            alert("Good to go");
        }

    });
    
    
});





















-

