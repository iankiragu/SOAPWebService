<!DOCTYPE html>
<html lang="en">
<head>
	<title>Post Result</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>

	<div class="limiter home">
		<div class="container-login100">
					<div class=" row wrap-login100 ">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(hd.jpg);">

					<span class="login100-form-title-1">
						Back Home

					</span>
				</div>
			<?php
			extract($_POST);
			include("database.php");
			$rs=mysqli_query($conn,"select * from student where student_id='$student_id'");
			if (mysqli_num_rows($rs)>0)
			{
				echo "<br><br><br><div class=head1>This Student Id Already Exists</div>";
				exit;
			}
			$query="insert into student(student_id,student_name,email,address,phone_number,entrypoints) values('$student_id','$student_name','$email','$address','$phone_number','$entrypoints')";
			$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
			echo "<br><br><br><div class=head1>Your Student ID  $student_id Was Created Sucessfully</div>";
			?>
<br><br>
<div class="container-login100-form-btn">
	<center>
	<a href="studentform.php" style="font-size: 15px;"><i class="fa fa-arrow-circle-left"></i> Create New Record</a>
	</center>
	<br><br>
</div>
				
			</div>
		</div>
	</div>
	</div>
</body>
</html>
