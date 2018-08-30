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

-
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!--  Include the above in your HEAD tag -------- -->

        
<div class="container">
    <div class="row">
        <form>
        <div class="col-md-12">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Logical Data Component</h3>
                  </div>
                  <div class="panel-body">
                        <div class="row">
  
<!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->
  
                            <div class="col-md-6">
                                <div class="panel panel-primary">
                                  <div class="panel-heading">
                                    <h3 class="panel-title">Personal Information</h3>
                                  </div>
                                  <div class="panel-body">
                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Conceptual Data</label>
                                                    <input id="name" name="name" type="text" placeholder="ลูกค้า" class="form-control input-md">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Data Entity</label>
                                                    <input id="email" name="email" type="text" placeholder="ผู้ชำระเบี้ยประกัน" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Logical Data Component</label>
                                                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Description</label>
                                                    <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="time">Classification Level</label>
                                                        <select id="time" name="time" class="form-control">
                                                            <option value="1">Secret</option>
                                                            <option value="2">Confidential</option>
                                                            <option value="3">Internal Use Only</option>
                                                            <option value="4">Public</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Status</label>
                                                        <div class="radio">
                                                    <label class="radio-inline">
                                                        <input type="radio" id="femaleRadio" name="statusRadio" value="Female">Active
                                                    </label>
                                            		<label class="radio-inline">
                                                        <input type="radio" id="maleRadio" name="statusRadio" value="Male">Inactive
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->
                        <div class="col-md-6">
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <h3 class="panel-title">Contact Information</h3>
                                  </div>
                                  <div class="panel-body">
                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Conceptual Data</label>
                                                    <input id="name" name="name" type="text" placeholder="ลูกค้า" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Data Entity</label>
                                                    <input id="email" name="email" type="text" placeholder="ผู้ชำระเบี้ยประกัน" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Logical Data Component</label>
                                                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Description</label>
                                                    <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="time">Classification Level</label>
                                                        <select id="time" name="time" class="form-control">
                                                            <option value="1">Secret</option>
                                                            <option value="2">Confidential</option>
                                                            <option value="3">Internal Use Only</option>
                                                            <option value="4">Public</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Status</label>
                                                        <div class="radio">
                                                    <label class="radio-inline">
                                                        <input type="radio" id="femaleRadio" name="statusRadio" value="Female">Active
                                                    </label>
                                            		<label class="radio-inline">
                                                        <input type="radio" id="maleRadio" name="statusRadio" value="Male">Inactive
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->
                        <div class="col-md-6">
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <h3 class="panel-title">Emergency Contact Information</h3>
                                  </div>
                                  <div class="panel-body">
                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Conceptual Data</label>
                                                    <input id="name" name="name" type="text" placeholder="ลูกค้า" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Data Entity</label>
                                                    <input id="email" name="email" type="text" placeholder="ผู้ชำระเบี้ยประกัน" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Logical Data Component</label>
                                                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Description</label>
                                                    <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="time">Classification Level</label>
                                                        <select id="time" name="time" class="form-control">
                                                            <option value="1">Secret</option>
                                                            <option value="2">Confidential</option>
                                                            <option value="3">Internal Use Only</option>
                                                            <option value="4">Public</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Status</label>
                                                        <div class="radio">
                                                    <label class="radio-inline">
                                                        <input type="radio" id="femaleRadio" name="statusRadio" value="Female">Active
                                                    </label>
                                            		<label class="radio-inline">
                                                        <input type="radio" id="maleRadio" name="statusRadio" value="Male">Inactive
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->                        

                        <div class="col-md-6">
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <h3 class="panel-title">Professional Information</h3>
                                  </div>
                                  <div class="panel-body">
                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Conceptual Data</label>
                                                    <input id="name" name="name" type="text" placeholder="ลูกค้า" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Data Entity</label>
                                                    <input id="email" name="email" type="text" placeholder="ผู้ชำระเบี้ยประกัน" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Logical Data Component</label>
                                                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Description</label>
                                                    <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="time">Classification Level</label>
                                                        <select id="time" name="time" class="form-control">
                                                            <option value="1">Secret</option>
                                                            <option value="2">Confidential</option>
                                                            <option value="3">Internal Use Only</option>
                                                            <option value="4">Public</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Status</label>
                                                        <div class="radio">
                                                    <label class="radio-inline">
                                                        <input type="radio" id="femaleRadio" name="statusRadio" value="Female">Active
                                                    </label>
                                            		<label class="radio-inline">
                                                        <input type="radio" id="maleRadio" name="statusRadio" value="Male">Inactive
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->                        
                       </div>
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="form-group">
                                              <label class="col-md-5 control-label" for="button1id"></label>
                                              <div class="col-md-6">
                                                <button id="button1id" name="button1id" class="btn btn-primary">Create</button>
                                                <button id="button2id" name="button2id" class="btn btn-danger">Cancel</button>
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
    
   </form> 
</div>
</div>
***********************************************************************************************************************
Department



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add New Department</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <p style="color:red"><i>*Required</i></p>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Department*:</label>
            <input type="text" class="form-control" id="department" placeholder="Department">
            <div id="department_error_message" style="color:red"></div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" id="btnSaveDepartment" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>




CSS

	$(document).ready(function () {

   $("#department").focusout(function() {
      check_department();
    });

   function check_department() {
    var customer_length = $("#department").val().length;
    
    if( $.trim( $('#department').val() ) == '' ){
      $("#department_error_message").html("Input is blank!");
      $("#department_error_message").show();
      error_department = true;
      department.style.border = "1px solid red";
      
      }else{
      $("#department_error_message").hide();
      department.style.border = "1px solid #ccc";
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

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1>Enmanuel Gavilan</h1></div>
    </div>
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
                <li><a class="nav-item nav-link active" data-toggle="tab" href="#personal">Personal Inform</a></li>
                <li><a class="nav-item nav-link" data-toggle="tab" href="#contact">Contact Information</a></li>
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
                            <label class="radio-inline"><input type="radio" name="optradio" checked>Male </label>
                            <label class="radio-inline"><input type="radio" name="optradio">Female </label>
                            <label class="radio-inline"><input type="radio" name="optradio">Other</label> 
                            <div id="gender_error_message" style="color:red"></div>
                          </div>
                        </div>
                        <hr>                
                        <div align="center">
                          <button id="btnCancelPersonalInf" class="btn btn-danger">Cancel</button>
                          <button id="btnSavePersonalInf" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
<!--2-Contact Information-------->
            <div class="tab-pane" id="contact">
              <form id="frmPersonal">
                <div class="col-md-12">
                  <br>
                  <div class="card border-primary mb-3">
                    <div class="card">
                      <div class="card-header text-white bg-primary">
                          <h5>Contact Information</h5>
                      </div>
                        <div class="card-body">
                          <p style="color:red"><i>* Required</i></p>
                        <div class="row">
                          <div class="form-group col-md-12">
                            <strong>Home Address *</strong>
                            <textarea class="form-control" id="address" name="address" placeholder="Address" rows="2"></textarea>
                            <div id="home_address_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Home Phone *</strong>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
                            <div id="home_phone_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Mobile Phone *</strong>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
                            <div id="mobile_error_message" style="color:red"></div>
                          </div>                         
                        </div>
                        <hr>                
                        <div align="center">
                          <button id="btnCancelPersonalInf" class="btn btn-danger">Cancel</button>
                          <button id="btnSavePersonalInf" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
             </div>
<!--3-Emergency Contact Information-------->
             <div class="tab-pane" id="emergency">
                    <form id="frmPersonal">
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
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label"><strong>Contact Name *</strong></label>
						                                <input type="text" class="form-control" id="contactName" name="contactName" placeholder="Contact Name">
						                                <div id="contact_name_error_message" style="color:red"></div>
					                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label"><strong>Contact Address *</strong></label>
						                                <textarea type="text" style="overflow:auto;resize:none" class="form-control" id="contactAddress" name="contactAddress" placeholder="Contact Address"></textarea>
					                                    <div id="contact_address_error_message" style="color:red"></div>
					                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label"><strong>Contact Phone No. *</strong></label>
						                                <input type="text" class="form-control" id="contactPhone" name="contactPhone" placeholder="Contact Phone No.">
						                                <div id="contact_phone_error_message" style="color:red"></div>
					                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label"><strong>Contact E-mail *</strong></label>
						                                <input type="text" class="form-control" id="contactEmail" name="contactEmail" placeholder="E-mail">
						                                <div id="contact_email_error_message" style="color:red"></div>
					                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label"><strong>Relation *</strong></label>
						                                <textarea type="text" style="overflow:auto;resize:none" class="form-control" id="relation" name="relation" placeholder="Relation"></textarea>
					                                    <div id="contact_relation_error_message" style="color:red"></div>
					                                </div>
                                                </div>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-14">
                                        <div>
                                            <div>
                                                <div class="form-group">
                                                  <label class="col-md-10 control-label" for="button1id"></label>
                                                  <div align="center" class="col-md-12">
                                                    <button id="buttonCancelPersonalInf" class="btn btn-danger">Cancel</button>
                                                    <button id="buttonSavePersonalInf" class="btn btn-primary">Save</button>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
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
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label"><strong>Profession *</strong></label>
						                                <input type="text" class="form-control" id="contactName" name="contactName" placeholder="Profession">
						                                <div id="profession_error_message" style="color:red"></div>
					                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label"><strong>Experience(years) *</strong></label>
						                                <input type="text" class="form-control" id="experience" name="experience" placeholder="Experience(years)">
						                                <div id="experience_error_message" style="color:red"></div>
					                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label"><strong>School *</strong></label>
						                                <input type="text" class="form-control" id="school" name="school" placeholder="School">
						                                <div id="school_error_message" style="color:red"></div>
					                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label"><strong>Department *</strong></label>
						                                <input type="text" class="form-control" id="department" name="department" placeholder="Department">
						                                <div id="deparment_error_message" style="color:red"></div>
					                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label"><strong>Hired Deparment *</strong></label>
						                                <input type="text" class="form-control" id="hiredDeparment" name="hiredDeparment" placeholder="Hired Deparment">
						                                <div id="hired_department_error_message" style="color:red"></div>
					                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label"><strong>Hiring Date *</strong></label>
						                                <input type="date" class="form-control" id="hiringDate" name="hiringDate" placeholder="Hiring  Date">
						                                <div id="hired_date_error_message" style="color:red"></div>
					                                </div>
                                                </div>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-14">
                                        <div>
                                            <div>
                                                <div class="form-group">
                                                  <label class="col-md-10 control-label" for="button1id"></label>
                                                  <div align="center" class="col-md-12">
                                                    <button id="buttonCancelPersonalInf" class="btn btn-danger">Cancel</button>
                                                    <button id="buttonSavePersonalInf" class="btn btn-primary">Save</button>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
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

*************************************************************************************************************************************


https://bootsnipp.com/snippets/5Moza


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add New Department</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <p style="color:red"><i>*Required</i></p>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Department*:</label>
            <input type="text" class="form-control" id="department" placeholder="Department">
            <div id="department_error_message" class="text-danger"></div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" id="btnSaveDepartment" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

-----------------------------------------------------------------------------------------------


	$(document).ready(function () {

   $("#department").focusout(function() {
      check_department();
    });

   function check_department() {
    var customer_length = $("#department").val().length;
    
    if( $.trim( $('#department').val() ) == '' ){
      $("#department_error_message").html("Input is blank!");
      $("#department_error_message").show();
      error_department = true;
      $("#department").addClass("is-invalid");

      }else{
        $("#department").removeClass("is-invalid");
        //$("#department").addClass("form-control");
        $("#department_error_message").hide();
      
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

