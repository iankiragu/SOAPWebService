<html>

<head>
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
                    RECORD RETRIEVAL USING SOAP
                </span>
                </div>
                <form method="post" class="login100-form validate-form">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="student_id is required">
                    <span class="label-input100"><i class="fa fa-tasks"></i></span>
                    <input class="input100" type="number" class= "input"placeholder="Enter Student ID" name="student_id" >
					</div>
                    <div class="container-login100-form-btn">
                        <input name= "records" value="Retrieve Record" type="submit" class="login100-form-btn"></input>
                    </div>

                </form>
                <form>
            <?php
            require ('lib/nusoap.php');
            if (isset($_POST["records"])){
            #pass wsdl file address
            $client = new nusoap_client("https://localhost/SOAP/serverside.php?wsdl");

            $student_id= $_POST['student_id'];
            $client->call('fetchstudent', array("student_id" => $student_id));
            $name = $client->response;
            echo 'Response:<br>';
            echo '<br>';
            echo $name;

            }
           
            ?>  
                <div class="container-login100-form-btn">
                    <center>
                    <a href="studentform.php" style="font-size: 15px;"><i class="fa fa-arrow-circle-left"></i> Create New Record</a>
                    </center>
                    
                </div>
        </form>
			</div>
		</div>
	</div>
</div>

</body>

</html>
