  <?php require_once "menu.php"; 
    $id = $_GET['idEmployee'];
  ?>
<html>
 <head>
  <title>Create New Employee</title>
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
        <li class="breadcrumb-item active">Edit Employee</li>
      </ol>
      <a href="employees.php" class="btn btn-success" role="button" aria-pressed="true"><span class="fa fa-table"></span> Employees</a>
      <br>
      <br>
      <!-- Example DataUsers Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-pencil"></i> Edit Employees</div>
        <div class="card-body">
          </tr>
          <div class="table-responsive">
            <div class="container">
              <form id="frmSimpleInvoice">
                <h2>Edit Simple Employees</h2>
                <hr class="colorgraph">
                
                <div id="alert_error_message" class="alert alert-danger collapse">
                  <i class="fa fa-exclamation-triangle"></i>
                  <strong>Alert!</strong> Please check in on some of the fields below.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                <p style="color:red"><i>*Required</i></p>
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <input type="text" hidden="" id="idInvoice" name="idInvoice">
                    <div class="form-group">
                      <h6>Customer Name</h6>
                      <input  name="customer" id="customer" maxlength="30" class="form-control input-lg" placeholder="Customer Name*">
                      <div id="customer_error_message" style="color:red"></div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <h6>Telephone Number</h6>
                      <input type="text" maxlength="15" name="input_111[]" value="" tabindex="111" id="telephone" class="form-control input-lg" placeholder="Telephone*">
                      <div id="telephone_error_message" style="color:red"></div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <h6>Amount</h6>
                      <input type="number" min="0" name="amount" id="amount" class="form-control input-lg" placeholder="Amount*">
                      <div id="amount_error_message" style="color:red"></div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <h6>Tax</h6>
                      <input type="number" min="0" name="tax" id="tax" class="form-control input-lg" placeholder="Tax*">
                    <div id="tax_error_message" style="color:red"></div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                    <h6>Description</h6>
                    <textarea class="form-control" type="textarea" name="description" id="description" placeholder="Description*" maxlength="140" rows="7"></textarea>
                        <div id="description_error_message" style="color:red"></div>
                        <span class="help-block"><p id="characterLeft" class="help-block">You have reached the limit</p></span>
                        
                    </div>
                </div>
                    <button type="button" id="btnCancel"  class="btn btn-danger">Cancel</button>
                    <button type="button" id="btnAddInvoice" class="btn btn-primary">Save</button>
              </form>            
          </div>
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
            url:"../process/invoice/updateInvoice.php",
            success:function(r){
            if(r==1){
            
              //$('#frmSimpleInvoice')[0].reset();
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

    var idInvoice ="<?php echo $id; ?>";
    addData(idInvoice);



function addData(idInvoice){
      $.ajax({
        type:"POST",
        data:"idInvoice=" + idInvoice,
        url:"../process/invoice/getInvoiceData.php",
        success:function(r){
          data=jQuery.parseJSON(r); 
          $('#idInvoice').val(data['id_invoice']);
          $('#customer').val(data['customer_name']);
          $('#telephone').val(data['customer_telephone']);
          $('#description').text(data['description']);
          $('#amount').val(data['total']);
          $('#tax').val(data['percent_tax']);
            
        }
      });
    }





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