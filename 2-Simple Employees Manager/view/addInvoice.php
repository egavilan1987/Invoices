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
      <a href="employees.php" class="btn btn-success" role="button" aria-pressed="true"><span class="fa fa-table"></span> Employess</a>
      <br>
      <br>
      <!-- Example DataUsers Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Add New Employee</div>
        <div class="card-body">
          </tr>

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





<div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
  <div >
                    <form id="frmPersonal">
                            <div class="col-md-12">
                                <br>
                                <div class="panel panel-primary">
                                  <div class="panel-heading">
                                    <h3 class="panel-title">Personal Information</h3>
                                  </div>
                                  <div class="panel-body">
                                      <p style="color:red"><i>* Required</i></p>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Full Name *</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
                                            <div id="fullname_error_message" style="color:red"></div>
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">E-mail *</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Address *</label>
                                            <textarea type="text" style="overflow:auto;resize:none" class="form-control" id="address" name="address" placeholder="Address"></textarea>
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Date of Birth *</label>
                                            <input type="date" class="form-control" id="dateBirth" name="dateBirth" placeholder="Date of Birth">
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Place of Birth *</label>
                                            <textarea type="text" style="overflow:auto;resize:none" class="form-control" id="address" name="address" placeholder="Address"></textarea>
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Full Name *</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name*">
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Gender *</label><br>
                                             <label class="radio-inline"><input type="radio" name="optradio">Male</label>
                                                         <label class="radio-inline"><input type="radio" name="optradio">Female</label>
                                                         <label class="radio-inline"><input type="radio" name="optradio">Other</label> 
                                          </div>
                                                </div>
                                            </div>

                                    </div>
                                    <hr>
                                    <div class="col-md-14">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
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
                    </form>
  </div>
</div>











      <div class="col-sm-8">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#personal">Personal Information</a></li>
                <li><a data-toggle="tab" href="#contact">Contact Information</a></li>
                <li><a data-toggle="tab" href="#emergency">Emergency Information</a></li>
                <li><a data-toggle="tab" href="#professional">Professional Information</a></li>
              </ul>
<!--1-Personal Information-------->              
          <div class="tab-content">
            <div class="tab-pane active" id="personal">
                    <form id="frmPersonal">
                            <div class="col-md-12">
                                <br>
                                <div class="panel panel-primary">
                                  <div class="panel-heading">
                                    <h3 class="panel-title">Personal Information</h3>
                                  </div>
                                  <div class="panel-body">
                                      <p style="color:red"><i>* Required</i></p>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Full Name *</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
                                            <div id="fullname_error_message" style="color:red"></div>
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">E-mail *</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Address *</label>
                                            <textarea type="text" style="overflow:auto;resize:none" class="form-control" id="address" name="address" placeholder="Address"></textarea>
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Date of Birth *</label>
                                            <input type="date" class="form-control" id="dateBirth" name="dateBirth" placeholder="Date of Birth">
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Place of Birth *</label>
                                            <textarea type="text" style="overflow:auto;resize:none" class="form-control" id="address" name="address" placeholder="Address"></textarea>
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Full Name *</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name*">
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Gender *</label><br>
                                             <label class="radio-inline"><input type="radio" name="optradio">Male</label>
                                                         <label class="radio-inline"><input type="radio" name="optradio">Female</label>
                                                         <label class="radio-inline"><input type="radio" name="optradio">Other</label> 
                                          </div>
                                                </div>
                                            </div>

                                    </div>
                                    <hr>
                                    <div class="col-md-14">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
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
                    </form>
             </div>
<!--2-Contact Information--------> 
             <div class="tab-pane" id="contact">
               <h2></h2>
                    <form id="frmContact">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                  <div class="panel-heading">
                                    <h3 class="panel-title">Contact Information</h3>
                                  </div>
                                  <div class="panel-body">
                                      <p style="color:red"><i>* Required</i></p>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Home Address *</label>
                                            <textarea type="text" style="overflow:auto;resize:none" class="form-control" id="address" name="address" placeholder="Home Address"></textarea>
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Home Phone *</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Home Phone">
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Mobile Phone *</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Mobile Phone">
                                          </div>
                                                </div>
                                            </div>
                                            
                                    </div>
                                    <hr>
                                    <div class="col-md-14">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                  <label class="col-md-10 control-label" for="button1id"></label>
                                                  <div align="center" class="col-md-12">
                                                    <button id="buttonCancelContact" class="btn btn-danger">Cancel</button>
                                                    <button id="buttonSaveContact" class="btn btn-primary">Save</button>
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
<!--3-Emergency Contact Information-------->
             <div class="tab-pane" id="emergency">
            <h2></h2>
                    <form id="frmEmergency">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                  <div class="panel-heading">
                                    <h3 class="panel-title">Emergency Contact Information</h3>
                                  </div>
                                  <div class="panel-body">
                                      <p style="color:red"><i>* Required</i></p>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Contact Name *</label>
                                            <input type="text" class="form-control" id="contactName" name="contactName" placeholder="Contact Name">
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Contact Address *</label>
                                            <textarea type="text" style="overflow:auto;resize:none" class="form-control" id="contactAddress" name="contactAddress" placeholder="Contact Address"></textarea>
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Contact Phone No. *</label>
                                            <input type="text" class="form-control" id="contactPhone" name="contactPhone" placeholder="Contact Phone No.">
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Contact E-mail *</label>
                                            <input type="text" class="form-control" id="contactEmail" name="contactEmail" placeholder="E-mail">
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Relation *</label>
                                            <textarea type="text" style="overflow:auto;resize:none" class="form-control" id="relation" name="relation" placeholder="Relation"></textarea>
                                          </div>
                                                </div>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-14">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                  <label class="col-md-10 control-label" for="button1id"></label>
                                                  <div align="center" class="col-md-12">
                                                    <button id="buttonCancelContact" class="btn btn-danger">Cancel</button>
                                                    <button id="buttonSaveContact" class="btn btn-primary">Save</button>
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
                <h2></h2>
                    <form id="frmProfessional">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                  <div class="panel-heading">
                                    <h3 class="panel-title">Professional Information</h3>
                                  </div>
                                  <div class="panel-body">
                                      <p style="color:red"><i>* Required</i></p>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Profession *</label>
                                            <input type="text" class="form-control" id="contactName" name="contactName" placeholder="Profession">
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Experience(years) *</label>
                                            <input type="text" class="form-control" id="experience" name="experience" placeholder="Experience(years)">
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">School *</label>
                                            <input type="text" class="form-control" id="school" name="school" placeholder="School">
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Department *</label>
                                            <input type="text" class="form-control" id="department" name="department" placeholder="Department">
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Hired Deparment *</label>
                                            <input type="text" class="form-control" id="hiredDeparment" name="hiredDeparment" placeholder="Hired Deparment">
                                          </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <div class="form-group">
                                                        <label class="control-label">Hiring Date *</label>
                                            <input type="date" class="form-control" id="hiringDate" name="hiringDate" placeholder="Hiring  Date">
                                          </div>
                                                </div>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-14">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                  <label class="col-md-10 control-label" for="button1id"></label>
                                                  <div align="center" class="col-md-12">
                                                    <button id="buttonCancelContact" class="btn btn-danger">Cancel</button>
                                                    <button id="buttonSaveContact" class="btn btn-primary">Save</button>
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
  
      $('#btnAddInvoice').click(function(){
        error_customer = false;
        error_telephone = false;
        error_amount = false;
        error_tax = false;
        error_description = false;

        check_customer();
        check_telephone();
        check_amount();
        check_tax();
        check_description();

      if(error_customer == false && error_telephone == false && error_amount == false && error_tax == false && error_description == false) {         
          $("#alert_error_message").hide();
          data=$('#frmSimpleInvoice').serialize();
          $.ajax({
            type:"POST",
            data:data,
            url:"../process/invoice/addInvoice.php",
            success:function(r){
            if(r==1){            
              $('#frmSimpleInvoice')[0].reset();
              alertify.success("New invoice successfuly added!");
          }else{
              alertify.error("Could not add the new invoice.");
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

function phoneFormatter() {
 $(' input[type="text"]').attr({ placeholder : '(___) ___-____' });
  $('input[tabindex="111"]').on('input', function() {
    var number = $(this).val().replace(/[^\d]/g, '')
    if (number.length == 7) {
      number = number.replace(/(\d{3})(\d{4})/, "$1-$2");
    } else if (number.length == 10) {
      number = number.replace(/(\d{3})(\d{3})(\d{4})/, "($1) $2-$3");
     
    }
    $(this).val(number)
    $('input[type="text"]').attr({ maxLength : 10 });
    
  });
};

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