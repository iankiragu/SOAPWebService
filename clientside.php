<html>

<head>
    <link rel="stylesheet" type="text/css" href="register_student/style.css">
</head>
<body style="margin: 50 ;">
    <h1>Retrieving Records using the Web Service</h1>
    <form method="post">
        <div class="input-group" , style="width: fit-content;">
            <label>Student ID</label>
            <input type="number" name="student_id" , value="">
        </div>


        <br><br>
        <div class="input-group">
            <button type="submit" class="btn">Retieve Record</button>
        </div>

        <form>
            <br>

            <?php
            require ('lib/nusoap.php');
            #pass wsdl file address
            $client = new nusoap_client("https://localhost/SOAP/serverside.php?wsdl%22%22");

            $student_id= $_POST['student_id'];
            $client->call('fetchstudent', array("student_id" => $student_id));
            $name = $client->response;
            echo 'Response:<br>';
            echo '<br>';
            echo $name;
            ?>

</body>

</html>