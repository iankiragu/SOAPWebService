<?php

function fetchstudent($admission_no)
{
    echo "<br>";
    echo "<br>";
    echo "Fetched Results";
    echo "<br>";

    $conn = mysqli_connect('localhost', 'root', '', 'soapwork');
    $query = "SELECT * FROM student";
    $result = mysqli_query($conn, $query);

    $student_id = "";
    $student_name =    "";
    $email =    "";
    $phone_number =   "";
    $address =   "";


    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["student_id"] == $admission_no) {
            $student_id =     $row["student_id"];
            $student_name =     $row["student_name"];
            $email = $row["email"];
            $phone_number =    $row["phone_number"];
            $address =     $row["address"];
            $entrypoints =     $row["entrypoints"];

            echo "<br>";

            echo "Student ID: $student_id" . "<br>";
            echo "Student Name: $student_name " . "<br>";
            echo "Email:  $email " . "<br>";
            echo "Phone Number: $phone_number" . "<br>";
            echo "Student Address: $address " . "<br>";
            echo "Entry Points: $entrypoints " . "<br>";
            echo "<br>";
        }
    }

    mysqli_close($conn);
}