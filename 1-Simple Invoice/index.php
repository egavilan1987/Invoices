<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>Login</title>

<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom fonts for this template-->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--login css-->
<link rel="stylesheet" type="text/css" href="css/login.css">
  <!-- Tab Icon-->
<link rel="icon" href="files/EGD.JPG">
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>
<body>
  <div class="login-form">
      <form id="frmLogin">
          <div class="avatar">
              <img src="https://www.tutorialrepublic.com/examples/images/avatar.png" alt="Avatar">
          </div>
          <h2 class="text-center">Member Login</h2>
            <div id="alert_error_message" class="alert alert-danger alert-dismissible fade show" role="alert">
              <i class="fa fa-exclamation-triangle"></i> The username or password is incorrect.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="form-group">
              <input type="text" class="form-control" id="user" name="user" placeholder="Username">
              <div id="username_error_message" style="color:red"></div>
          </div>
          <div class="form-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              <div id="password_error_message" style="color:red"></div>
          </div>        
          <div>
              <button type="button" id="loginBtn" class="btn btn-primary btn-lg btn-block">Sign in</button>
          </div>
      </form>
  </div>
</body>
</html>      

<script>
$(function() {

  var error_username = false;
  var error_password = false;

  $("#user").focusout(function() {
      check_username();
    });
    $("#password").focusout(function() {
      check_password();
    });

function check_username() { 

    var username_length = $("#user").val().length;

    if( $.trim( $('#user').val() ) == '' ){
        $("#username_error_message").html("Input is blank!");
        $("#username_error_message").show();
        error_username = true;
        user.style.border = "1px solid red";
      }else if(username_length < 5 || username_length > 20) {
        $("#username_error_message").html("Should be between 5-20 characters");
        $("#username_error_message").show();
        error_username = true;
        user.style.border = "1px solid red";
        $("#username_error_message").show();
      error_username = true;
      }else{
        $("#username_error_message").hide();
        user.style.border = "1px solid #ccc";
    }
  }

function check_password() {
    
    var password_length = $("#password").val().length;
    
    if(password_length < 8) {
      $("#password_error_message").html("At least 8 characters!");
      $("#password_error_message").show();
      error_password = true;
      password.style.border = "1px solid red";
    }else{
      $("#password_error_message").hide();
      password.style.border = "1px solid #ccc";
    }
  
  }
function login(){
    error_username = false;
    error_password = false;

    check_username();
    check_password();

    
    if(error_username == false && error_password == false) {          
        $("#alert_error_message").hide();
        data=$('#frmLogin').serialize();
        $.ajax({
          type:"POST",
          data:data,
          url:"process/regLogin/login.php",
          success:function(r){
          if(r==1){                
              window.location="view/init.php";                
        }else{
              $("#alert_error_message").show();
            }
          }
        });
      }
    }
    $('#loginBtn').click(function(){
        login();
    });
    $(document).keypress(function(e) {
        if(e.which == 13) {
            login();
        }
    });
});

$(document).ready(function(){
   $("#alert_error_message").hide();
   $('#user').val("");
  });
</script>                      

