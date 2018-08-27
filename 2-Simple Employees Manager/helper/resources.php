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



-

