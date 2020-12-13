<!DOCTYPE html>
<html lang="en">
<head>
	<title>REGISTER</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style>
		body {
    	background-image:url("hd.jpg");
			height: 100%;
			background-position: center;
			background-repeat: repeat;
			background-size: cover;
		}
</style>
<script language="javascript">
function check()
{
if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
</head>

<body>

	<div class="limiter home">
		<div class="container-login100">
					<div class=" row wrap-login100 ">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(hd.jpg);">

					<span class="login100-form-title-1">
				    REGISTER STUDENT

					</span>
				</div>
				<form name= "form1" action="signup.php" method="post" class="login100-form validate-form" onSubmit="return check();">
        <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
            <span class="label-input100"><i class="fa fa-tasks"></i></span>
            <input class="input100" type="text" class= "input"placeholder="Enter Student ID" name="student_id" id="student_id"required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100"><i class="fa fa-envelope"></i></span>
						<input class="input100" type="text" placeholder="Enter Email" name="email" id= "email"required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100"><i class="fa fa-user"></i></span>
						<input type="text" class="input100" placeholder="Enter Name" name="student_name" id="student_name"required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate = "Password is required">
						<span class="label-input100"><i class="fa fa-phone" aria-hidden="true"></i></span>
						<input type="text" class="input100" placeholder="Enter Phone Number" name="phone_number" id="phone_number"required>
						<span class="focus-input100"></span>
					
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Address is required">
						<span class="label-input100"><i class="fa fa-home"></i></span>
						<input type="text" class="input100" placeholder="Enter Address" name="address" id="address" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Entry Points are required">
						<span class="label-input100"><i class="fa fa-book"></i></span>
						<input type="text" class="input100" placeholder="Enter Entrypoints" name="entrypoints" id="entrypoints" required>
						<span class="focus-input100"></span>
					</div>

					
					<div class="container-login100-form-btn">
						<center>
						<button type="submit" class="login100-form-btn">Save Record</button>
						</center>
						<br><br>
					</div>
				
				</form>
			</div>
		</div>
	</div>


</body>
</html>
