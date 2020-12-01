<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
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
echo "<br><br><br><div class=head1>Your Student ID  $student_id Created Sucessfully</div>";

?>
</body>
</html>