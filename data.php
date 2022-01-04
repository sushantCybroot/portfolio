<?php
    $servername = "database-2.cgio8imajpw9.us-east-2.rds.amazonaws.com";
    $username = "admin";
    $password = "sushantkotian";
    $db_name = "portfolio";

    $conn = new mysqli($servername,$username,$password,$db_name);

    if($conn->connect_error){
        die("Connection error".$conn->connect_error);
    }

    $name = $POST['name'];
    $email = $POST['email'];
    $phone_no = $POST['phone_no'];
    $message = $POST['message'];

    $sql_query = "INSERT INTO portfolio(name,email,phone_no,message) VALUES ($name,$email,$phone_no,$message)";

    if($conn->query($sql_query) === TRUE){
        echo "record inserted";
    }
    else{
        echo "Not recored";
    }
    $conn->close();
    header("Location:https://master.d32d2ak623r2nj.amplifyapp.com");
    exit();

?>