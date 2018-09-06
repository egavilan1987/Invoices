  <?php require_once "menu.php"; 
    $idEmployee = $_GET['idEmployee'];
    ?>
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
                            <select id="status" name="status" class="form-control">
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
                          <p style="color:red"><i>* Required</i></p>
                        <div class="row">
                          <div class="form-group col-md-12">
                            <strong>Home Address *</strong>
                            <textarea class="form-control" id="permanent_address" name="permanent_address" placeholder="Permanet Address" rows="2"></textarea>
                            <div id="home_address_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Home Phone *</strong>
                            <input type="text" class="form-control" id="home_phone" name="home_phone" placeholder="Home Phone">
                            <div id="home_phone_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Mobile Phone *</strong>
                            <input type="text" class="form-control" id="mobile_phone" name="mobile_phone" placeholder="Mobile Phone">
                            <div id="mobile_error_message" style="color:red"></div>
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
                          <h5>Company Details</h5>
                      </div>
                        <div class="card-body">
                          <p style="color:red"><i>* Required</i></p>
                        <div class="row">
                          <div class="form-group col-md-12">
                            <strong>Department *</strong>
                            <input type="text" class="form-control" id="department" name="department" placeholder="Department">
                            <div id="department_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Salary *</strong>
                            <input type="text" class="form-control" id="salary" name="salary" placeholder="Salary">
                            <div id="salary_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Date of Hired *</strong>
                            <input type="date" class="form-control" id="hired_date" name="hired_date" placeholder="Date of Hired">
                            <div id="hired_date_error_message" style="color:red"></div>
                          </div>
                          <div class="form-group col-md-12">
                            <strong>Comment *</strong>
                            <textarea class="form-control" id="comment" name="comment" placeholder="Comment" maxlength="200" rows="7"></textarea>
                            <div id="comment_error_message" style="color:red"></div>
                          </div>

                          <div class="form-group col-md-12">
                            <strong>Department *</strong>
                            <input type="text" class="form-control" id="department" name="department" placeholder="Profession">
                            <div id="add_department_error_message" style="color:red"></div>
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
<script>
$(function() {

  var error_customer = false;
  var error_telephone = false;
  var error_amount = false; 
  var error_tax = false;
  var error_description = false;
  
   $("#customer").focusout(function() {
      check_customer();
    });
   $("#telephone").focusout(function() {
      check_telephone();
    });   
   $("#amount").focusout(function() {
      check_amount();
    });
   $("#tax").focusout(function() {
      check_tax();
    });

   $("#description").focusout(function() {
      check_description();
    });
    
   function check_customer() {
    
    var customer_length = $("#customer").val().length;
    
    if( $.trim( $('#customer').val() ) == '' ){
      $("#customer_error_message").html("Input is blank!");
      $("#customer_error_message").show();
      error_customer = true;
      customer.style.border = "1px solid red";
      
      }else if(customer_length < 5 || customer_length > 30) {
      $("#customer_error_message").html("Should be between 5-30 characters");
      $("#customer_error_message").show();
      error_customer = true;
      customer.style.border = "1px solid red";
      }else{
      $("#customer_error_message").hide();
      customer.style.border = "1px solid #ccc";
    }
  
  }
   function check_telephone() {
    
    var telephone_length = $("#telephone").val().length;
    
    if( $.trim( $('#telephone').val() ) == '' ){
      $("#telephone_error_message").html("Input is blank!");
      $("#telephone_error_message").show();
      error_telephone = true;
      telephone.style.border = "1px solid red";
      }else if(telephone_length < 10) {
      $("#telephone_error_message").html("Telephone number should be 10 digit number.");
      $("#telephone_error_message").show();
      error_telephone = true;
      telephone.style.border = "1px solid red";
      }else{
      $("#telephone_error_message").hide();
      telephone.style.border = "1px solid #ccc";
    }
  
  }
  function check_amount() {
    if($.trim( $('#amount').val() ) == ''){
      $("#amount_error_message").html("Please provide an amount!");
      $("#amount_error_message").show();
      amount.style.border = "1px solid red";
      error_amount = true;
      }else{
      $("#amount_error_message").hide();
      amount.style.border = "1px solid #ccc";
    }
  }
  function check_tax() {
    if($.trim( $('#tax').val() ) == ''){
      $("#tax_error_message").html("Please provide tax!");
      $("#tax_error_message").show();
      tax.style.border = "1px solid red";
      error_tax = true;
      }else{
      $("#tax_error_message").hide();
      tax.style.border = "1px solid #ccc";
    }
  }
     function check_description() {
    
    var description_length = $("#description").val().length;
    
    if( $.trim( $('#description').val() ) == '' ){
      $("#description_error_message").html("Input is blank!");
      $("#description_error_message").show();
      error_description = true;
      description.style.border = "1px solid red";
      
      }else if(description_length < 5 || description_length > 140) {
      $("#description_error_message").html("Should be between 5-140 characters");
      $("#description_error_message").show();
      error_description = true;
      description.style.border = "1px solid red";
      }else{
      $("#description_error_message").hide();
      description.style.border = "1px solid #ccc";
    }
  
  }
  
      $('#btnSavePersonal').click(function(){
        /*error_customer = false;
        error_telephone = false;
        error_amount = false;
        error_tax = false;
        error_description = false;

        check_customer();
        check_telephone();
        check_amount();
        check_tax();
        check_description(); */

      //if(error_customer == false && error_telephone == false && error_amount == false && error_tax == false && error_description == false) {         
          //$("#alert_error_message").hide();
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
        //}else{
          //$("#alert_error_message").show();
          //return false; 
        //}
    });
      $('#btnCancel').click(function(){
        alertify.confirm('Cancel Invoice','Do you want to cancel the new invoice?', function(){
          $('#frmSimpleInvoice')[0].reset(); 
          alertify.error('Canceled!');
          $("#alert_error_message").hide();
          customer.style.border = "1px solid #ccc";
          $("#customer_error_message").hide();
          telephone.style.border = "1px solid #ccc";
          $("#telephone_error_message").hide();
          amount.style.border = "1px solid #ccc";
          $("#amount_error_message").hide();
          tax.style.border = "1px solid #ccc";
          $("#tax_error_message").hide();
          description.style.border = "1px solid #ccc";
          $("#description_error_message").hide();
        }, function(){ 
          alertify.success("Operation Canceled!");
        });
    });
});
    $(document).ready(function(){
    $("#alert_error_message").hide();
//alert();
    var idEmployee ="<?php echo $idEmployee; ?>";
    addEmployeeData(idEmployee);

function addEmployeeData(idEmployee){
      $.ajax({
        type:"POST",
        data:"idEmployee=" + idEmployee,
        url:"../process/employees/getEmployeeData.php",
        success:function(r){
          //alert(r);
          data=jQuery.parseJSON(r); 
          //$('#idEmployee').val(data['id_employee']);
          //$('#idPrintIdEmployee').val(data['id_employee']);
          //$('#viewEmployeeId').text(data['id_employee']);

          //$('#viewImage').prepend('<img class="img-thumbnail" id="imgp" src="' + data['image'] + '"  width="140" height="140"/>');
          $('#fullname').val(data['fullName']);
          $('#email').val(data['email']);
          $('#address').val(data['localAddess']);
          $('#birthDate').val(data['dateBirth']);
          $('#birthPlace').val(data['birthPlace']);
          $('#gender').val(data['gender']);
          $('#status').val(data['maritalStatus']);
          $('#nationality').val(data['nationality']);

          $('#permanent_address').val(data['permanentAddress']);  
          $('#home_phone').val(data['telephone']);
          $('#mobile_phone').val(data['cellphone']);

          $('#contactName').val(data['contactFullname']);     
          $('#contactAddress').val(data['contactAddress']);
          $('#contactPhone').val(data['contactTelephone']);
          $('#contactEmail').val(data['contactEmail']);
          $('#relation').val(data['contactRelation']);

          $('#department').text(data['department']);
          $('#experience').text(data['salary']);
          $('#school').text(data['status']);
          $('#department').text(data['comments']);
          $('#hired_department').text(data['hiredDay']); 


          
  
        }
      });
    }


    });

</script>