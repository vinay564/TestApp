

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700"
	rel="stylesheet">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script
	src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
<style type="text/css">
body {
	background-image: url("img/safety.jpg");
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-size: cover;
}

.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}

.form-control:focus {
	border-color: #5cb85c;
}

.form-control, .btn {
	border-radius: 3px;
}

.signup-form {
	width: 400px;
	margin: 0 auto;
	padding: 30px 0;
}

.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}

.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}

.signup-form h2:before {
	left: 0;
}

.signup-form h2:after {
	right: 0;
}

.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}

.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}

.signup-form .form-group {
	margin-bottom: 20px;
}

.signup-form .btn {
	font-size: 16px;
	font-weight: bold;
	min-width: 140px;
	outline: none !important;
}

.signup-form .row div:first-child {
	padding-right: 10px;
}

.signup-form .row div:last-child {
	padding-left: 10px;
}

.signup-form a {
	color: #fff;
	text-decoration: underline;
}

.signup-form a:hover {
	text-decoration: none;
}

.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}

.signup-form form a:hover {
	text-decoration: underline;
}
</style>
<script type="text/javascript"> 
 $(document).ready(function() {

	 $("#registration").validate({
           // Specify validation rules
		    rules: {
		      // The key name on the left side is the name attribute
		      // of an input field. Validation rules are defined
		      // on the right side
		      first_name: "required",
		      last_name: "required",
		      email: {
		        required: true,
		        // Specify that email should be validated
		        // by the built-in "email" rule
		        email: true
		      },
		      password: {
		        required: true,
		        minlength: 5
		      }
		    },
		    // Specify validation error messages
		    messages: {
		      firstname: "Please enter your firstname",
		      lastname: "Please enter your lastname",
		      password: {
		        required: "Please provide a password",
		        minlength: "Your password must be at least 5 characters long"
		      },
		      email: "Please enter a valid email address"
		    },
		    // Make sure the form is submitted to the destination defined
		    // in the "action" attribute of the form when valid
		    submitHandler: function(form) {
		    	  $.ajax({
		              url: 'user_details.php',
		              type: 'POST',
		              data: $(form).serialize(),
		              success: function(response) {
		            	  bootbox.
							confirm('Do you want to Register?',function (result) {
						            if (result == true)
						            	window.location.href = 'login.php';
						        });
		            	  return false;
		              }
		    	            
		          });
		      }
		   
		 
		  });


	 

 });
</script>
</head>
<body>
	<div class="signup-form">
		<form id="registration">
			<h2>Register</h2>
			<p class="hint-text">Create Account</p>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-6">
						<input type="text" class="form-control" name="first_name"
							placeholder="First Name" required="required">
					</div>
					<div class="col-xs-6">
						<input type="text" class="form-control" name="last_name"
							placeholder="Last Name" required="required">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="email"
					placeholder="Email" required="required">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password"
					placeholder="Password" required="required">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="phone_number"
					placeholder="Phone Number" required="required">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success btn-lg btn-block"
					id="btnSubmit">Register Now</button>
			</div>
		</form>
		<div class="text-center" style="color: #fff;">
			Already have an account? <a href="login.php">Sign in</a>
		</div>
	</div>
</body>
</html>