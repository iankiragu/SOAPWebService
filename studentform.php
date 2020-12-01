<!DOCTYPE HTML>
<html>
  <title> Student Details</title>

  <link rel= "stylesheet" href="style.css"
<body>
<form name= "form1" action="signup.php" method="post"style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="student_id"><b>Student ID</b></label>
    <input type="text" placeholder="Enter Student ID" name="student_id" id="student_id"required>

    <label for="Student_name"><b>Student Name</b></label>
    <input type="text" placeholder="Enter Name" name="student_name" id="student_name"required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id= "email"required>

    <label for="phone_number"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phone_number" id="phone_number"required>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" id="address" required>

    <label for="entrypoints"><b>Entrypoints</b></label>
    <input type="text" placeholder="Enter Entrypoints" name="entrypoints" id="entrypoints" required>
    
    <div class="clearfix">
      <button type="submit" class="signupbtn">Save Record</button>
    </div>
  </div>
</form>
</body>
</html>
